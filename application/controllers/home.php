<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {

        $this->load->view('frontend_view/includes/header');
        $this->load->view('frontend_view/index');
        $this->load->view('frontend_view/includes/footer');
    }
    
    public function test(){
        $this->load->view('dialogView');
    }

}
