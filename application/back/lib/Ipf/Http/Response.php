<?php

namespace Ipf\Http;

class Response
{
    private $statusCode = 200;
    private $headers = array();
    private $body;

    public function setStatusCode($code)
    {
        $this->statusCode = (int) $code;
        return $this;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function addHeader($key, $value)
    {
        $this->headers[$key] = (string) $value;
        return $this;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function redirect($location, $code = 302)
    {
        $this->setStatusCode($code);
        $this->addHeader('Location', $location);
        $this->output();
    }

    public function output()
    {
        http_response_code($this->getStatusCode());

        foreach ($this->getHeaders() as $key => $value) {
            header(sprintf('%s: %s', $key, $value));
        }
        echo $this->getBody();
    }
}
