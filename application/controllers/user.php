<?php

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('agency_model');
    }

    public function login() {

        $userFBID = $this->input->post('userFBID');
        $userFirstName = $this->input->post('userFirstName');
        $userLastName = $this->input->post('userLastName');
        $userEmail = $this->input->post('userEmail');
        $userPicture = $this->input->post('userPicture');


        //setting up session data
        $this->session->set_userdata(array(
            'userFBID' => $userFBID,
            'userFirstName' => $userFirstName,
            'userLastName' => $userLastName,
            'userEmail' => $userEmail,
            'userPicture' => $userPicture
        ));

        $result = $this->user_model->get([
            'userFBID' => $userFBID,
            'userFirstName' => $userFirstName,
            'userLastName' => $userLastName,
            'userEmail' => $userEmail,
            'userPicture' => $userPicture
        ]);

        $this->output->set_content_type('application_json');

        if ($result) {
            $this->session->set_userdata(['userEmail' => $result[0]['userEmail']]);
            $this->output->set_output(json_encode(['result' => 1]));

            return FALSE;
        }
        $this->output->set_output(json_encode(['result' => 0]));
        $this->insert();
    }

    public function insert() {

        $userFBID = $this->input->post('userFBID');
        $userFirstName = $this->input->post('userFirstName');
        $userLastName = $this->input->post('userLastName');
        $userEmail = $this->input->post('userEmail');
        $userPicture = $this->input->post('userPicture');



        $result = $this->user_model->insert([
            'userFBID' => $userFBID,
            'userFirstName' => $userFirstName,
            'userLastName' => $userLastName,
            'userEmail' => $userEmail,
            'userPicture' => $userPicture,
            'userType' => "private"
        ]);
    }

    public function update() {
        $userType = $this->input->post('userType');
        $mobileNumber = $this->input->post('mobileNumber');
        $telephoneNumber = $this->input->post('telephoneNumber');
        $agencyName = $this->input->post('agencyName');
        $agencyWebsite = $this->input->post('agencyWebsite');
        $agencyNumber = $this->input->post('agencyNumber');
        $agencyAddress = $this->input->post('agencyAddress');


        if ($userType === "agent") {
            print_r($userType);

            $resultAgency = $this->agency_model->insertAgency([
                'agencyName' => $agencyName,
                'agencyWebsite' => $agencyWebsite,
                'agencyNumber' => $agencyNumber,
                'agencyAddress' => $agencyAddress
            ]);
            $resultUser = $this->user_model->update([
                'userType' => $userType,
                'userMobileNumber' => $mobileNumber,
                'userTelephoneNumber' => $telephoneNumber
            ]);

            print_r($resultAgency);
            print_r($resultUser);
        } else {

            $resultUser = $this->user_model->update([
                'userType' => "private",
                'userMobileNumber' => $mobileNumber,
                'userTelephoneNumber' => $telephoneNumber
            ]);
            print_r($resultUser);
        }

        die('==not yet ready');
    }

}
