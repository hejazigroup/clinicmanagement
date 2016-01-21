<?php
/**
 * Created by PhpStorm.
 * User: Dev_Ahmed
 * Date: 11/01/2016
 * Time: 02:15 ص
 */
class My_model extends CI_Model{
	 function __construct() {
        parent::__construct();
      // $db = $this->load->database('clinic');
    }
	public function get_current_user(){
		$query = $this->db->get('users');
		return $query->result();
	}
}

?>