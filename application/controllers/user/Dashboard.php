<?php 
defined('BASEPATH')OR die('No direct script access allowed');
/**
  * 
  */
 class Dashboard extends CI_Controller
 {
 	
     public function __construct()
 	{
 		parent:: __construct();
 		$this->load->model('admin');
 		if ($this->admin->is_role() != "0") {
 			redirect("login/");
 		}
 	}
 	public function index(){
 		$this->load->view("petugas/Bayar/pilih_pelanggan");
 	}
 	public function logout(){
 		$this->session->sess_destroy();
 		redirect('login');
 	}
 } ?>