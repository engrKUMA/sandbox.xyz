<?php

class Fbtest extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('fb_model');
    }

    /*
      public function index() {

      $this->load->view('fbtest/include/header_view');
      $this->load->view('fbtest/fbtest-index');
      $this->load->view('fbtest/include/footer_view');
      }
     */

    public function get() {
        $data = $this->fb_model->get(2);
        print_r($data);
    }

    public function insert() {
        $result = $this->fb_model->insert(['fbid' => '123', 'fname' => 'aaa', 'lname' => 'sss', 'email' => 'ddd']);
        print_r($result);
    }

}
