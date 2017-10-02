<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // Load library and url helper
        $this->load->library('facebook');
        $this->load->helper('url');
    }

    public function index() {

        $this->load->view('home/include/header_view');
        $this->load->view('home/home_view');
        $this->load->view('home/include/footer_view');
    }

    public function toDash() {

        $this->load->view('user_dash/dash_view');
    }

    /**
     * JS SDK login example
     */
    public function js_login() {
        // Load view
        $this->load->view('examples/js');
    }
    
    public function test(){
        $this->load->view('examples/start');
    }

    public function logout() {
        $this->facebook->destroy_session();
        redirect('/home/test', redirect);
    }
}
