<?php
class Main_Model extends CI_Model{
    public function add_member($data)
    {
        return $this->db->insert('society_year', $data);
    }

    public function get_member()
    {
        $this->db
            ->select()
            ->from('society_year')
            ->where('delmode',1);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_where($id)
    {
        $this->db
            ->select()
            ->from('society_year')
            ->where('id',$id)
            ->where('delmode',1);
        $query = $this->db->get();
        return $query->result();
    }

    public function update_member($data, $id)
    {
        return $this->db
            ->where('id', $id)
            ->update('society_year', $data);
    }

    public function delete_member($id)
    {
        return $this->db
            ->set('delmode', '0', FALSE)
            ->where('id', $id)
            ->update('society_year', $data);
    }
}
?>
