<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	
	public function index()
	{
		$data['content'] = 'Home/maincpanel';
		$this->load->view('layout/adminpanel', $data);
		//echo 'Nothing';
	}

	public function newuser()
	{
		//$data['content'] = 'Users/newuser';
		//$this->load->view('layout/adminpanel', $data);
/*
		$data = array(
			array('user_full_name' => 'ahmed hejazi' ,
			'user_meta' => '2',
			'user_username' => 'abuslame15',
			'user_password' => '123'
			 ),
			array('user_full_name' => 'ahmed hejazi' ,
			'user_meta' => '2',
			'user_username' => 'abuslame14',
			'user_password' => '123'
			 ),
			array('user_full_name' => 'ahmed hejazi' ,
			'user_meta' => '3',
			'user_username' => 'abuslame11',
			'user_password' => '123'
			 ),
			array('user_full_name' => 'ahmed hejazi' ,
			'user_meta' => '3',
			'user_username' => 'abuslame1',
			'user_password' => '123'
			 )
			);
		if($this->db->insert_batch('clinc_users', $data)){
			echo 'تم إضافة السجلات بنجاح';

		}*/
	}

	public function doctor()
		{
		//(where)$data['query'] = $this->db->get_where('clinc_users', array('user_username' => 'abuslame' ));
		$data['meta_name'] = $this->db->get('clinc_meta');
		//$data['query'] = $this->db->get('clinc_users');
		$data['query'] = $this->db->get_where('clinc_users', array('user_meta' => 2));
		//$data['countrecord'] = $this->db->conunt_all('clinc_users');
		$data['content'] = 'Users/doctor';
		$this->load->view('layout/adminpanel', $data);
		
	}

	public function lab()
	{
		$data['content'] = 'Users/lab';
		$this->load->view('layout/adminpanel', $data);
	}

	public function xray()
	{
		$data['content'] = 'Users/x-ray';
		$this->load->view('layout/adminpanel', $data);
	}

	public function ajax(){
		//$data = array('name' => $name, 'email' => $email, 'url' => $url);
		//$where = "author_id = 1 AND status = 'active'";
		//$str = $this->db->update_string('table_name', $data, $where);
		//$this->db->get_where()
		//$this->db->get_where('mytable', array('id' => $id));
		//$this->db->get_where("clinc_meta", "meta_name", "1")
		//count of record $this->db->count_all('clinc_meta')
		
		echo json_encode(array (
			"msg" => "ahmed"
		
		));
	}

	public function newpatient(){
		$data['content'] = 'patient/newpatient';
		$this->load->view('layout/adminpanel', $data);
	}

}
?>