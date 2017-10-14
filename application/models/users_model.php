<?php

class Users_model extends CI_Model {

    public function get($usersemail = null) {

        if ($usersemail === null) {
            $query = $this->db->get('users');
        } elseif (is_array($usersemail)) {
            $query = $this->db->get_where('users', $usersemail);
        } else {
            $query = $this->db->get_where('users', ['fbuserEMAIL' => $usersemail]);
        }

        return $query->result_array();
    }

    /**
     * 
     * @param type $data
     * $this->fb_model->insert(
      ['fbid' => '123'], ['fname' => 'aaa'], ['lname' => 'sss'], ['email' => 'ddd']);
     */
    public function insert($data) {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }

    public function checkUserType() {

        $usersEMAIL = $this->session->userdata('usersEMAIL');

//        $userType = $this->db->get_where('users', ['fbid' => $FBID])->row()->type;
//        $data = $rs->result_array();
//        $userType = ($data[0]['type']);
        
        return $this->db->get_where('users', ['usersEMAIL' => $usersEMAIL])->row()->usersUSERTYPE;
    }

    public function buildUserInfo() {

        $usersEMAIL = $this->session->userdata('usersEMAIL');

//        $userType = $this->db->get_where('users', ['fbid' => $FBID])->row()->type;
//        $data = $rs->result_array();
//        $userType = ($data[0]['type']);

        return $this->db->get_where('users', ['usersEMAIL' => $usersEMAIL])->row();
    }

}
