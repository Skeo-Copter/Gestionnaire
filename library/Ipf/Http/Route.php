<?php

namespace Ipf\Http;

class Route
{
    private $uri;
    private $method;
    private $action;
    private $allowedMethods = array(
        'GET',
        'POST',
        'PUT',
        'DELETE',
    );

    public function __construct($method, $uri, callable $action)
    {
        $this->setMethod($method)
             ->setUri($uri)
             ->setAction($action);
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function setUri($uri)
    {
        $this->uri = (string) $uri;
        return $this;
    }

    public function setMethod($method)
    {
        $method = strtoupper($method);

        if (!in_array($method, $this->allowedMethods)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "%s n'est une méthode valide; %s",
                    $method,
                    __METHOD__
                )
            );
        }

        $this->method = (string) $method;
        return $this;
    }

    public function setAction(callable $action)
    {
        $this->action = $action;
        return $this;
    }


}