<?php

class Agency_model extends CI_Model {

    /**
     * 
     * @param type $data
     * $this->fb_model->insert(
      ['fbid' => '123'], ['fname' => 'aaa'], ['lname' => 'sss'], ['email' => 'ddd']);
     */
    public function insertAgency($data) {
        $this->db->insert('agencyTable', $data);
    }

    public function getAllAgency() {
        $query = $this->db->get('agencyTable');
        return $query->result();
    }

}
