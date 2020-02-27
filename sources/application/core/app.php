<?php

class App {

    protected $controller = MAIN_CONTROLLER;
    protected $method = MAIN_VIEW;
    protected $params = [];
    
    public function __construct() {

        $url = isset($_GET['url']) ? explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL)) : null;

        if (file_exists('application/controllers/'.$url[0].'.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once 'application/controllers/'.$this->controller.'.php';

        $this->controller = new $this->controller;

        if (isset($url[0]) && method_exists($this->controller, $url[0])) {
            $this->method = $url[0];
            unset($url[0]);

        } else if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}