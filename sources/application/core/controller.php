<?php

class Controller {

    public function __construct() {
        
    }

    public function load_model($model) {
        require_once 'application/models/'.$model.'.php';
        return new $model;
    }

    public function load_view($view, $data = []) {
        require_once 'application/views/template/header.php';
        require_once 'application/views/'.$view.'.php';
        require_once 'application/views/template/footer.php';
    }
    
    public function redirect($url) {
        ob_start();
        header('Location: '.$url);
        ob_end_flush();
        die();
    }
}