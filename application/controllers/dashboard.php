<?php

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {



        $this->user_agent();
    }


        public function user_client(){

           $data = array(
                'title' => 'the userdash Page',
                'heading' => 'Welcome to the USERDASH Page',
                'message' => 'This is a test MSG for USERDASH',
                'usertoken' => 'client',
            );
            $this->load->view('frontend_view/test/test_dash', $data);
          
        }

        public function user_agent(){


                $test = $this->session->userdata('userID');

      print_r($test);

           $data = array(
                'title' => 'the userdash Page',
                'heading' => 'Welcome to the USERDASH Page',
                'message' => 'This is a test MSG for USERDASH',
                'usertoken' => 'agent',
            );
            $this->load->view('frontend_view/test/test_dash', $data);
          
        }        
}
