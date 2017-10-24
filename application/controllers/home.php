<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');

        $this->load->model('admin_model');
        $this->load->library('table');


    }

    public function index() {

        $this->load->view('frontend_view/includes/header');
        $this->load->view('frontend_view/index');
        $this->load->view('frontend_view/includes/footer');
    }

    public function test(){
        $this->load->view('bsModalTest');

    	// $this->load->view('JQDialogTest');
        // $data['h'] = $this->admin_model->getUserWihRequest();
        // //return the data in view
        // $this->load->view('frontend_view/admin_view/form/userRequestTable', $data);
    }

    public function testtest(){
          $data['h'] = $this->admin_model->getUserWihRequest();
        //return the data in view
        $this->load->view('frontend_view/admin_view/form/userRequestTable', $data);
    }

}
