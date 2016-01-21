<?php
	/**
	* 
	*/
	class MY_Controller extends CI_Controller
	{
		public $layout;
		function __construct()
		{
			# code...
			$this->layout = 'layout/master';
		}
	}
?>