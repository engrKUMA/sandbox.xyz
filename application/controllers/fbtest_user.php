<?php

class Fbtest_user extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function login() {

        $fbid = $this->input->post('fbid');
        $fname = $this->input->post('first_name');
        $lname = $this->input->post('last_name');
        $email = $this->input->post('email');


        $result = $this->user_model->get([
            'fbid' => $fbid,
            'first_name' => $fname,
            'last_name' => $lname,
            'email' => $email
        ]);

        $this->output->set_content_type('application_json');

        if ($result) {
            $this->session->set_userdata(['id' => $result[0]['id']]);
            $this->output->set_output(json_encode(['result' => 1]));

            $this->test_insert();

            return FALSE;
        }
        $this->output->set_output(json_encode(['result' => 0]));
    }

    public function test_get() {
        $data = $this->user_model->get();
        print_r($data);
    }

    public function test_insert() {

        $fbid = $this->input->post('fbid');
        $fname = $this->input->post('first_name');
        $lname = $this->input->post('last_name');
        $email = $this->input->post('email');


        $result = $this->user_model->insert([
            'fbid' => $fbid,
            'first_name' => $fname,
            'last_name' => $lname,
            'email' => $email
        ]);
    }

}
