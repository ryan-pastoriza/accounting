<?php
/**
 * 
 */
class Chart_accounts extends My_Model
{
	
	public $table = 'chart_of_accounts';
	public $pk	  = 'account_id';

	public function __construct() {
	    parent::__construct();
	}

	public function accounts() {

		$this->load->model('account_type');
		$account_type = new Account_type();

		
		$account_types = $account_type->get_all();
		
		$data = array();

		foreach ($account_types as $key => $value) {
			$data[$value->name] = array('account_type_id' => $value->account_type_id );
		}

		// level 1
		foreach ($data as $key => $value) {
			$data[$key]['accounts'] = $this->get_accounts($value['account_type_id']);

			if( count($data[$key]['accounts']) ){
				// level 2
				foreach ($data[$key]['accounts'] as $key1 => $value1) {
					
					$data[$key]['accounts'][$key1]['accounts'] = $this->get_accounts($value['account_type_id'], $value1['account_id'], 2);

					if( count($data[$key]['accounts'][$key1]['accounts']) ){

						// level 3
						foreach ($data[$key]['accounts'][$key1]['accounts'] as $key2 => $value2) {
							
							$data[$key]['accounts'][$key1]['accounts'][$key2]['accounts'] = $this->get_accounts($value1['account_type_id'], $value2['account_id'], 3);

						}

					}

				}

			}


		}

		return $data;
	}


	public function get_accounts($account_type_id, $account_id = null, $level = 1) {

		$this->db->select('chart_of_accounts.*');
		$this->db->from('chart_of_accounts');
		$this->db->where('account_type_id', $account_type_id);

		if( !$account_id ){
			$this->db->where('parent_account is null');
		}

		$this->db->where('level', $level);

		$query = $this->db->get();

		return $query->result_array();
		// return $this->db->last_query();

	}



}