<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class notice extends CI_Controller {

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
		$this->page_data['notice'] = $this->admin_model->get_notice();
		$this->load->view('include/header');
		$this->load->view('main/notice/list', $this->page_data);
		$this->load->view('include/footer');
	}

	public function add(){
		$this->load->view('include/header');
		$this->load->view('main/notice/add');
		$this->load->view('include/footer');
	}

	public function edit(){
        $this->page_data['notice'] = $this->admin_model->get_notice_detail($this->uri->segment(3));
		$this->load->view('include/header');
		$this->load->view('main/notice/edit', $this->page_data);
		$this->load->view('include/footer');
	}

	public function delete()
   	{
		$id = $this->uri->segment(3);
		$this->admin_model->delete_notice($id);
		redirect("notice");
	}

	public function insert_notice()
   	{
        if(isset($_REQUEST)){
            $title = isset($this->request_data['title']) ? $this->request_data['title'] : '';
            $content = isset($this->request_data['content']) ? $this->request_data['content'] : '';
            $post_by = $this->session->userdata('username');

            $data = array(
                'title' => $title,
                'content' => $content,
                'post_by' => $post_by
			);

			$validate = $this->admin_model->get_notice_info($title);

            if(count($validate) > 0){
				$json = 1;
            }else{
				$this->admin_model->insert_notice($data);
				$json = 2;
			}

			echo json_encode($json);
		}
    }
    
    public function update_notice()
   	{
        if(isset($_REQUEST)){
            $id = isset($this->request_data['id']) ? $this->request_data['id'] : '';
            $title = isset($this->request_data['title']) ? $this->request_data['title'] : '';
            $content = isset($this->request_data['content']) ? $this->request_data['content'] : '';
            $post_by = $this->session->userdata('username');

            $data = array(
                'title' => $title,
                'content' => $content,
                'post_by' => $post_by
            );

            $this->admin_model->update_notice($data, $id);
        }
	}
}
