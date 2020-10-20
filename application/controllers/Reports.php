<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {
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
		$data = array('title' => 'Journal Entry',
			'sub_links' => array('Journal Entry List' => array('href' => base_url('reports')),
								'Account Balances' => array('href' => base_url('reports/account_balances')),
								'Balance Sheet' => array('href' => base_url('reports/balance_sheet')),
								'General Ledger' => array('href' => base_url('reports/general_ledger')),
								'Income Statement' => array('href' => base_url('reports/income_statement')),
								'Trial Balance' => array('href' => base_url('reports/trial_balance'))
							)
		);

		$this->load->view('_layouts/header', $data);
		$this->load->view('reports/reports');
		$this->load->view('_layouts/footer');
	}


	public function general_ledger() {

		$data = array('title' => 'General Ledger',
			'sub_links' => array('Journal Entry List' => array('href' => base_url('reports')),
								'Account Balances' => array('href' => base_url('reports/account_balances')),
								'Balance Sheet' => array('href' => base_url('reports/balance_sheet')),
								'General Ledger' => array('href' => base_url('reports/general_ledger')),
								'Income Statement' => array('href' => base_url('reports/income_statement')),
								'Trial Balance' => array('href' => base_url('reports/trial_balance'))
							)
		);

		$this->load->view('_layouts/header', $data);
		$this->load->view('reports/general_ledger/general_ledger');
		$this->load->view('_layouts/footer');

	}

	public function account_balances() {

		$data = array('title' => 'Account Balances',
			'sub_links' => array('Journal Entry List' => array('href' => base_url('reports')),
								'Account Balances' => array('href' => base_url('reports/account_balances')),
								'Balance Sheet' => array('href' => base_url('reports/balance_sheet')),
								'General Ledger' => array('href' => base_url('reports/general_ledger')),
								'Income Statement' => array('href' => base_url('reports/income_statement')),
								'Trial Balance' => array('href' => base_url('reports/trial_balance'))
							)
		);

		$this->load->view('_layouts/header', $data);
		$this->load->view('reports/account_balances');
		$this->load->view('_layouts/footer');

	}

	public function balance_sheet() {

		$data = array('title' => 'Balance Sheet',
			'sub_links' => array('Journal Entry List' => array('href' => base_url('reports')),
								'Account Balances' => array('href' => base_url('reports/account_balances')),
								'Balance Sheet' => array('href' => base_url('reports/balance_sheet')),
								'General Ledger' => array('href' => base_url('reports/general_ledger')),
								'Income Statement' => array('href' => base_url('reports/income_statement')),
								'Trial Balance' => array('href' => base_url('reports/trial_balance'))
							)
		);

		$this->load->view('_layouts/header', $data);
		$this->load->view('reports/balance_sheet');
		$this->load->view('_layouts/footer');

	}

	public function income_statement() {

		$data = array('title' => 'Income Statement',
			'sub_links' => array('Journal Entry List' => array('href' => base_url('reports')),
								'Account Balances' => array('href' => base_url('reports/account_balances')),
								'Balance Sheet' => array('href' => base_url('reports/balance_sheet')),
								'General Ledger' => array('href' => base_url('reports/general_ledger')),
								'Income Statement' => array('href' => base_url('reports/income_statement')),
								'Trial Balance' => array('href' => base_url('reports/trial_balance'))
							)
		);

		$this->load->view('_layouts/header', $data);
		$this->load->view('reports/income_statement');
		$this->load->view('_layouts/footer');

	}

	public function trial_balance() {

		$data = array('title' => 'Trial Balance',
			'sub_links' => array('Journal Entry List' => array('href' => base_url('reports')),
								'Account Balances' => array('href' => base_url('reports/account_balances')),
								'Balance Sheet' => array('href' => base_url('reports/balance_sheet')),
								'General Ledger' => array('href' => base_url('reports/general_ledger')),
								'Income Statement' => array('href' => base_url('reports/income_statement')),
								'Trial Balance' => array('href' => base_url('reports/trial_balance'))
							)
		);

		$this->load->view('_layouts/header', $data);
		$this->load->view('reports/trial_balance');
		$this->load->view('_layouts/footer');

	}
}
