<?php

//namespace \unlu\paw\core;

/**
* URL Router class
*/
class Router
{

    protected $routes = [];

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($url)
    {
        if (array_key_exists($url, $this->routes)) {
            return $this->routes[$url];
        }

        throw new Exception("No Route defines to this URL: $url", 1);
    }
}
