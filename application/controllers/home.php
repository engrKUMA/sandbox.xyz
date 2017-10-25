<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');

        $this->load->model('admin_model');
        $this->load->library('table');


//used for new property form test
        $this->load->model('property_model');
        $this->load->model('agency_model');
        $this->load->helper('date');
    }

    public function index() {

        $this->load->view('frontend_view/includes/header');
        $this->load->view('frontend_view/index');
        $this->load->view('frontend_view/includes/footer');
    }

    public function test() {
        //$this->load->view('bsModalTest');
        // $this->load->view('JQDialogTest');
        // $data['h'] = $this->admin_model->getUserWihRequest();
        // //return the data in view
        // $this->load->view('frontend_view/admin_view/form/userRequestTable', $data);
        
        $data['agencyData'] = $this->agency_model->getAllAgency();
        
        $this->load->library('form_validation');
        if ($this->form_validation->run() === false) {
            $this->load->view('frontend_view/admin_view/form/newPropertyForm', $data);
        } else {
            $this->load->view('formSuccess');
        }
    }

    public function insertNewProperty() {

        $agentID             = $this->input->post('agentID');
        $propertyTitle       = $this->input->post('propertyTitle');
        $propertyAmount      = $this->input->post('propertyAmount');
        $propertyLotArea     = $this->input->post('propertyLotArea');
        $propertyType        = $this->input->post('propertyType');
        $propertyLocation    = $this->input->post('propertyLocation');
//        $propertyListDate    = mdate("%Y-%m-%d %H:%i:%s");
        $propertyListDate    = mdate("%Y-%m-%d");
        $propertyCoordinates = $this->input->post('propertyCoordinates');
        $propertyDetails     = $this->input->post('propertyDetails');
/*
        print_r("agentID: " . $agentID);
        print_r("<br />");
        print_r("propertyTitle: " . $propertyTitle);
        print_r("<br />");
        print_r("propertyAmount: " . $propertyAmount);
        print_r("<br />");
        print_r("propertyLotArea: " . $propertyLotArea);
        print_r("<br />");
        print_r("propertyType: " . $propertyType);
        print_r("<br />");
        print_r("propertyLocation: " . $propertyLocation);
        print_r("<br />");
        print_r("propertyListDate: " . $propertyListDate);
        print_r("<br />");
        print_r("propertyCoordinates: " . $propertyCoordinates);
        print_r("<br />");
        print_r(" propertyDetails: " . $propertyDetails);
        print_r("<br />");
        print_r("<br />");
        die("end test");
*/
        $result = $this->property_model->insertProperty([
            'agentID' => $agentID,
            'propertyTitle' => $propertyTitle,
            'propertyAmount' => $propertyAmount,
            'propertyLotArea' => $propertyLotArea,
            'propertyType' => $propertyType,
            'propertyLocation' => $propertyLocation,
            'propertyListDate' => $propertyListDate,
            'propertyCoordinates' => $propertyCoordinates,
            'propertyDetails' => $propertyDetails
        ]);
    }

}
