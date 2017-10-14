<?php

class Account extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->library('session');

        // Load library and url helper
        $this->load->library('facebook');
        $this->load->helper('url');
    }

    public function index() {

        if ($this->checkUserType() == "private") {
            $this->user_private();
        } else if ($this->checkUserType() == "agent") {
            $this->user_agent();
        } else {
            $this->login();
        }
    }

    public function login() {

        $this->load->view('frontend_view/includes/header');
        $this->load->view('frontend_view/login');
        $this->load->view('frontend_view/includes/footer');
    }

    public function user_private() {

        $userInfo = $this->buildUserInfo();

        $data = json_decode(json_encode($userInfo), True);

        $thedata = array(
            'title' => 'the userdash Page',
            'heading' => 'Welcome to the USERDASH Page',
            'message' => 'This is a test MSG for USERDASH',
            'fbid' => $data['usersFBID'],
            'first_name' => $data['usersFIRST_NAME'],
            'last_name' => $data['usersLAST_NAME'],
            'email' => $data['usersEMAIL'],
            'usertype' => $data['usersUSERTYPE'],
        );

        $this->load->view('frontend_view/includes/header');
        $this->load->view('frontend_view/profile', $thedata);
        $this->load->view('frontend_view/includes/footer');
    }

    public function user_agent() {
        $userInfo = $this->buildUserInfo();

        //converting sdtObject to json format
        $data = json_decode(json_encode($userInfo), True);

        //how to call an item in a json format
        // $var['object key'] 
        $thedata = array(
            'title' => 'the userdash Page',
            'heading' => 'Welcome to the USERDASH Page',
            'message' => 'This is a test MSG for USERDASH',
            'fbid' => $data['usersFBID'],
            'first_name' => $data['usersFIRST_NAME'],
            'last_name' => $data['usersLAST_NAME'],
            'email' => $data['usersEMAIL'],
            'usertype' => $data['usersUSERTYPE'],
        );

        $this->load->view('frontend_view/includes/header');
        $this->load->view('frontend_view/profile', $thedata);
        $this->load->view('frontend_view/includes/footer');
    }

    //function to check the user type of the logged in user in the database and returns user type
    function checkUserType() {
        return $this->users_model->checkUserType();
    }

    //function to build get user info from DB
    function buildUserInfo() {
        return $this->users_model->buildUserInfo();
    }

    //    logout user and clear session data
    public function logout() {
        $this->facebook->destroy_session();
        $this->session->sess_destroy();
        redirect('/');
    }

}
