<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('model');
    if ($this->session->userdata('user'))
    {
        redirect("dashboard");
    }
  }

  function index()
  {
    $this->load->view('login/login');
  }
  public function verify()
	{
		$this->form_validation->set_rules('username','username','required|trim');
		$this->form_validation->set_rules('password','password','required');
		if($this->form_validation->run())
		{
      $check = $this->model->validate();
			if ($check)
			{
				$this->session->set_userdata('user', $check);
				$this->model->updatestatus($check->user_id,"Online");
				redirect('dashboard');
			}
			else
			{
				$this->session->set_flashdata('error','Invalid Username or Password');
				redirect('login');
			}
		}
		else
		{
			redirect('login');
		}

	}
}
