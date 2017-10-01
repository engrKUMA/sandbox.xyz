<?php

class Home extends CI_Controller {

    public function index() {

        $this->load->view('fbtest/include/header_view')->view('fbtest/fbtest_view')->view('fbtest/include/footer_view');
    }

    public function toDash(){

        $this->load->view('user_dash/dash_view');
        $this->load->view('inc/footer_view');

    }

}
