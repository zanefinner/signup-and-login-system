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
            //Else if to validate inputs
            /**Ex:
             *  if(strlen($inputs['uname])>5){
             * return true;
             * }else{return false;}
             */
            //inputs must be 5 or more chars
            return true;
        }
        public function create_new($inputs){
            $this->model->insert($inputs['uname'], $inputs['pword']);
        }
    }