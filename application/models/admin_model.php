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
class admin_model extends CI_Model {
    
    public function getAllUser() {
        
        //data is retrive from this query  
         $query = $this->db->get('usertable');  
         return $query;
    }
    public function getUserWihRequest() {
        //data is retrive from this query
         $query = $this->db->get_where('usertable', array("userChangeTypeRequest"=>"true"));  
         return $query;
    }
    
    public function changeType($data){
        //get property of an array
        $userFBID = $data['userFBID'];
        
        $this->db->set($data);
        $this->db->where("userFBID", $userFBID);
        $this->db->update("userTable", $data);
    }
    //put your code here
}
