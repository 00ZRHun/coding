<?php
class admin_model extends CI_Model{
    // print $this->db->last_query();

    //admin section
    public function get_admin()
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('delmode',1);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_admin_info($username)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username',$username);
        $this->db->where('delmode',1);
        $query = $this->db->get();
        return $query->result();
    }

    public function insert_admin($data)
    {
        return $this->db->insert('admin', $data);
    }

    public function delete_admin($id)
    {
        $this->db->set('delmode', '0', FALSE);
        $this->db->where('serial', $id);
        $this->db->update('admin');
    }

    //notice section
    public function get_notice()
    {
        $this->db->select('*');
        $this->db->from('notice');
        $this->db->where('delmode',1);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_notice_info($title)
    {
        $this->db->select('*');
        $this->db->from('notice');
        $this->db->where('title',$title);
        $this->db->where('delmode',1);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_notice_detail($id)
    {
        $this->db->select('*');
        $this->db->from('notice');
        $this->db->where('serial',$id);
        $query = $this->db->get();
        return $query->result();
    }

    public function insert_notice($data)
    {
        return $this->db->insert('notice', $data);
    }

    public function update_notice($data, $id)
    {
        $this->db->where('serial', $id);
        $this->db->update('notice', $data);
    }

    public function delete_notice($id)
    {
        $this->db->set('delmode', '0', FALSE);
        $this->db->where('serial', $id);
        $this->db->update('notice');
    }

    //programme section
    public function get_programme()
    {
        $this->db->select('*');
        $this->db->from('programme');
        $this->db->where('delmode',1);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_programme_info($name)
    {
        $this->db->select('*');
        $this->db->from('programme');
        $this->db->where('name',$name);
        $this->db->where('delmode',1);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_programme_detail($id)
    {
        $this->db->select('*');
        $this->db->from('programme');
        $this->db->where('serial',$id);
        $query = $this->db->get();
        return $query->result();
    }

    public function insert_programme($data)
    {
        return $this->db->insert('programme', $data);
    }

    public function update_programme($data, $id)
    {
        $this->db->where('serial', $id);
        $this->db->update('programme', $data);
    }

    public function delete_programme($id)
    {
        $this->db->set('delmode', '0', FALSE);
        $this->db->where('serial', $id);
        $this->db->update('programme');
    }

    //seminar section
    public function get_seminar()
    {
        $this->db->select('*');
        $this->db->from('seminar');
        $this->db->where('delmode',1);
        $query = $this->db->get();
        return $query->result();
    }

    public function insert_seminar($data)
    {
        return $this->db->insert('seminar', $data);
    }

    public function update_seminar($data, $id)
    {
        $this->db->where('serial', $id);
        $this->db->update('seminar', $data);
    }

    public function delete_seminar($id)
    {
        $this->db->set('delmode', '0', FALSE);
        $this->db->where('serial', $id);
        $this->db->update('seminar');
    }

    //volunteer section
    public function get_volunteer()
    {
        $this->db->select('*');
        $this->db->from('volunteer');
        $this->db->where('delmode',1);
        $query = $this->db->get();
        return $query->result();
    }

    public function insert_volunteer($data)
    {
        return $this->db->insert('volunteer', $data);
    }

    public function update_volunteer($data, $id)
    {
        $this->db->where('serial', $id);
        $this->db->update('volunteer', $data);
    }

    public function delete_volunteer($id)
    {
        $this->db->set('delmode', '0', FALSE);
        $this->db->where('serial', $id);
        $this->db->update('volunteer');
    }

    //slider section
    public function get_slider()
    {
        $this->db->select('*');
        $this->db->from('slider');
        $this->db->where('delmode',1);
        $query = $this->db->get();
        return $query->result();
    }

    public function insert_slider($data)
    {
        return $this->db->insert('slider', $data);
    }

    public function update_slider($data, $id)
    {
        $this->db->where('serial', $id);
        $this->db->update('slider', $data);
    }

    public function delete_slider($id)
    {
        $this->db->set('delmode', '0', FALSE);
        $this->db->where('serial', $id);
        $this->db->update('slider');
    }

    //student section
    public function get_student()
    {
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where('delmode',1);
        $query = $this->db->get();
        return $query->result();
    }

    public function insert_student($data)
    {
        return $this->db->insert('student', $data);
    }

    public function update_student($data, $id)
    {
        $this->db->where('serial', $id);
        $this->db->update('student', $data);
    }

    public function delete_student($id)
    {
        $this->db->set('delmode', '0', FALSE);
        $this->db->where('serial', $id);
        $this->db->update('student');
    }
}
?>