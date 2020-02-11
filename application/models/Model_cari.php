<?php 
defined('BASEPATH') or die('No Direct Script Access Allowed');
/**
  * 
  */
		 class model_cari extends CI_model
		 {
		 	public function get_all(){
		 		$query = $this->db->select('*')
		 					->from("tb_transaksi")
		 					->join('tb_daya','tb_transaksi.id_daya = tb_daya.id')
		 					->join('tb_petugas','tb_transaksi.id_petugas = tb_petugas.id')
		 					->join('tb_pelanggan','tb_transaksi.id_pelanggan = tb_pelanggan.id')
		 					->get();
		 					return $query->result();
		 	}

		 }
  ?>