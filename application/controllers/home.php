<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // Load library and url helper
        $this->load->library('facebook');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index() {

        $this->load->view('frontend_view/index');
    }
    
    public function userdash() {

        $userToken = $this->facebook->is_authenticated();
        
        if ($userToken != null) {
            $data = array(
                'title' => 'the userdash Page',
                'heading' => 'Welcome to the USERDASH Page',
                'message' => 'This is a test MSG for USERDASH',
                'usertoken' => $userToken,
            );
            print_r($userToken);
            $this->load->view('frontend_view/test/test_dash', $data);
            
        } else {
            print_r('this is the else statement');
            $this->load->view('frontend_view/test/test_dash');
        }



//        
    }
    

    /*

      //    public function index() {
      //
      //        $this->load->view('home/include/header_view');
      //        $this->load->view('home/home_view');
      //        $this->load->view('home/include/footer_view');
      //    }
      public function index() {

      // $this->load->view('new_home/new_home_view');
      $this->testMe();
      }


      /*
      public function testMe(){

      $data = array(
      'title' => 'the title',
      'heading' => 'My Heading',
      'message' => 'My Message'
      );

      $this->load->view('test/test_view', $data);
      }

      public function test_logout(){
      $this->facebook->destroy_session();
      }

      public function toDash() {

      $this->load->view('user_dash/dash_view');
      }
      public function js_login() {
      // Load view
      $this->load->view('examples/js');
      }

      public function logout() {
      $this->facebook->destroy_session();
      redirect('/home/test', redirect);
      }
     */
}
