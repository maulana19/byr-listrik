<?php 
defined('BASEPATH') OR exit('Maaf,Alamat Yang tuju Tidak Ditemukan');


 class listrik_1 extends CI_Controller
 {
 	
 	public function __construct(){

 	parent :: __construct();


 	$this->load->model('model_listrik');
 	}

 	public function index()
 	{
 		$data = array
 		('title' => 'Daftar Tarif Listrik',
 		 'data_listrik'  => $this->model_listrik->get_all(),
 		  );
 		$this->load->view('petugas/listrik/data_listrik',$data);
 	}
 	public function cari(){
 		$key = $this->input->post('carian');
 		$data = array(
 			'title' 	  => 'Daftar Tarif Listrik',
 			'data_listrik'=> $this->model_listrik->cari_listrik($key)
 			 );
 		$this->load->view('petugas/listrik/data_listrik',$data);
 	}
 } ?>		