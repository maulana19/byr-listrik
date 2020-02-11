<?php 
     defined('BASEPATH')or exit('No direct script access allowed');

     /**
      * 
      */
     class model_transaksi extends CI_model
     {

     	public function get_all(){
     		$query = $this->db->select('*')
     					  ->from('transaksi')
     					  ->order_by('id','DESC')
     					  ->get();
     			return $query->result();
     	}
		public function cari($key){
				$query = $this->db->select('*')
						->from('transaksi')
						->like ('kode_pembayaran',$key)
						->get();

						return $query->result();

			}
		public function hapus($id){
		$query = $this->db->delete("transaksi", $id);

		if ($query) {
			return true;
		}else{
			return false;
		}
	}
     }
     ?>