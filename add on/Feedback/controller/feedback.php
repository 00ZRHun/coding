<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class feedback extends CI_Controller {

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
		
        $this->load->model('feedback_model');
	}
	
	////////////////////////////////////////////////////////////
	
	public function index()
	{	
		$this->page_data['feedback'] = $this->feedback_model->get_feedback();
		$this->load->view('include/header');
		$this->load->view('main/feedback/list', $this->page_data);
		$this->load->view('include/footer');
	}
	
	public function add(){
		$this->page_data['student_id'] = $this->feedback_model->get_student_id();
		$this->load->view('include/header');
		$this->load->view('main/feedback/add', $this->page_data);
		$this->load->view('include/footer');
	}
	
	public function list_reply(){
		/* $id = $this->uri->segment(3);
		$this->feedback_model->update_seen($id);
		$this->page_data['reply'] = $this->feedback_model->get_reply($id); */

		$this->feedback_model->update_seen($this->uri->segment(3));
		$this->page_data['reply'] = $this->feedback_model->get_reply($this->uri->segment(3));

		$this->load->view('include/header');
		$this->load->view('main/feedback/list_reply', $this->page_data);
		$this->load->view('include/footer');
	}

	public function reply(){
		$this->page_data['student_id'] = $this->feedback_model->get_student_id();
		$this->load->view('include/header');
		$this->load->view('main/feedback/reply', $this->page_data);
		$this->load->view('include/footer');
	}

	public function delete()
   	{
		$id = $this->uri->segment(3);
		$this->feedback_model->delete_feedback($id);
		redirect("feedback");
	} 

	/* public function edit(){
		$this->load->view('include/header');
		$this->load->view('main/admin/edit');
		$this->load->view('include/footer');
	} */

	////////////////////////////////////////////////////////////
	
	public function insert_feedback()
   	{
		if(isset($_REQUEST)){
			// $reference = isset($this->request_data['reference']) ? $this->request_data['reference'] : '';
			$reference = rand(10, 1000);
			$student_id = isset($this->request_data['student_id']) ? $this->request_data['student_id'] : '';
			$title = isset($this->request_data['title']) ? $this->request_data['title'] : '';
			$description = isset($this->request_data['description']) ? $this->request_data['description'] : '';
			echo 'yyy';
			$data = array(
				'reference' => $reference,
				'student_id' => $student_id,
				'title' => $title,
				'description' => $description,
			);

			$this->feedback_model->insert_feedback($data);
		}
	}

	public function insert_reply()
   	{
        if(isset($_REQUEST)){
			// $feedback_id =  $this->uri->segment(2);
			$feedback_id =  isset($this->request_data['feedback_id']) ? $this->request_data['feedback_id'] : '';
			// $student_id = $this->session->userdata('username');
            $student_id = isset($this->request_data['student_id']) ? $this->request_data['student_id'] : '';
			
            $answer = isset($this->request_data['answer']) ? $this->request_data['answer'] : '';

            $data = array(
				'feedback_id' => $feedback_id,
                'student_id' => $student_id,
				'answer' => $answer
			);

			$this->feedback_model->insert_reply($data);
			$json = 2;
			echo json_encode($json);
			redirect("feedback");
		}
	}

	////////////////////////////// EXTRA //////////////////////////////

	public function view()
	{
		$this->page_data['feedback'] = $this->feedback_model->get_feedback();
		$this->load->view('include/header');
		$this->load->view('main/feedback/view', $this->page_data);
		$this->load->view('include/footer');
	}

	public function view_feedback(){
		$this->page_data['feedback'] = $this->feedback_model->get_feedback_detail($this->uri->segment(3));
		$this->feedback_model->update_seen($this->uri->segment(3));
		
		$this->load->view('include/header');
		$this->load->view('main/feedback/view_feedback', $this->page_data);
		$this->load->view('include/footer');
	}


	

	


}
