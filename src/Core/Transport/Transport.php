<?php


namespace USpeedo\Core\Transport;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Throwable;
use USpeedo\Core\Exception\USpeedoException;
use USpeedo\Core\Request\Request;
use USpeedo\Core\Response\Response;

class Transport implements TransportInterface
{
    const HEADER_REQUEST_ID = "X-Speedo-Request-Uuid";
    const HEADER_REQUEST_PUB = "X-Access-Key-Id";
    const HEADER_REQUEST_SIG = "X-Signature";
    const HEADER_REQUEST_TS = "X-Timestamp";// Request timestamp, NTP error range is within 5 minutes
    const HEADER_REQUEST_NONCE = "X-Nonce";// Random MAX len 32 char

    /**
     * baseUrl
     *
     * @var string
     */
    private $baseUrl;

    /**
     * baseUrl
     *
     * @var string
     */
    private $userAgent;

    /**
     * baseUrl
     *
     * @var Client
     */
    private $client;

    /**
     * Transport constructor.
     *
     * @param string $baseUrl
     * @param string $userAgent
     * @param array $options
     */
    public function __construct($baseUrl, $userAgent, array $options = [])
    {
        $this->baseUrl = $baseUrl;
        $this->userAgent = $userAgent;
        $this->client = new Client($options);
    }

    /**
     * Invoke action with request object
     *
     * @param Request $req request
     * @return Response
     * @throws USpeedoException
     */
    public function invoke(Request $req)
    {
        // generate timestamp
        $timestamp = time();
        $timestamp_str = strval($timestamp);
        // generate nonce
        $nonce = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 10);

        // do http request
        try {
            $response = $this->client->post($this->baseUrl, [
                RequestOptions::JSON => $req->toArray(),
                RequestOptions::TIMEOUT => $req->loadTimeout(),
                RequestOptions::HEADERS => [
                    "User-Agent" => $this->userAgent,
                    self::HEADER_REQUEST_PUB => $req->get("PublicKey"),
                    self::HEADER_REQUEST_SIG => $req->get("Signature"),
                    self::HEADER_REQUEST_TS => $timestamp_str,
                    self::HEADER_REQUEST_NONCE => $nonce,
                ],
            ]);
        } catch (Throwable $e) {
            throw new USpeedoException(
                USpeedoException::EXC_TYPE_TRANSPORT,
                $e->getMessage(),
                -1,
                $e
            );
        }

        // resolve http response
        $ids = $response->getHeader(self::HEADER_REQUEST_ID);
        $requestId = array_pop($ids);
        $requestId = $requestId == null ? "" : $requestId;
        $resp = new Response(json_decode($response->getBody(), true), $requestId);
        if ($resp->getRetCode() != 0) {
            throw new USpeedoException(
                USpeedoException::EXC_TYPE_RET_CODE,
                $resp->getMessage(),
                $resp->getRetCode(),
                null,
                $requestId
            );
        }
        return $resp;
    }
}
