<?php


namespace USpeedo\Core\Middleware;

use USpeedo\Core\Config\Config;
use USpeedo\Core\Credential\Credential;
use USpeedo\Core\Exception\USpeedoException;
use USpeedo\Core\Request\Request;
use USpeedo\Core\Response\Response;

class Context
{
    /**
     * Credential
     *
     * @var Credential
     */
    private $credential;

    /**
     * Config
     *
     * @var Config
     */
    private $config;

    /**
     * Request
     *
     * @var Request
     */
    private $request;

    /**
     * Response
     *
     * @var Response
     */
    private $response;

    /**
     * Exception
     *
     * @var USpeedoException
     */
    private $exception;

    /**
     * Get credential
     *
     * @return Credential
     */
    public function getCredential()
    {
        return $this->credential;
    }

    /**
     * Set credential
     *
     * @param Credential $credential Credential
     */
    public function setCredential(Credential $credential)
    {
        $this->credential = $credential;
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
     * Set config
     *
     * @param Config $config Config
     */
    public function setConfig(Config $config)
    {
        $this->config = $config;
    }

    /**
     * Get request
     *
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set request
     *
     * @param Request $request Request
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Get response
     *
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set response
     *
     * @param Response $response Response
     */
    public function setResponse(Response $response)
    {
        $this->response = $response;
    }

    /**
     * Get exception
     *
     * @return USpeedoException
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     * Set exception
     *
     * @param USpeedoException $exception Exception
     */
    public function setException(USpeedoException $exception)
    {
        $this->exception = $exception;
    }
}
