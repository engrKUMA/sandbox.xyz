<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of adminController
 *
 * @author alfred
 */
class adminController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model, library and helper
        $this->load->model('user_model');
        $this->load->model('agency_model');
        $this->load->model('admin_model');

        $this->load->library('session');
        $this->load->library('table');

        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function getAllUsers() {
        $data['h'] = $this->admin_model->getAllUser();
        //return the data in view
        $this->load->view('frontend_view/admin_view/adminShowUsers', $data);
    }

    public function showUserRequest() {
        $data['h'] = $this->admin_model->getUserWihRequest();
        //return the data in view
        $this->load->view('frontend_view/admin_view/adminShowUsers', $data);
    }

    public function changeType() {

        $userFBID = $this->input->post('userFBID');
        $userType = $this->input->post('userType');
        $userChangeTypeRequest = $this->input->post('userChangeTypeRequest');

        $result = $this->admin_model->changeType([
            'userFBID' => $userFBID,
            'userType' => $userType,
            'userChangeTypeRequest' => $userChangeTypeRequest
        ]);

        return $this->output->set_output("change saved");
    }

    public function newAgencyForm() {
        $this->load->view('frontend_view/admin_view/form/newAgencyEntryForm');
    }
    
    public function newAgencySubmit(){
        $agencyName = $this->input->post('agencyName');
        $agencyWebsite = $this->input->post('agencyWebsite');
        $agencyAddress = $this->input->post('agencyAddress');
        $agencyNumber = $this->input->post('agencyNumber');
        
        $result = $this->admin_model->insertAgency([
           'agencyName' => $agencyName, 
           'agencyWebsite' => $agencyWebsite, 
           'agencyAddress' => $agencyAddress, 
           'agencyNumber' => $agencyNumber 
        ]);
        
        return $this->output->set_output("Agency Saved" . $result);
    }

}
