<?php

namespace USpeedo\Core;

use USpeedo\Core\Config\Config;
use USpeedo\Core\Credential\Credential;
use USpeedo\Core\Exception\USpeedoException;
use USpeedo\Core\Middleware\Context;
use USpeedo\Core\Middleware\Middleware;
use USpeedo\Core\Request\Request;
use USpeedo\Core\Response\Response;
use USpeedo\Core\Transport\Transport;
use USpeedo\Core\Transport\TransportInterface;

class Client implements ClientInterface
{
    const VERSION = "0.1.0";

    /**
     * Credential object
     *
     * @var Credential
     */
    private $credential;

    /**
     * Config object
     *
     * @var Config
     */
    private $config;

    /**
     * Middleware array
     *
     * @var array<Middleware>
     */
    private $middlewares;

    /**
     * Transport object, customized transport is allowed
     *
     * @var TransportInterface
     */
    private $transport;

    /**
     * Client constructor.
     *
     * @param array $args configuration
     */
    public function __construct(array $args)
    {
        $this->credential = new Credential($args);
        $this->config = new Config($args);
        $this->middlewares = [
            new DefaultsMiddleware(),
            new CredentialMiddleware(),
            new LogMiddleware(),
        ];
        $ua = sprintf("PHP/%s PHP-SDK/%s", phpversion(), self::VERSION);
        if (!empty($this->config->getUserAgent())) {
            $ua = $ua . " " . $this->config->getUserAgent();
        }
        $this->setTransport(new Transport($this->config->getBaseUrl(), $ua));
    }

    /**
     * Invoke an api call from request object
     *
     * @param Request $req request object
     * @return Response response
     * @throws USpeedoException
     */
    public function invoke(Request $req)
    {
        $ctx = new Context();
        $ctx->setConfig($this->getConfig());
        $ctx->setCredential($this->getCredential());

        // resolve request
        $ctx->setRequest($req);
        foreach ($this->middlewares as $i => $m) {
            $ctx->setRequest($m->handleRequest($ctx));
        }

        // do invoking
        $resp = null;
        $maxRetries = $req->loadMaxRetries();
        for ($k = 0; $k <= $maxRetries; $k++) {
            try {
                $resp = $this->getTransport()->invoke($ctx->getRequest());
                break;
            } catch (USpeedoException $e) {
                $ctx->setException($e);
                foreach ($this->middlewares as $i => $m) {
                    $m->handleException($ctx);
                }
                if ($k == $maxRetries) {
                    throw $e;
                }
            }
        }

        // resolve response
        $ctx->setResponse($resp);
        foreach ($this->middlewares as $i => $m) {
            $ctx->setResponse($m->handleResponse($ctx));
        }
        return $ctx->getResponse();
    }

    /**
     * Add a new middleware to client middlewares list
     *
     * @param Middleware $m middleware
     */
    public function useMiddleware(Middleware $m)
    {
        array_push($this->middlewares, $m);
    }

    /**
     * Get config
     *
     * @return Config
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Credential will return the credential object of the client
     *
     * @return Credential
     */
    public function getCredential()
    {
        return $this->credential;
    }

    /**
     * Get transport
     *
     * @return TransportInterface transport
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Set transport
     *
     * @param TransportInterface $transport transport
     */
    public function setTransport(TransportInterface $transport)
    {
        $this->transport = $transport;
    }

    /**
     * A magic method to call action
     *
     * @codeCoverageIgnore
     * @param string $product Product name, upper camel style
     * @param string $action Action name
     * @param Request $req Arguments of action
     * @return Response
     * @throws USpeedoException
     */
    protected function call($product, $action, Request $req)
    {
        $req->setAction($action);
        $outputs = $this->invoke($req)->toArray();
        $respClass = "USpeedo"."\\".$product."\\"."Schema"."\\".$action."Response";
        return new $respClass($outputs);
    }
}
