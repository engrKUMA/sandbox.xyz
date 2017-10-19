<?php

class User_model extends CI_Model {
    /*
      public function get($userFBID = null) {

      if ($userFBID === null) {
      $query = $this->db->get('userTable');
      } elseif (is_array($userFBID)) {
      $query = $this->db->get_where('userTable', $userFBID);
      } else {
      $query = $this->db->get_where('userTable', ['userFBID' => $userFBID]);
      }

      return $query->result_array();
      }
     */

    public function get($userFBID) {

        $query = $this->db->get_where('userTable', $userFBID);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            print_r('false');
            return false;
        }
    }

    /**
     * 
     * @param type $data
     * $this->fb_model->insert(
      ['fbid' => '123'], ['fname' => 'aaa'], ['lname' => 'sss'], ['email' => 'ddd']);
     */
    public function insert($data) {
        $this->db->insert('userTable', $data);
        return $this->db->insert_id();
    }

    public function updateUserData($data) {
        $userFBID = $this->session->userdata('userFBID');

        $this->db->set($data);
        $this->db->where("userFBID", $userFBID);
        $this->db->update("userTable", $data);
    }

    public function checkUserType() {

        $userFBID = $this->session->userdata('userFBID');

//        $userType = $this->db->get_where('userTable', ['fbid' => $FBID])->row()->type;
//        $data = $rs->result_array();
//        $userType = ($data[0]['type']);

        return $this->db->get_where('userTable', ['userFBID' => $userFBID])->row()->userType;
    }

    public function buildUserInfo() {

        $userFBID = $this->session->userdata('userFBID');

//        $userType = $this->db->get_where('userTable', ['fbid' => $FBID])->row()->type;
//        $data = $rs->result_array();
//        $userType = ($data[0]['type']);

        return $this->db->get_where('userTable', ['userFBID' => $userFBID])->row();
    }

    public function update($data) {
        $userFBID = $this->session->userdata('userFBID');

        $this->db->set($data);
        $this->db->where("userFBID", $userFBID);
        $this->db->update("userTable", $data);
    }

}
