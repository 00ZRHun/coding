<?php
class Main_Model extends CI_Model{
    public function add_year($data)
    {
        return $this->db->insert('society_year', $data);
    }

    public function get_year()
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

    public function update_year($data, $id)
    {
        return $this->db
            ->where('id', $id)
            ->update('society_year', $data);
    }

	// can accept both version of delete
    public function delete_year($id)
    {
			// not real delete from db( set delmode to 0 )
        return $this->db
            ->set('delmode', '0', FALSE)
            ->where('id', $id)
			->update('society_year', $data);
			// real delete from db
		// $this -> db -> where('id', $id);
		// $this -> db -> delete('society_year');
	}
}
?>
