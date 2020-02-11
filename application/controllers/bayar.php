<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
  * 
  */
 class bayar extends CI_Controller
 {
 	
 	public function __construct()
 	{
 		parent:: __construct();

 		$this->load->model('model_bayar');
 		$this->load->model('model_pelanggan');
 	}

 	public function index(){
 		$data = array
	 		('title'		  => 'Bayar Listrik',
 			'data_pelanggan' => $this->model_pelanggan->get_all(),
	 		);
 		$this->load->view('petugas/Bayar/pilih_pelanggan', $data);
 	}
 	public function cari(){
	 	$key = $this->input->post('carian');
	 	$data =  array(
	 		'title'   => 'Bayar Listrik',
	 		'data_pelanggan'=> $this->model_bayar->cari_pelanggan($key),);

	 	$this->load->view('petugas/Bayar/pilih_pelanggan',$data);
	 }
	public function pilih(){
		$data = array(
			'title' =>'Pilih Pelanggan',
	 		 'data_pelanggan'=>$this->model_pelanggan->get_all(),);
		$this->load->view('petugas/bayar/pilih_pelanggan',$data);
	}
	public function pilih_pelanggan($id){
		// $id = $this->uri->segment(3);
		// print_r($id);
		// print_r($this->model_pelanggan->edit($id));
		// die();
		$data = array(
			'title' =>'Bayar Listrik',
			'data_pelanggan' => $this->model_pelanggan->edit($id), );
		$this->load->view('petugas/Bayar/hal_bayar',$data);
	}
	public function bayar_listrik(){
		$data = array(
			'kode_pembayaran'    => $this->input->post('kode_pembayaran'),
			'tanggal_pembayaran' => $this->input->post('tanggal_pembayaran'),
			'id_pelanggan'       => $this->input->post('id_pelanggan'),
			'daya'               => $this->input->post('daya'),
			'tagihan' 			 => $this->input->post('tagihan'),
			'naik'				 => $this->input->post('naik'),
			'total_bayar'        => $this->input->post('tagihan') * $this->input->post('daya'),
			'uang_pelanggan'     => $this->input->post('uang_pelanggan'),
			'kembalian'  		 => $this->input->post('uang_pelanggan') - ($this->input->post('tagihan') * $this->input->post('daya'))
		);
		$this->model_bayar->simpan($data);
		redirect('bayar/');
	}
 	public function hapus($id){
 		$this->db->where('id', $id);
 		$this->db->delete('transaksi');
 		
 		redirect('riwayat_pembayaran/');
 	}	
 	}
  ?>