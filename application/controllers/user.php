<?php

class User extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }
    
    public function login(){
       
        $this->session->set_userdata([
            'id' => 1
        ]);
        
        $session = $this->sesion->userdata('id');
        print_r($session);
       
   }
    
    public function test_get(){
        $data = $this->user_model->get();
        print_r($data);
    }
    
    public function test_insert(){
        $result  = $this->user_model->insert([
            'fbid' => "120398", 'fName' => "1stname", 'lName' => "lastname"
        ]);
        
        print_r($result);
    }
    
    
   
}