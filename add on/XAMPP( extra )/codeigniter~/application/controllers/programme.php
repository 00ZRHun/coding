<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class programme extends CI_Controller {

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
		$this->page_data['programme'] = $this->admin_model->get_programme();
		$this->load->view('include/header');
		$this->load->view('main/programme/list', $this->page_data);
		$this->load->view('include/footer');
	}

	public function add(){
		$this->load->view('include/header');
		$this->load->view('main/programme/add');
		$this->load->view('include/footer');
	}

	public function edit(){
        $this->page_data['programme'] = $this->admin_model->get_programme_detail($this->uri->segment(3));
		$this->load->view('include/header');
		$this->load->view('main/programme/edit', $this->page_data);
		$this->load->view('include/footer');
	}

	public function delete()
   	{
		$id = $this->uri->segment(3);
		$this->admin_model->delete_programme($id);
		redirect("programme");
	}

	public function insert_programme()
   	{
        if(isset($_REQUEST)){
            $name = isset($this->request_data['name']) ? $this->request_data['name'] : '';

            $data = array(
                'name' => $name
            );

            $validate = $this->admin_model->get_programme_info($name);

            if(count($validate) > 0){
                $json = 1;
            }else{
                $json = 2;
                $this->admin_model->insert_programme($data);
            }

            echo json_encode($json);
        }
    }
    
    public function update_programme()
   	{
        if(isset($_REQUEST)){
            $id = isset($this->request_data['id']) ? $this->request_data['id'] : '';
            $name = isset($this->request_data['name']) ? $this->request_data['name'] : '';

            $data = array(
                'name' => $name
            );

            $validate = $this->admin_model->get_programme_info($name);

            if(count($validate) > 0){
                $json = 1;
            }else{
                $json = 2;
                $this->admin_model->update_programme($data, $id);
            }

            echo json_encode($json);
        }
	}
}
