<?php
/**
 * 
 */
class Account_type extends My_Model
{
	
	public $table = 'account_type';
	public $pk	  = 'account_type_id';

	public function __construct() {
	    parent::__construct();
	}


}