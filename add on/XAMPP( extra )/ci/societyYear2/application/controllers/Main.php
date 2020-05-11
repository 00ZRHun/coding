<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->database();
		
		$this->load->model("Main_Model");
	}

	public function index()
	{
		$data = array();
		$data['year_list'] = $this->Main_Model->get_year();
		$this->load->view('main/index', $data);
	}

	public function add(){
		$this->load->view('main/add');
	}

	public function add_year()
   	{
		$data = array(
			'name' => $this->input->post('name'),
		);
		$this->Main_Model->add_year($data);
	}

	public function edit(){
		$data = array();
		$data['year_data'] = $this->Main_Model->get_where($this->uri->segment(3));
		$this->load->view('main/edit', $data);
	}

	public function edit_year()
   	{
		$id = $this->input->post('id');

		$data = array(
			'name' => $this->input->post('name')
		);
		$this->Main_Model->update_year($data, $id);
	}

// delete	
	// v1
	// public function delete(){
	public function delete123(){
		$data = array();
		$data['year_data'] = $this->Main_Model->get_where($this->uri->segment(3));
		// $this->load->view('main/edit', $data);
		$this->load->view('main', $data);
	}

	public function delete_year()
   	{
		$id = $this->input->post('id');
		$this->Main_Model->delete_year($id);
	}
	// v2
	public function delete_row($user_id) {   
		$data = array();
		$data['year_data'] = $this->Main_Model->get_where($user_id);
		$this->Main_Model->delete_year($user_id);
		// redirect(base_url('main'));
	}
	public function did_delete_row($id){
		$this -> db -> where('user_id', $id);
		$this -> db -> delete('users');
	}
	// v3
/* 	public function delete($id)
	{
		$data = array();
		$data['year_data'] = $this->Main_Model->get_where($id);
		$this->Main_Model->delete_year($id);
		// redirect(base_url('main'));
		// $this->db->delete('society_year', array('id' => $id));
		// echo ($data['year_data'] + "") ;
		echo 'Deleted successfully.';
	} */
}
