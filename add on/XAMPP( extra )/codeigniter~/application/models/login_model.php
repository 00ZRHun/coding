<?php
class login_model extends CI_Model{
    public function get_admin()
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('delmode',1);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_login_detail($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('delmode', 1);
        $query = $this->db->get('admin');

        if($query->num_rows() > 0)
        {
           return true;
        }
        else
        {
           return false;
        }
    }

    public function get_where($username) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('delmode',1);
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->result();
    }
}
?>