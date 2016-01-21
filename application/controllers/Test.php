<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {


    public function index()
    {
       // $this->load->view('welcome_message');
        $data['name'] = 'ali mohammad';
       $this->load->view('Test', $data);
    }
    public function go()
    {
        echo 'welecome ahmed';
    }

    public  function user(){
       $this->load->model('my_model');
       $info = $this->my_model->get_current_user();
       foreach ($info as $value) {
           # code...
            echo $value->name .'<br>';
       }
       
        
    }
}
