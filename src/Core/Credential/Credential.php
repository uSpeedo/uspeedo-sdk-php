<?php

namespace USpeedo\Core\Credential;

class Credential implements CredentialInterface
{
    /**
     * Public key
     *
     * @var string
     */
    private $publicKey;

    /**
     * Private key
     *
     * @var string
     */
    private $privateKey;

    /**
     * Credential constructor.
     *
     * @param array $args arguments
     */
    public function __construct(array $args)
    {
        $this->setPrivateKey($args["privateKey"]);
        $this->setPublicKey($args["publicKey"]);
    }

    /**
     * Generate signature string from an array
     *
     * @param array $args arguments to generate signature
     * @return string the signature
     */
    public function verifyAc(array $args)
    {
        ksort($args);
        $s = "";
        foreach ($args as $key => $value) {
            $s .= $key;
            $s .= $this->any2String($value);
        }
        $s .= $this->getPrivateKey();
        return sha1($s);
    }

    private function any2String($v)
    {
        if (is_string($v) || is_bool($v) || is_numeric($v)) {
            return strval($v);
        } elseif (is_array($v)) {
            if (array_keys($v) === range(0, count($v) - 1)) {
                // $v is an indexed array
                $result = [];
                foreach ($v as $item) {
                    $result[] = $this->any2String($item);
                }
                return implode('', $result);
            } else {
                // $v is an associative array
                return $this->obj2String($v);
            }
        } elseif (is_object($v)) {
            return $this->obj2String($v);
        } else {
            return strval($v);
        }
    }

    private function obj2String($v)
    {
        ksort($v);
        $str = '';
        foreach ($v as $key => $value) {
            $str .= $key . $this->any2String($value);
        }
        return $str;
    }

    /**
     * Attach signature and additional key fields to an array
     *
     * @param array $args arguments to by attached
     * @return array array with signature and keys
     */
    public function sign(array $args)
    {
        $args['Signature'] = $this->verifyAc($args);
        // Not involved in signature calculation
        $args['PublicKey'] = $this->getPublicKey();
        return $args;
    }

    /**
     * Get public key
     *
     * @return string
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * Set public key
     *
     * @param string $publicKey Public key
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
    }

    /**
     * Get private key
     *
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->privateKey;
    }

    /**
     * Set private key
     *
     * @param string $privateKey Private key
     */
    public function setPrivateKey($privateKey)
    {
        $this->privateKey = $privateKey;
    }
}
