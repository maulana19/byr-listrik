<?php 
defined('BASEPATH')OR die('No direct script access allowed');

 class Dashboard extends CI_Controller
 {
 	
 	public function __construct()
 	{
 		parent:: __construct();
 		$this->load->model('admin');
		$this->load->model('model_pelanggan');
 		if ($this->admin->is_role() != "1") {
 			redirect("login/");
 		}
 	}
 	public function index(){
 		$data['total_listrik']   = $this->admin->hitung_jumlah_listrik();
 		$data['total_pelanggan'] = $this->admin->hitung_jumlah_pelanggan();
 		$data['total_petugas']	 = $this->admin->hitung_jumlah_petugas();
 		$data['total_riwayat']	 = $this->admin->hitung_riwayat();
 		$data['title'] = 'Bayar Listrik';
 		$this->load->view("admin/dashboard",$data);
 	}
 	public function tampil_pelanggan(){
 		$this->load->database();
 		$jumlah = $this->model_pelanggan->jumlah_data();
 		$this->load->library('pagination');
 		$config['base_url']				= base_url().'index.php/admin/dashboard/tampil_pelanggan/';
 		$config['total_rows']			= $jumlah;
 		$config['per_page']				= 2;
 		$config['first_link']			= 'First';
 		$config['last_link']			= 'Last';
 		$config['next_link']			= 'Next';
 		$config['pref_link']			= 'Prev';
 		$config['full_tag_open']		= '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
 		$config['full_tag_close']		= '</ul></nav></div>';
 		$config['num_tag_open']			= '<li class="page-item"><span class="page-link">';
 		$config['num_tag_close']		= '</span></li>';
 		$config['cur_tag_open']			= '<li class="page-item active"><span class="page-link">';
 		$config['cur_tag_close']		= '<span class="sr-only">(current)</span></span></li>';
 		$config['next_tag_open']		= '<li class="page-item"><span class="page-link">';
 		$config['next_tagl_close']		= '<span aria-hidvden="true">&raquo;</span></span></li>';
 		$config['prev_tag_open']		= '<li class="page-item"><span class="page-link">';
 		$config['prev_tagl_close']		= '</span>Next</li>';
 		$config['first_tag_open']		= '<li class="page-item"><span class="page-link">';
 		$config['first_tagl_close']		= '</span></li>';
 		$config['last_tag_open']		= '<li class="page-item"><span class="page-link">';
 		$config['last_tagl_close']		= '</span></li>';

 		$from	= $this->uri->segment(3);
 		$this->pagination->initialize($config);
 		$data['pelanggan']	= $this->model_pelanggan->data($config['per_page'],$from);

 		$this->load->view('admin/template/header');
 		$this->load->view('admin/template/sidebar');
 		$this->load->view('admin/pelanggan/data_pelanggan',$data);
 		$this->load->view('admin/template/footer');

 	}
 	public function logout(){
 		$this->session->sess_destroy();
 		redirect('login');
 	}
 } ?>