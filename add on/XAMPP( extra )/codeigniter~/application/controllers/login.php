<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function __construct()
	{
		//load database in autoload libraries
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->database();
		
		$this->load->model('login_model');
     }
     
     public function index()
	{
		$this->load->view('main/index');
	}

	function login_validation()
    {
         $this->load->library('form_validation');
         $this->form_validation->set_rules('username', 'Username', 'required');
         $this->form_validation->set_rules('password', 'Password', 'required');
         if($this->form_validation->run())
         {
              //true
              $username = $this->input->post('username');
		    $password = md5($this->input->post('password'));
			  
              //check authentication
              $this->load->model('login_model');
              if($this->login_model->get_login_detail($username, $password))
              {
                   $session_data = array(
                        'username'     =>     $username
                   );
                   //set session = username
                   $this->session->set_userdata($session_data);
                   redirect(base_url() . 'student');
              }
              else
              {
                   $this->session->set_flashdata('error', 'Invalid Username and Password !');
                   redirect(base_url() . 'admin');
              }
         }
         else
         {
              //false
              $this->login();
         }
	}

	function logout()
	{
		$this->session->unset_userdata('username');
		redirect(base_url() . 'admin');
	}
}
