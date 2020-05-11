<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student extends CI_Controller {

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
		$this->page_data['student'] = $this->admin_model->get_student();
		$this->load->view('include/header');
		$this->load->view('main/student/list', $this->page_data);
		$this->load->view('include/footer');
	}

	public function add(){
		$this->load->view('include/header');
		$this->load->view('main/student/add');
		$this->load->view('include/footer');
	}

	public function edit(){
		$this->load->view('include/header');
		$this->load->view('main/student/edit');
		$this->load->view('include/footer');
    }
}
