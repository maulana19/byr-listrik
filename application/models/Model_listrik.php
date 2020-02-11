<?php 
defined('BASEPATH') OR exit('Maaf,Alamat Yang tuju Tidak Ditemukan');



class Model_listrik extends CI_model
{
	
	public function get_all(){
		$query = $this->db->select('*')
				 ->from('daya')
				 ->order_by('id','ASC')
				 ->get();

		return $query->result();
	}
	public function simpan($data){
		$query = $this->db->insert("daya",$data);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}
 	public function edit($id){
 		$query = $this->db->where("id", $id)
 		->get("daya");

 		if ($query) {
 			return $query->row();
 		}else{
 			return false;
 		}
 	}
	public function update($data,$id){
		$query = $this->db->update("daya", $data, $id);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}
	public function hapus($id){
		$query = $this->db->delete("daya",$id);

		if ($query) {
			return true;
		}else{
			return false;
		}
	}
	public function cari_listrik($key){
		$query = $this->db->select('*')
						->from("daya")
						->like('daya',$key)
						->or_like('gol_tarif',$key)
						->or_like('kd_daya',$key)
						->get();

				return $query->result();
				$q = mysqli_num_rows($query);
				if ($q<1) {
					echo "Tidak Ada";
				}
	}
	public function data($number,$offset){
		return $query = $this->db->get('daya',$number,$offset)->result();
	}
	public function jumlah_data(){
		return $query = $this->db->get('daya')->num_rows();
	}
}

 ?>