<?php

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

//    public function login(){
//       
//        print_r($_POST);
//        
//        die;
//        $this->session->set_userdata([
//            'id' => 1
//        ]);
//        
//        $session = $this->sesion->userdata('id');
//        print_r($session);
//       
//   }

    public function login() {

        $fbid = $this->input->post('fbid');
        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');

        $result = $this->user_model->get([
            'fbid' => $fbid,
            'fname' => $fname,
            'lname' => $lname
        ]);

        $this->output->set_content_type('application_json');

        if ($result) {
            $this->session->set_userdata(['id' => $result[0]['id']]);
            $this->output->set_output(json_encode(['result' => 1]));
            return FALSE;
        }
        $this->output->set_output(json_encode(['result' => 0]));
    }

    public function test_get() {
        $data = $this->user_model->get();
        print_r($data);
    }

    public function test_insert() {
        // $result = $this->user_model->insert([
        //     'fbid' => "120398", 'fName' => "1stname", 'lName' => "lastname"
        // ]);

        $fbid = $this->input->post('fbid');
        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');

        $result = $this->user_model->insert([
            'fbid' => $fbid,
            'fname' => $fname,
            'lname' => $lname
        ]);

        print_r($result);

    }

}
