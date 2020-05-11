<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->request_data = $_REQUEST;
		$this->page_data = array();

		if (!$this->session->userdata('username')) {
            redirect("login", "refresh");
        }
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->database();
		
        $this->load->model('admin_model');
	}

	public function index()
	{
		$this->page_data['admin'] = $this->admin_model->get_admin();
		$this->load->view('include/header');
		$this->load->view('main/admin/list', $this->page_data);
		$this->load->view('include/footer');
	}

	public function add(){
		$this->load->view('include/header');
		$this->load->view('main/admin/add');
		$this->load->view('include/footer');
	}

	public function edit(){
		$this->load->view('include/header');
		$this->load->view('main/admin/edit');
		$this->load->view('include/footer');
	}

	public function delete()
   	{
		$id = $this->uri->segment(3);
		$this->admin_model->delete_admin($id);
		redirect("admin");
	}

	public function insert_admin()
   	{
		if(isset($_REQUEST)){
			$username = isset($this->request_data['username']) ? $this->request_data['username'] : '';
			$password = isset($this->request_data['password']) ? $this->request_data['password'] : '';
			
			$data = array(
				'username' => $username,
				'password' => md5($password)
			);

			$validate = $this->admin_model->get_admin_info($username);

			if(count($validate) > 0){
				$json = 1;
			}else{
				$json = 2;
				$this->admin_model->insert_admin($data);
			}

			echo json_encode($json);
		}
	}
}
