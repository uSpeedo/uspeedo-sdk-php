<?php

namespace USpeedo\Core\Config;

use Psr\Log\LoggerInterface;
use USpeedo\Core\Logger\DefaultLogger;

class Config
{
    /**
     * Base url
     *
     * @var string
     */
    private $baseUrl;

    /**
     * User agent
     *
     * @var string
     */
    private $userAgent;

    /**
     * Timeout
     *
     * @var integer
     */
    private $timeout;

    /**
     * Max retries count
     *
     * @var integer
     */
    private $maxRetries;

    /**
     * Logger
     *
     * @var LoggerInterface
     */
    private $logger;

    /**
     * USpeedo SDK
     * - baseUrl: (string) BaseUrl is the url of backend api.
     *   See also <doc link> ...
     * - userAgent: (string) UserAgent is an attribute for sdk client, used for distinguish who is using sdk.
     *   See also https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/User-Agent
     *   It will be appended to the end of sdk user-agent.
     *   eg. "Terraform/0.10.1" -> "GO/1.9.1 GO-SDK/0.1.0 Terraform/0.10.1"
     *   NOTE: it will conflict with the User-Agent of HTTPHeaders
     * - timeout: (string) Timeout is timeout for every request.
     * - maxRetries: (string) MaxRetries is the number of max retry times.
     *   Set MaxRetries more than 0 to enable auto-retry for network and service availability problem
     *   if auto-retry is enabled, it will enable default retry policy using exponential backoff.
     * - logger: (LoggerInterface) if logLevel not be set, use INFO level as default.
     *
     * @param array $args arguments
     */
    public function __construct(array $args)
    {
        $this->setBaseUrl(isset($args["baseUrl"]) ? $args["baseUrl"] : "https://api.uspeedo.com/api");
        $this->setUserAgent(isset($args["userAgent"]) ? $args["userAgent"] : "");
        $this->setTimeout(isset($args["timeout"]) ? $args["timeout"] : 30);
        $this->setMaxRetries(isset($args["maxRetries"]) ? $args["maxRetries"] : 0);
        $this->setLogger(isset($args["logger"]) ? $args["logger"] : new DefaultLogger());
    }

    /**
     * Get base url
     *
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * Set base url
     *
     * @param string $baseUrl base url
     */
    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    /**
     * Get user agent
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Set user agent
     *
     * @param string $userAgent user agent
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    }

    /**
     * Get timeout
     *
     * @return integer
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * Set timeout
     *
     * @param int $timeout timeout
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
    }

    /**
     * Get max retries
     *
     * @return integer
     */
    public function getMaxRetries()
    {
        return $this->maxRetries;
    }

    /**
     * Set max retries
     *
     * @param int $maxRetries max retries
     */
    public function setMaxRetries($maxRetries)
    {
        $this->maxRetries = $maxRetries;
    }

    /**
     * Get logger
     *
     * @return LoggerInterface
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * Set logger
     *
     * @param LoggerInterface $logger logger
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
