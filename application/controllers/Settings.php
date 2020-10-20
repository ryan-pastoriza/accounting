<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('model');
		if (!$this->session->userdata('user'))
		{
			redirect("login");
		}
 	}

	public function index()
	{
		$data = array('title' => 'Settings');

		$this->load->model('account_type');

		$account_type = new Account_type();

		$data['account_types'] = $account_type->get_all();

		$this->load->view('_layouts/header', $data);
		$this->load->view('settings/settings', $data);
		$this->load->view('_layouts/footer');
	}


	public function create_account_type() {

		$data = $this->input->post();

		$this->load->model('account_type');

		$obj = new Account_type();

		echo $obj->insert($data);

	}

}
