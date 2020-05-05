<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mymodel');
	}
		
	public function login()
	{
		$data['pesan'] = $this->session->flashdata('pesan');
		$this->load->view('login',$data);
	}
	public function aksi_login()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("pass");
		$level = $this->input->post("level");
		$where = array(
			'username' => $username,
			'pass' => md5($password),
			'nama_level' => $level
			);
		$cek = $this->Mymodel->CekLogin("v_login_sistem",$where)->num_rows();
		$data['array'] = $this->Mymodel->CekLogin("v_login_sistem",$where)->row_array();
		// echo $data['array']['nama'];

		if ($cek>0) {
			$data_session = array(
				'id' => $data['array']['id_institusi'],
				'username' => $username,
				'level' => $level,
				'nama' => $data['array']['nama']
				);
			$this->session->set_userdata($data_session);		 
	 		// echo $this->session->userdata('nama');		gini rupanya tampilkan session
			 redirect(base_url());
		}
		else{
			$this->session->set_flashdata('pesan','LOGIN GAGAL !');
			redirect(site_url("c_Login/login"));
			// echo md5('pass');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function tes()
	{
		$this->load->model('RealModal');
		$like = array('nama_latin' => 'ma' );
		// $data = $this->RealModal->pencarian('tb_ordo',$like)->num_rows();
		// $data['nama'] = $this->RealModal->pencarian('tb_ordo',$like)->row_array();
		$data['nama'] = $this->RealModal->pencarian('tb_ordo',$like)->result_array();


		echo "<pre>";
		print_r($data);
		echo "</pre>";

	}
	public function tes2()
	{
		$this->load->model('RealModal');
		$tabel = array('tb_ordo','tb_famili','tb_genus','tb_spesies' );
		$join = array(
					'tb_ordo.id_class = tb_class.id_class',
					'tb_famili.id_ordo = tb_ordo.id_ordo',
					'tb_genus.id_famili = tb_famili.id_famili',
					'tb_spesies.id_genus = tb_genus.id_genus',
				);
		$data['nama'] = $this->RealModal->join('tb_class', $tabel, $join)->result_array();
		
		echo "<pre>";
		print_r($data);
		echo "</pre>";	
	}
}
?>