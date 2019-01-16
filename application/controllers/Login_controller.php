<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('m_Login');
		$this->load->helper('url'); 
        $this->load->database(); 
	}

	public function index()
	{
		$this->load->helper('form');
		$this->load->view('v_Login');
	}

	

	public function login()
	{
	  $this->load->helper('form');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
	  if($this->m_Login->login($username, $password))
	  {
		$this->session->set_userdata('users', 'login');
		redirect(base_url("pegawai"));
	  }
	  else
	  {
        echo 'Username dan password salah!';
      }
  }

	public function logout()
	{
    	$this->session->sess_destroy();
    	redirect('');
  	}
}