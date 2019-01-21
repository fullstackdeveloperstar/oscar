<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	// constructor
	function __construct() {
		parent::__construct();
		
		$this->load->model('home_model');
		$this->load->model('admin_model');
	}


	public function signIn() {
		$email = $this->input->post('email');
		$password = $this->input->post('pwd');

		$user_info = $this->admin_model->signIn($email, $password);
		$state = $user_info!=null ? true : false;
		$msg = !$state ? 'Your email or password is invalid.' : '';

		echo json_encode(array('state'=>$state, 'msg'=>$msg, "user" => $user_info));
	}


	public function signUp() {
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = $this->input->post('pwd');
		
		if ( $this->admin_model->isExistEmail($email) ) {
			
			$state = false;
			$msg = 'Sorry, email already exists.';
			$user_info = null;
		} else {
			
			$state = $this->admin_model->signUp($name, $email, $password);
			$msg = !$state ? 'Error access to database.' : '';
			
			$user_info = $this->admin_model->signIn($email, $password);
		}
		
		echo json_encode(array('state'=>$state, 'msg'=>$msg, "user" => $user_info));
	}

	public function getData() {
		$uid = $this->input->post('uid');
		$data['user_answers'] = $this->home_model->getProblem($uid);
		$data['admin_answers'] = $this->home_model->getAnswer($uid);
        $data['info1'] = $this->home_model->getInfo1($uid);
		$data['info2'] = $this->home_model->getInfo2($uid);
		$data['info3'] = $this->admin_model->getCountOfCorrectAnswers($uid);

		echo json_encode($data);
	}
}
	