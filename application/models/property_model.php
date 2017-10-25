<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin_model
 *
 * @author alfred
 */
class Property_model extends CI_Model {

    public function getAllProperty() {
        return $this->db->get('propertyTable');
    }

    public function insertProperty($data) {
        $this->db->insert('propertyTable', $data);
    }

    //put your code here
}
