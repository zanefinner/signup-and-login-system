<?php namespace Controllers;
    class Users{
        protected $model = '';

        public function __construct($model)
        {
            $this->model = $model;
        }
        public function send_form(){
            require_once 'Views/login.php';
        }
        public function evaluate($inputs){
            print_r($inputs);
        }
    }