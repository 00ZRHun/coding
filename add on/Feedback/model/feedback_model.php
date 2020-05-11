<?php
class feedback_model extends CI_Model{
    // print $this->db->last_query();
	
    //admin section
    public function get_feedback()
    {
		// $this->db->select('*');
		$this->db->order_by('feedback.serial','desc');
        $this->db->select('feedback.serial, student.student_id, student.name, feedback.title, feedback.description');
		$this->db->from('feedback');
		$this->db->join('student', 'student.serial = feedback.student_id', 'right_outer');
        $this->db->where('feedback.delmode',1);
        $query = $this->db->get();
        return $query->result();
    }

	public function get_student_id()
    {
		// $this->db->select('*');
        $this->db->select('serial');
		$this->db->from('student');
		$this->db->order_by('serial', 'DESC');
		$this->db->where('delmode',1);
		
        $query = $this->db->get();
        return $query->result();
	}

	public function update_seen($id)
	{
		$this->db->set('read', '1', TRUE);
        $this->db->where('serial', $id);
        $this->db->update('feedback');
	}

	public function get_reply($id)
    {
        $this->db->select('*');
		$this->db->from('feedback_reply');
		$this->db->join('student', 'student.serial = feedback_reply.student_id', 'right_outer');
		$this->db->join('feedback', 'feedback.serial = feedback_reply.feedback_id', 'right_outer');
        $this->db->where('feedback_reply.delmode',1);
        $this->db->where('student.delmode',1);
		$this->db->where('feedback.delmode',1);
		$this->db->where('feedback.serial', $id);
		
        $query = $this->db->get();
        return $query->result();
	}
	
	public function delete_feedback($id)
	{
		$this->db->set('delmode', '0', FALSE);
		$this->db->where('serial', $id);
		$this->db->update('feedback');
	}
	
	////////////////////////////////////////////////////////////
	
	public function insert_feedback($data)
	{
		return $this->db->insert('feedback', $data);
	}
	
	public function insert_reply($data)
    {
        return $this->db->insert('feedback_reply', $data);
    }
	
	////////////////////////////// EXTRA //////////////////////////////

	

	public function get_feedback_detail($id)
	{
		$this->db->select('feedback_reply.serial, feedback.description, student.student_id, student.name, feedback_reply.answer');
		$this->db->from('feedback_reply');
		$this->db->join('student', 'student.serial = feedback_reply.student_id', 'right_outer');
		$this->db->join('feedback', 'feedback.serial = feedback_reply.feedback_id', 'right_outer');
		$this->db->where('feedback_reply.delmode',1);
		$this->db->where('feedback.serial', $id);
		
        $query = $this->db->get();
		return $query->result();
	}

	
	
	
}
?>
