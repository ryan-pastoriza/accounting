<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends MY_Model{

  public function __construct()
  {
    parent::__construct();

  }
  function validate()
  {
    $this->table="profile";
  	$arr['username']=$this->input->post('username');
  	$arr['password']=md5($this->input->post('password'));
  	return $this->get($arr);
  }
  function updatestatus($id,$stat)
  {
    $this->table="users";
    $columns_arr = array(
      'status' => $stat,
      'updated_at' => date('Y-m-d H:i:s')
    );
    $where_arr= array('user_id' => $id);
    $this->update($columns_arr,$where_arr);
  }
  function getProfile($id)
  {
    $this->table="profile";
    $where_arr= array('user_id' => $id);
  	return $this->get($where_arr);
  }
  function updateProfile()
  {
    $this->table="user_details";
    $id=$this->input->post('user_id');
    $where_arr= array('user_id' => $id);
    $columns_arr['fname']=$this->input->post('fname');
  	$columns_arr['lname']=$this->input->post('lname');
    $columns_arr['birthdate']=$this->input->post('birthdate');
    $columns_arr['address']=$this->input->post('address');
    $this->update($columns_arr,$where_arr);
    $columns_arr1['username']=$this->input->post('username');
    if (!$this->input->post('passowrd')) {
      $columns_arr1['password']=md5($this->input->post('password'));
    }
    $this->table="users";
    $this->update($columns_arr1,$where_arr);

  }

}
