<?php

class User extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }
    
    public function test_get(){
        $data = $this->user_model->get(123);
        print_r($data);
    }
    
    public function insert(){
        $result  = $this->user_model->insert([
            
        ]);
    }
}