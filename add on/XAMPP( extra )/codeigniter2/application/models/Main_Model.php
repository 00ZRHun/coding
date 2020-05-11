<?php
class Main_Model extends CI_Model{
	// User
    public function add_member($data)
    {
        return $this->db->insert('member', $data);
    }

    public function get_member()
    {
        $this->db
            ->select()
            ->from('member')
            ->where('delmode',1);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_where($id)
    {
        $this->db
            ->select()
            ->from('member')
            ->where('id',$id)
            ->where('delmode',1);
        $query = $this->db->get();
        return $query->result();
    }

    public function update_member($data, $id)
    {
        return $this->db
            ->where('id', $id)
            ->update('member', $data);
    }

    public function delete_member($id)
    {
        return $this->db
            ->set('delmode', '0', FALSE)
            ->where('id', $id)
            ->update('member', $data);
	}
	
	// List
	public function get_annual()
	{
		$this->db
			->select()
			->from('annual_year_list')
			->where('delmode', 1);
		$query = $this->db->get();
		return $query->result();
	}

	
}
?>
