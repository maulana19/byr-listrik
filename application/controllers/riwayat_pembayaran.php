<?php 
defined('BASEPATH')or exit('No direct script access allowed');

/**
  * 
  */
 class riwayat_pembayaran extends CI_Controller
 {
 	
 	public function __construct()
 	{
 		parent:: __construct();
 		$this->load->model('model_transaksi');
 	}
 	public function index(){
 		$data = array(
 			'title'			 => 'Riwayat Transaksi',
 			'data_transaksi'		 => $this->model_transaksi->get_all(),
 			 );
 		$this->load->view('petugas/riwayat/data_transaksi',$data);
 	}
 	public function hapus($id){
 		$this->db->where('id',$id);
 		$this->db->delete('transaksi');
 		redirect('riwayat_pembayaran/');
 	}
 	public function cari(){
	 	$key = $this->input->post('carian');
	 	$data =  array(
	 		'title'   => 'Riwayat Transaksi',
	 		'data_transaksi'=> $this->model_transaksi->cari($key),);

	 	$this->load->view('petugas/riwayat/data_transaksi',$data);
	 }	
 } ?>