<?php

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('users_model');
    }

    public function login() {

        $fbid = $this->input->post('fbid');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $email = $this->input->post('email');

        //setting up session data
        $this->session->set_userdata(array(
            'usersFBID' => $fbid,
            'usersFIRST_NAME' => $first_name,
            'usersLAST_NAME' => $last_name,
            'usersEMAIL' => $email
        ));

        $result = $this->users_model->get([
            'usersFBID' => $fbid,
            'usersFIRST_NAME' => $first_name,
            'usersLAST_NAME' => $last_name,
            'usersEMAIL' => $email
        ]);

        $this->output->set_content_type('application_json');

        if ($result) {
            $this->session->set_userdata(['usersEMAIL' => $result[0]['usersEMAIL']]);
            $this->output->set_output(json_encode(['result' => 1]));

            return FALSE;
        }
        $this->output->set_output(json_encode(['result' => 0]));
        $this->test_insert();
    }

    public function test_insert() {

        $fbid = $this->input->post('fbid');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $email = $this->input->post('email');


        $result = $this->users_model->insert([
            'usersFBID' => $fbid,
            'usersFIRST_NAME' => $first_name,
            'usersLAST_NAME' => $last_name,
            'usersEMAIL' => $email,
            'usersUSERTYPE' => "private"
        ]);
    }

    public function update() {
        $mobileNumber = $this->input->post('mobilenumber');
        $telephoneNumber = $this->input->post('telephonenumber');
        
        print_r($mobileNumber);
        print_r($telephoneNumber);
        die('not yet ready');
    }

}
