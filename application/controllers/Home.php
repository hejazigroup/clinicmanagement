
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller
{
    function  Index (){
    	$data['content'] = 'Home/Index';
    	//$this->load->view('Home/Index');
    	$this->load->view('layout/Main', $data);

    }
}