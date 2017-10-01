<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboard
 *
 * @author alfred
 */
class dashboard extends CI_Controller{
    //put your code here
    
    
    public function __construct() {
        parent::__construct();
        $id = $this->session->userdata('id');
        if(!$id){
            $this->logout();
        }
    }
    
    public function index(){
        
        $this->load->view('user_dash/dash_view');
        $this->load->view('home/include/footer_view');
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}
