<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart_of_Accounts extends CI_Controller {

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
		$data = array('title' => 'Chart of Accounts');

		$this->load->model('chart_accounts');

		$chart_of_accounts = new Chart_accounts();

		$data['chart_of_accounts'] = $chart_of_accounts->accounts();

		$this->load->view('_layouts/header', $data);
		$this->load->view('chart_of_accounts/chart_of_accounts', $data['chart_of_accounts']);
		$this->load->view('_layouts/footer');

	}
}
