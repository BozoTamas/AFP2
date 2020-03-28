<?php

class Home extends Controller {

    public $model;

    public function __construct() {
        parent::__construct();
        $this->model = $this->load_model('home_model');
    }

    public function index($alias = '') {
        
        if (empty($alias))
            $this->load_view('home/index');
        
        else {
            $url = $this->model->get_url($alias);

            if (!empty($url))
                $this->redirect($url);

            $folder = $this->model->get_folder($alias);

            if (!empty($folder))
                $this->load_view('home/folder', $folder);
            else
                $this->load_view('home/index');
        }
    }

    public function save_link() {
        $this->model->save_link();
        $this->redirect('/');
    }

    public function save_folder() {
        $this->model->save_folder();
        $this->redirect('/');
    }
}