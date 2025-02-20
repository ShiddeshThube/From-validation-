<?php
class User_model extends CI_Model {

	public function __construct() {
        parent::__construct();
        $this->load->database();  
    }

    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }

    public function get_user_by_email($email) {
        return $this->db->where('email', $email)->get('users')->row_array();
    }

    public function get_user_by_id($id) {
        return $this->db->where('id', $id)->get('users')->row_array();
    }

    public function update_user($id, $data) {
        return $this->db->where('id', $id)->update('users', $data);
    }
}
