<?php

class Home extends Controller {

    public $model;

    public function __construct() {
        parent::__construct();
        $this->model = $this->load_model('home_model');
    }

    public function index() {
        $this->load_view('home/index');
    }
}