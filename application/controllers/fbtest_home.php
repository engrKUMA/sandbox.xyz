<?php

class Fbtest_home extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // Load library and url helper
        $this->load->library('facebook');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index() {

        $data = array(
            'title' => 'the Start Page',
            'heading' => 'Welcome to the Start Page',
            'message' => 'This is a test MSG for start page'
        );

        $this->load->view('fbtest_view/fbtest_start', $data);
    }

    public function loginpanel() {

        $data = array(
            'title' => 'the loginpanel Page',
            'heading' => 'Welcome to the loginpanel Page',
            'message' => 'This is a test MSG for loginpanel'
        );

        $this->load->view('fbtest_view/fbtest_login_panel', $data);
    }

    public function userdash() {

        $this->load->view('fbtest_view/include/fbbasesdk');

        $userToken = $this->facebook->is_authenticated();
        print_r($userToken);
//        die('end test');
        if ($userToken != null) {
            $data = array(
                'title' => 'the userdash Page',
                'heading' => 'Welcome to the USERDASH Page',
                'message' => 'This is a test MSG for USERDASH',
                'usertoken' => $userToken
            );
            print_r('where is my token');
            die($userToken);
        } else {
            print_r('no token feedback');
            die($userToken);
        }



//        $this->load->view('fbtest_view/fbtest_user_dash', $data);
    }

    public function logout() {

        //logout from app
        $this->facebook->destroy_session();
        redirect('fbtest_home/', redirect);
    }

    public function test() {
        
        $userToken = $this->facebook->is_authenticated();
        $this->load->view('fbtest_view/include/fbbasesdk');
        
        $fb = $this->facebook->object();

// Get user info
        $response = $fb->get('/me');
        $user = $response->getDecodedBody();

        print_r($user);
    }

}
