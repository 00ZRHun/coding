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
		
        $this->load->model('Main_Model');
	}

	public function index()
	{
		$data = array();
		$data2 = array();
		$data['member_list'] = $this->Main_Model->get_member();
		$data2['annual_list'] = $this->Main_Model->get_annual();
		$this->load->view('main/index', $data);
		$this->load->view('main/index', $data2);
	}

	public function add(){
		$this->load->view('main/add');
	}

	public function add_member()
   	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);
		$this->Main_Model->add_member($data);
	}

	public function edit(){
		$data = array();
		$data['member_data'] = $this->Main_Model->get_where($this->uri->segment(3));
		$this->load->view('main/edit', $data);
	}

	public function edit_member()
   	{
		$id = $this->input->post('id');

		$data = array(
			'username' => $this->input->post('username')
		);
		$this->Main_Model->update_member($data, $id);
	}

	public function delete(){
		$data = array();
		$data['member_data'] = $this->Main_Model->get_where($this->uri->segment(3));
		$this->load->view('main/edit', $data);
	}

	public function delete_member()
   	{
		$id = $this->input->post('id');
		$this->Main_Model->delete_member($id);
	}
}
