<?php

class Auth extends Controller {
	
	public $model;
	
	public function __construct() {
        parent::__construct();
        $this->model = $this->load_model('auth_model');
    }

/*public function validate_Member() {
        $this->model->validate_Member();
        $this->redirect('/');
    }*/

/*public function user_Exists() {
        $this->model->user_Exists();
        $this->redirect('/');
    }*/
	
public function register() {
        $this->model->register();
        $this->redirect('/');
    }
	
public function login() {
		$this->model->login();
		$this->redirect('/');
}
}
