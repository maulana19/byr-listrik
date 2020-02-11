<?php 
defined('BASEPATH') OR exit('Maaf,Alamat Yang tuju Tidak Ditemukan');


 class listrik extends CI_Controller
 {
 	
 	public function __construct(){

 	parent :: __construct();

 	$this->load->helper(array('url'));
 	$this->load->model('model_listrik');
 	}

 	public function index()
 	{
 		$this->load->database();
 		$jumlah_data  = $this->model_listrik->jumlah_data();
 		$this->load->library('pagination');
 		$config['base_url'] = base_url().'index.php/listrik/index/';
 		$config['total_rows'] = $jumlah_data;
 		$config['per_page'] = 4;
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 		$from = $this->uri->segment(3);
 		$this->pagination->initialize($config);
 		$data1['daya'] = $this->model_listrik->data($config['per_page'],$from);
 		$this->load->view('admin/listrik/data_listrik',$data1);
 	}
 	public function tambah(){
 		$data = array
 		('title' => 'Tambah Daftar Listrik');
 		$this->load->view('admin/listrik/tambah_listrik',$data);
 	}
 	public function simpan(){
 		$data = array(
 			'kd_daya'	=> $this->input->post("kd_daya"),
 			'daya'		=> $this->input->post("daya"),
 			'gol_tarif' => $this->input->post("harga"), );
 		$this->model_listrik->simpan($data);

 		$this->session->set_flashdata('notif','<div class="alert alert-info">Data Kamu Berhasil Disimpan</div>');

 		redirect('listrik/');
 	}
 	public function edit($id){
 		$id = $this->uri->segment(3);

 		$data = array(
 			'title'		   => 'Edit Data Listrik',
 			'data_listrik' => $this->model_listrik->edit($id) );
 		$this->load->view('admin/listrik/edit_listrik',$data);
 	}
 	public function update(){
 		$id['id'] = $this->input->post("id");
 		$data = array(
 			'kd_daya'	=> $this->input->post("kd_daya"),
 			'daya'		=> $this->input->post("daya"),
 			'gol_tarif' => $this->input->post("gol_tarif"), 
 		);
 		$this->model_listrik->update($data, $id);

 		redirect('listrik/');
 	}
 	public function hapus($id){

 		$this->db->where('id',$id);
 		$this->db->delete('tb_daya');
 	
 		redirect('listrik/');
 	}
 	public function cari(){
 		$key = $this->input->post('carian');
 		$data = array(
 			'title' 	  => 'Daftar Tarif Listrik',
 			'data_listrik'=> $this->model_listrik->cari_listrik($key)
 			 );
 		$this->load->view('admin/listrik/data_listrik',$data);
 	}
 } ?>		