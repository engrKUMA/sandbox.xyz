<?php

class Fbtest_user_model extends CI_Model {

    public function get($fbid = null) {

        if ($fbid === null) {
            $query = $this->db->get('users');
        } elseif (is_array($fbid)) {
            $query = $this->db->get_where('users', $fbid);
        } else {
            $query = $this->db->get_where('users', ['fbid' => $fbid]);
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

}
