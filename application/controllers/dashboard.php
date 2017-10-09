<?php

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index() {

//        $this->user_agent();
        $type = $this->checkUserType();

        if ($type == "client") {
            $this->user_client();
        } else if ($type == "agent") {
            $this->user_agent();
        } else {
            die('user type is null');
        }
    }

    public function user_client() {

        $data = array(
            'title' => 'the userdash Page',
            'heading' => 'Welcome to the USERDASH Page',
            'message' => 'This is a test MSG for USERDASH',
            'usertype' => 'client',
        );
        $this->load->view('frontend_view/test/test_dash', $data);
    }

    public function user_agent() {

        $data = array(
            'title' => 'the userdash Page',
            'heading' => 'Welcome to the USERDASH Page',
            'message' => 'This is a test MSG for USERDASH',
            'usertype' => 'agent',
        );
        $this->load->view('frontend_view/test/test_dash', $data);
    }

    //function to check the user type of the logged in user in the database and returns user type
    function checkUserType() {

        $userType = $this->user_model->checkUserType();

        return $userType;
    }

    //testing area
    public function test_dash() {
        $FBID = $this->session->userdata('fbid');
        $email = $this->session->userdata('email');

        print_r($FBID);
        print_r($email);

        die('this is a test');
    }

}
