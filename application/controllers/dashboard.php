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

        $userInfo = $this->buildUserInfo();

        $data = json_decode(json_encode($userInfo), True);
        
        $thedata = array(
            'title' => 'the userdash Page',
            'heading' => 'Welcome to the USERDASH Page',
            'message' => 'This is a test MSG for USERDASH',
            'fbid' => $data['fbid'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'usertype' => $data['type'],

        );


        $this->load->view('frontend_view/test/test_dash', $thedata);
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
            'fbid' => $data['fbid'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'usertype' => $data['type'],

        );


        $this->load->view('frontend_view/test/test_dash', $thedata);
    }

    //function to check the user type of the logged in user in the database and returns user type
    function checkUserType() {

        $userType = $this->user_model->checkUserType();

        return $userType;
    }

    //function to build get user info from DB
    function buildUserInfo(){
          $userInfo = $this->user_model->buildUserInfo();


          return $userInfo;          
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
