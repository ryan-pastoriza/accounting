<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller{

  function __construct()
 	{
 		parent::__construct();
 		$this->load->model('model');
		if (!$this->session->userdata('user'))
		{
			redirect("login");
		}
 	}

  function index()
  {
    $data = array('title' => 'Profile');
    $id=$this->session->userdata('user');
    $profile=$this->model->getProfile($id->user_id);
		$this->load->view('_layouts/header', $data);
		$this->load->view('profile/profile',$profile);
		$this->load->view('_layouts/footer');
  }
  function update()
  {
    $this->model->updateProfile();
    redirect("profile");
  }
}
