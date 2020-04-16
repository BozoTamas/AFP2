<?php

class Home extends Controller {

    public $model;
    public $auth_model;

    public function __construct() {
        parent::__construct();
        $this->model = $this->load_model('home_model');
        $this->auth_model = $this->load_model('auth_model');
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

    public function saveLink() {
        $this->model->save_link();
        $this->redirect('/');
    }

    public function saveFolder() {
        $this->model->save_folder();
        $this->redirect('/');
    }
    
    public function startpage() {
        $this->load_view('home/startpage');
    }
    
    public function support() {
        $this->load_view('home/support');
    }
    
    public function login() {
        
        if (empty($_POST)) {
            $this->load_view('home/login');            
        
        } else {
            $this->auth_model->login();
            $this->redirect('/main');
        }
    }
    
    public function register() {
        
        if (empty($_POST)) {
            $this->load_view('home/register');            
        
        } else {
            $this->auth_model->register();
            $this->redirect('/');
        }
    }
}
