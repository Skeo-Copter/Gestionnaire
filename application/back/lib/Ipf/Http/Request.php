<?php

namespace Ipf\Http;

/**
 * Récupération des méthodes GET, POST, PUT, DELETE
 * Récupération de la route provenant du client
 * Récupération de paramètres
 */
class Request
{
    private $uri;
    private $rawBody;
    private $params = array();

    public function __construct($uri = null)
    {
        if ($uri === null) {
            $uri = $this->getServer('REQUEST_URI');
        }
        $this->setUri($uri);
    }

    public function setParam($key, $value)
    {
        $this->params[$key] = $value;
        return $this;
    }

    public function getParam($key)
    {
        if (isset($this->params[$key])) {
            return $this->params[$key];
        }
        return null;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function setParams(array $params)
    {
        foreach ($params as $key => $value) {
            $this->setParam($key, $value);
        }
        return $this;
    }

    public function setUri($uri)
    {
        $this->uri = (string) $uri;
        return $this;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function getGet($key = null)
    {
        if (null === $key) {
            return $_GET;
        }

        if (isset($_GET[$key])) {
            return $_GET[$key];
        }
        return null;
    }

    public function getPost($key = null)
    {
        if (null === $key) {
            return $_POST;
        }

        if (isset($_POST[$key])) {
            return $_POST[$key];
        }
        return null;
    }

    public function getPut()
    {
        return $this->getRawBody();
    }

    public function getRawBody()
    {
        if (null === $this->rawBody) {
            $body = file_get_contents('php://input');
            if (strlen(trim($body)) > 0) {
                parse_str($body, $this->rawBody);
            }
        }
        return $this->rawBody;
    }

    public function isPost()
    {
        return 'POST' === $this->getMethod();
    }

    public function isGet()
    {
        return 'GET' === $this->getMethod();
    }

    public function isPut()
    {
        return 'PUT' === $this->getMethod();
    }

    public function isDelete()
    {
        return 'DELETE' === $this->getMethod();
    }

    public function getMethod()
    {
        return $this->getServer('REQUEST_METHOD');
    }

    public function getServer($key = null)
    {
        if ($key === null) {
            return $_SERVER;
        }
        $key = strtoupper($key);

        if (isset($_SERVER[$key])) {
            return $_SERVER[$key];
        }
        return null;
    }
}
