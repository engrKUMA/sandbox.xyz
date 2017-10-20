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
            'userFBID' => $userFBID]);

        $this->output->set_content_type('application_json');

        if ($result) {
            $this->session->set_userdata(['userFBID' => $result[0]['userFBID']]);
//            $this->output->set_output(json_encode(['result' => 1]));
            $this->output->set_output("previous user");

            $this->updateUserData();

            return FALSE;
        }

//        $this->output->set_output(json_encode(['result' => 0]));
        $this->output->set_output("new user");

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

    public function updateUserData() {

        $userFBID = $this->input->post('userFBID');
        $userFirstName = $this->input->post('userFirstName');
        $userLastName = $this->input->post('userLastName');
        $userEmail = $this->input->post('userEmail');
        $userPicture = $this->input->post('userPicture');

        $result = $this->user_model->updateUserData([
            'userFBID' => $userFBID,
            'userFirstName' => $userFirstName,
            'userLastName' => $userLastName,
            'userEmail' => $userEmail,
            'userPicture' => $userPicture
        ]);
    }
    
    public function updateContactInfo(){
        $mobileNumber = $this->input->post('mobileNumber');
        $telephoneNumber = $this->input->post('telephoneNumber');
        
        $result = $this->user_model->updateContactInfo([
            'userTelephoneNumber' => $telephoneNumber,
            'userMobileNumber' => $mobileNumber
        ]);
    }
    
    public function sendChangeUserType(){
        
        $userFBID = $this->session->userdata('userFBID');
        $request = $this->input->post('userChangeTypeRequest');
        
        $result = $this->user_model->sendChangeUserType([
            'userFBID' => $userFBID,
            'userChangeTypeRequest' => $request
        ]);
        
        return $this->output->set_output('request sent');
    }

}
