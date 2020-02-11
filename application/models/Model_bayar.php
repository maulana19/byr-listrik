<?php 
     defined('BASEPATH')or exit('No direct script access allowed');

     /**
      * 
      */
     class model_bayar extends CI_model
     {

		public function cari_pelanggan($key){
				$query = $this->db->select('*')
						->from('pelanggan')
						->like ('kode_pelanggan',$key)
						->or_like('nama',$key)
						->join('daya','pelanggan.daya = daya.id')
						->get();

						return $query->result();

				}
			
		public function simpan($data){
			$query = $this->db->insert('transaksi',$data);
			if ($query) {
				return true;
			}else{
				return false;
			}
		}
     }
     ?>