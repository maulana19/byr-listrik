<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * 
  */
 class Login extends CI_Controller
 {
 	
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->library('form_validation');
 		$this->load->model('admin');
 	}
 	public function index(){
 		if ($this->admin->is_logged_in()) {
 			redirect("pelanggan");
 		}else{
 			$this->form_validation->set_rules('username', 'Username', 'required');
 			$this->form_validation->set_rules('password', 'Password', 'required');
 			$this->form_validation->set_message('required','<div class="alert alert-danger" style="margin-top: 3px"> <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}  Harus Di isi</b></div></div>');
 			if ($this->form_validation->run() == TRUE) {
 				$username = $this->input->post("username", TRUE);
 				$password = md5($this->input->post('password', TRUE));

 				$checking = $this->admin->check_login('petugas', array('username' => $username),
 					array('password' => $password));

 				if ($checking != FALSE) {
 					foreach ($checking as $apps) {
 						$session_data= array(
 							'user_id'       => $apps->id,
 							'user_name'     => $apps->username,
 							'user_password' => $apps->password,
 							'user_nama'		=> $apps->nama,
 							'akses'			=> $apps->akses
 						);
 						// print_r($session_data);die();
 						$this->session->set_userdata($session_data);
 						if ($this->session->userdata("akses") == "1"		) {
 							redirect('admin/dashboard/');
 						}else{
 							redirect('user/dashboard/');
 						}
 					}
 				}else{
 					$data['error'] = '<div class="alert alert-danger" style="margin-top: 3px"> <div class="header"><b><i class="fa fa-exclamation-circle"></i>ERROR</b>  Username atau Password Salah</div></div>';
 				$data['title'] = 'Login Dahulu';
 					$this->load->view('login', $data);
 				}
 			}else{
 				$data['title'] = 'Login Dahulu';
 				$this->load->view('login',$data);
 			}
 		}
 	}
 } ?>