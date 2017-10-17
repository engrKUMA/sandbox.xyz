<?php

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->model('agency_model');
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
        $userType = $this->input->post('userType');
        $mobileNumber = $this->input->post('mobileNumber');
        $telephoneNumber = $this->input->post('telephoneNumber');
        $agencyName = $this->input->post('agencyName');
        $agencyWebsite = $this->input->post('agencyWebsite');
        $agencyCity = $this->input->post('agencyCity');
        $agencyAddress = $this->input->post('agencyAddress');


        if ($userType === "agent") {
            print_r($userType);

            $resultAgency = $this->agency_model->insertAgency([
                'agencyName' => $agencyName,
                'agencyWebsite' => $agencyWebsite,
                'agencyCity' => $agencyCity,
                'agencyAddress' => $agencyAddress
            ]);
            $resultUser = $this->users_model->update([
                'usersUSERTYPE' => $userType,
                'usersMOBILENUMBER' => $mobileNumber,
                'usersTELEPHONENUMBER' => $telephoneNumber
            ]);

            print_r($resultAgency);
            print_r($resultUser);
        } else {

            $resultUser = $this->users_model->update([
                'usersUSERTYPE' => "private",
                'usersMOBILENUMBER' => $mobileNumber,
                'usersTELEPHONENUMBER' => $telephoneNumber
            ]);
            print_r($resultUser);
        }

        die('==not yet ready');
    }

}
