<?php

class User_model extends CI_Model {

//    public function get($id = null){
//        if ($id === null){
//            $q = $this->db->get('users');
//        } else {
//            $q = $this->db->get_where('users', ['id' => $id]);
//        }
//        
//        return $q->result_array();
//    }
//
//    /**
//     * 
//     * @param type $data
//     * $this->fb_model->insert(
//      ['fbid' => '123'], ['fname' => 'aaa'], ['lname' => 'sss'], ['email' => 'ddd']);
//     */
//    public function insert($data) {
//        
//        $this->db->insert('users', $data);
//        return $this->db->insert_id();
//    }



    public function get($fbid = null) {

        if ($fbid === null) {

            $query = $this->db->get('users');
        } else {
            $query = $this->db->get_where('users', ['fbid' => $fbid]);
        }
        
        return $query->result_array();
    }

}
