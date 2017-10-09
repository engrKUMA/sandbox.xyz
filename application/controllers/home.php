<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {

        $this->load->view('frontend_view/index');
    }

    public function logout() {
        $this->facebook->destroy_session();
        $this->session->sess_destroy();
        redirect('/home');
    }

}
