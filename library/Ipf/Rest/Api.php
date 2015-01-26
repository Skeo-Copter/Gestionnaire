<?php

namespace Ipf\Rest;

use Ipf\Http\Request;
use Ipf\Http\Response;
use Ipf\Http\Route;
use Ipf\Http\Router;
use Ipf\Rest\Result\Result404;

class Api
{
    private $request;
    private $router;
    private $response;

    public function __construct()
    {
        $this->setResponse(new Response())
             ->setRouter(new Router())
             ->setRequest($this->getRouter()->getRequest());
    }

    public function serve()
    {
        $route    = $this->getRouter()->run();
        $error404 = new Result404();

        if ($route instanceof Route) {
            $result = call_user_func_array(
                $route->getAction(),
                $this->getRequest()->getParams()
            );
            if (!($result instanceof Result)) {
                $result = $error404;
            }
        } else {
            $result = $error404;
        }
        $this->render($result);
    }

    protected function render(Result $result)
    {
        $response = $this->getResponse();
        $response->setStatusCode($result->code);
        $response->addHeader('Content-Type', 'application/json');
        $response->setBody(json_encode($result));
        $response->output();
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function getRouter()
    {
        return $this->router;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function setRequest(Request $request)
    {
        $this->request = $request;
        return $this;
    }

    public function setRouter(Router $router)
    {
        $this->router = $router;
        return $this;
    }

    public function setResponse(Response $response)
    {
        $this->response = $response;
        return $this;
    }

    public function get($route, $action)
    {
        return $this->addService('GET', $route, $action);
    }

    public function post($route, $action)
    {
        return $this->addService('POST', $route, $action);
    }

    public function put($route, $action)
    {
        return $this->addService('PUT', $route, $action);
    }

    public function delete($route, $action)
    {
        return $this->addService('DELETE', $route, $action);
    }

    protected function addService($method, $uri, $action)
    {
        $route = new Route($method, $uri, $action);
        $this->getRouter()->addRoute($route);
        return $this;
    }
}
