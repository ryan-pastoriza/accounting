<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Journal_Entry extends CI_Controller {

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
		$data = array('title' => 'Journal Entry');

		$this->load->view('_layouts/header', $data);
		$this->load->view('journal_entry/journal_entry');
		$this->load->view('_layouts/footer');
	}
}
