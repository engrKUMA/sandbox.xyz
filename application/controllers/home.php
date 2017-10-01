<?php

class Home extends CI_Controller {

    public function index() {

        $this->load ->view('home/include/header_view')
                    ->view('home/home_view')
                    ->view('home/include/footer_view');
    }

    public function toDash(){

        $this->load->view('user_dash/dash_view');
        $this->load->view('inc/footer_view');

    }

}
