<?php 
defined('BASEPATH') or exit('Maaf,Alamat Yang tuju Tidak Ditemukan');


class Model_pelanggan extends CI_model
{
	public function get_all(){
		$query = $this->db->select('pelanggan.*,daya.daya,daya.gol_tarif,daya.id AS daya_id')
				->from('pelanggan')
				->order_by('id','DESC')
				->join('daya','pelanggan.daya = daya.id')
				->get();
		return $query->result();
	}

			public function cari_pelanggan($key){
				$query = $this->db->select('*')
						->from('pelanggan')
						->like ('kode_pelanggan',$key)
						->or_like('nama',$key)
						->get();

						return $query->result();
				$q = mysqli_num_rows($query);
				if ($q<1) {
					echo "Tidak Ada";
				}
			}
	public function simpan($data){
		$query = $this->db->insert("pelanggan",$data);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}
	public function edit($id){
		$this->db->where("pelanggan.id",$id);
		$query = $this->db->select('pelanggan.*,daya.daya,daya.gol_tarif,daya.id AS daya_id')
				->from('pelanggan')
				->order_by('id','DESC')
				->join('daya','pelanggan.daya = daya.id')
				->get();


		if ($query) {
			return $query->row();
		}else{
			return false;
		}
	}
	public function update($data,$id){
		$query = $this->db->update("pelanggan", $data, $id);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}
	public function hapus($id){
		$query = $this->db->delete("pelanggan", $id);

		if ($query) {
			return true;
		}else{
			return false;
		}
	}
	public function data($number,$offset){
		return $query = $this->db->get('pelanggan',$number,$offset)->result();
	}
	public function jumlah_data(){
		return $query = $this->db->get('pelanggan')->num_rows();
	}

}

 ?>