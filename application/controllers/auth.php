<?php
class auth extends CI_Controller{

	function __construct(){
		parent::__construct():
		$this->load->model('model_operator')
	}

	function login (){
		if(isset($_POST['submit'])){

			echo "proses data";
		}else{
			$this->load->view('form_login');
		}
	}
}