<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_CUD extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mymodel');
	}
		
	public function create($master)
	{
		$data["tglhariini"] = date('d-m-Y');
		$data["nohari"] = date('w');
		$data['level'] = $this->session->userdata('level');
		$data['nama'] = $this->session->userdata('nama');
		$data['username'] = $this->session->userdata('username');
		list($data["tgl"],$data["bln"], $data["thn"])=explode("-",$data["tglhariini"]);
		
		switch ($master) {
			case 'institusi':
				$data['level_user'] = $this->Mymodel->getData('tb_userlevel')->result_array();
				$data['institusi'] = $this->Mymodel->getData('v_login_sistem')->result_array();
				$this->load->view('tambah/tambahinstitusi',$data);
			break;
			case 'class':
				$data['class'] = $this->Mymodel->getData('tb_class')->result_array();
				$this->load->view('tambah/tambahclass',$data);
			break;
			case 'ordo':
				$order = array('nama_latin');
				$data['class'] = $this->Mymodel->getOrder('tb_class',$order,'ASC')->result_array();
				$data['ordo'] = $this->Mymodel->getData('tb_ordo')->result_array();
				$this->load->view('tambah/tambahordo',$data);
			break;
			case 'famili':
				$order = array('nama_latin');
				$data['ordo'] = $this->Mymodel->getOrder('tb_ordo',$order,'ASC')->result_array();
				$data['famili'] = $this->Mymodel->getData('tb_famili')->result_array();
				$this->load->view('tambah/tambahfamili',$data);
				break;
			case 'genus':
				$order = array('nama_latin');
				$data['famili'] = $this->Mymodel->getOrder('tb_famili',$order,'ASC')->result_array();
				$data['genus'] = $this->Mymodel->getData('tb_genus')->result_array();
				$this->load->view('tambah/tambahgenus',$data);
			break;
			case 'spesies':
				$order = array('nama_latin');
				$data['genus'] = $this->Mymodel->getOrder("tb_genus",$order,'ASC')->result_array();	
				$data['kategori'] = $this->Mymodel->getData("tb_kelangkaan")->result_array();
				$this->load->view('tambah/tambahspesies',$data);
			break;
			case 'kategori':
				$data['kategori'] = $this->Mymodel->getData("tb_kelangkaan")->result_array();
				$this->load->view('tambah/tambahkategorikelangkaan',$data);
			break;
			default:
			break;
		}
	}
	public function aksiTambah($master)
	{
		$data["tglhariini"] = date('d-m-Y');
		$data["nohari"] = date('w');
		list($data["tgl"],$data["bln"], $data["thn"])=explode("-",$data["tglhariini"]);

		switch ($master) {
			case 'institusi':
				$table = 'tb_institusi';
				$nama = $this->input->post('nama');
				$id_level = $this->input->post('id_level');
				$username = $this->input->post('username');
				$alamat = $this->input->post('alamat');

				$data = array(
					'nama' => $nama,
					'alamat' => $alamat ,
					'username' => $username,
					'pass' => md5($username),
					'id_level' => $id_level
				);
				$this->Mymodel->inputData($table,$data);
				$this->session->set_flashdata('pesan','Data Baru Berhasil Ditambahkan');
				redirect(site_url("TugasAkhir/LihatData/institusi"));
			break;

			case 'class':
				$nama_latin = $this->input->post('nama_latin');
				$nama_umum = $this->input->post('nama_umum');
				$ciri_ciri = $this->input->post('ciri_ciri');
				$keterangan = $this->input->post('keterangan');
				$ekstensi = $_FILES['img']['type'];
	            if($_FILES['img']['name']){
					switch ($ekstensi) {
						case 'image/jpeg':
							$eks = 'jpeg';
						break;
						case 'image/jpg':
							$eks = 'jpg';
						break;
						case 'image/png':
							$eks ='png';
						break;
						default:
						break;
					}
		        	$nmfile = "photo_".time().'_'.rand(1000,9999);
			    	$config['upload_path'] = './assets/img/gambar/class';
			        $config['allowed_types'] = 'jpg|png|jpeg';
			        $config['file_name'] = $nmfile;
					$this->load->library('upload',$config); 
		            $this->upload->do_upload('img');
                	$gambar = $config['file_name'].".".$eks;
	            }
	            else{ 
	            	$gambar = "NOIMAGE.jpg";
	            }
	            $level = $this->session->userdata('level');
	            $institusi = $this->session->userdata('id');
	            switch ($level) {
	            	case 'bksda':
		            	$table = 'tb_class';
			            $data = array(
			                	'nama_latin' => $nama_latin, 
			                	'nama_umum' => $nama_umum,
			                	'ciri_ciri' => $ciri_ciri,
			                	'keterangan' => $keterangan,
			                	'gambar' => $gambar
		                	);
		                $this->Mymodel->inputData($table,$data);
		                // update tabel log 
			            $table = 'tb_log';
			            $kegiatan = 'Menambah Class ' .$nama_latin. '('.$nama_umum.')';
			            $id_institusi = $this->session->userdata('id');
			            $tanggal = date('Y-m-d');
			            $waktu = date('H:i:s');
			            $dataLog = array('kegiatan' => $kegiatan, 
			        					'id_institusi' => $id_institusi,
			        					'tanggal' => $tanggal,
			        					'waktu' => $waktu,);
			            $this->Mymodel->inputData($table, $dataLog);
			            $this->session->set_flashdata('pesan','Data Baru Berhasil Ditambahkan');
						redirect(site_url("TugasAkhir/LihatData/class"));
	            	break;
	            	default:
	            		$table = 'tmp_class';
	            		$data = array(
			                	'latin' => $nama_latin, 
			                	'umum' => $nama_umum,
			                	'ciri' => $ciri_ciri,
			                	'ket' => $keterangan,
			                	'gmb' => $gambar,
			                	'id_institusi' => $institusi
		                	);
	            		$this->Mymodel->inputData($table, $data);
			            $this->session->set_flashdata('menunggu','Menunggu Verifikasi BKSDA');
	            		redirect(site_url("TugasAkhir"));
	            	break;
	            }
				
			break;
			
			case 'ordo':
				$nama_latin = $this->input->post('nama_latin');
				$nama_umum = $this->input->post('nama_umum');
				$ciri_ciri = $this->input->post('ciri_ciri');
				$keterangan = $this->input->post('keterangan');
				$id_class = $this->input->post('id_class');
				$ekstensi = $_FILES['img']['type'];
				if($_FILES['img']['name']){
					switch ($ekstensi) {
						case 'image/jpeg':
							$eks = 'jpeg';
						break;
						case 'image/jpg':
							$eks = 'jpg';
						break;
						case 'image/png':
							$eks ='png';
						break;
						default:
						break;
					}
		           	$nmfile = "photo_".time().'_'.rand(1000,9999);
			        $config['upload_path'] = './assets/img/gambar/ordo';
			        $config['allowed_types'] = 'jpg|png|jpeg';
			        $config['file_name'] = $nmfile;
					$this->load->library('upload',$config);
		            $this->upload->do_upload('img');
                	$gambar = $config['file_name'].".".$eks;
	            }
		      	else{
		      		$gambar = "NOIMAGE.jpg";  	
		        }
		        $level = $this->session->userdata('level');
		        $institusi = $this->session->userdata('id');
		        switch($level){
		        	case 'bksda':
		        	$table = 'tb_ordo';
				        $data = array(
				            'nama_latin' => $nama_latin, 
				            'nama_umum' => $nama_umum,
				            'ciri_ciri' => $ciri_ciri,
				            'keterangan' => $keterangan,
				            'gambar' => $gambar,
				            'id_class' => $id_class
			            );
		              	$this->Mymodel->inputData($table,$data);
		              	// update tabel log 
			            $table = 'tb_log';
			            $kegiatan = 'Menambah Ordo ' .$nama_latin. '('.$nama_umum.')';
			            $id_institusi = $this->session->userdata('id');
			            $tanggal = date('Y-m-d');
			            $waktu = date('H:i:s');
			            $dataLog = array('kegiatan' => $kegiatan, 
			        					'id_institusi' => $id_institusi,
			        					'tanggal' => $tanggal,
			        					'waktu' => $waktu,);
			            $this->Mymodel->inputData($table, $dataLog);
			            $this->session->set_flashdata('pesan','Data Baru Berhasil Ditambahkan');
						redirect(site_url("TugasAkhir/LihatData/ordo"));
		        	break;

		        	default :
		        		$table = 'tmp_ordo';
		        		$data = array(
			                	'latin' => $nama_latin, 
			                	'umum' => $nama_umum,
			                	'ciri' => $ciri_ciri,
			                	'ket' => $keterangan,
			                	'gmb' => $gambar,
			                	'id_class' => $id_class,
			                	'id_institusi' => $institusi
		                	);
		        		$this->Mymodel->inputData($table, $data);
			            $this->session->set_flashdata('menunggu','Menunggu Verifikasi BKSDA');
	            		redirect(site_url("TugasAkhir"));
		        	break;
		        }
			break;

			case 'famili':
				$table = 'tb_famili';
				$nama_latin = $this->input->post('nama_latin');
				$nama_umum = $this->input->post('nama_umum');
				$ciri_ciri = $this->input->post('ciri_ciri');
				$keterangan = $this->input->post('keterangan');
				$id_ordo = $this->input->post('id_ordo');
				$ekstensi = $_FILES['img']['type'];
				if($_FILES['img']['name']){
					switch ($ekstensi) {
						case 'image/jpeg':
							$eks = 'jpeg';
						break;
						case 'image/jpg':
							$eks = 'jpg';
						break;
						case 'image/png':
							$eks ='png';
						break;
						default:
						break;
					}
					$nmfile = "photo_".time().'_'.rand(1000,9999);
				    $config['upload_path'] = './assets/img/gambar/famili';
				    $config['allowed_types'] = 'jpg|png|jpeg';
				    $config['file_name'] = $nmfile;
					$this->load->library('upload',$config);
			        $this->upload->do_upload('img');
			        $gambar = $config['file_name'].".".$eks;
	            }
	            else{
	            	$gambar = "NOIMAGE.jpg";
		        }
		        $level = $this->session->userdata('level');
		        $institusi = $this->session->userdata('id');
		        switch($level){
		        	case 'bksda':
			            $data = array(
				            'nama_latin' => $nama_latin, 
				            'nama_umum' => $nama_umum,
				            'ciri_ciri' => $ciri_ciri,
				            'keterangan' => $keterangan,
				            'gambar' => $gambar,
				            'id_ordo' => $id_ordo
			            );
			            $this->Mymodel->inputData($table,$data);
			            // update tabel log 
			            $table = 'tb_log';
			            $kegiatan = 'Menambah Famili ' .$nama_latin. '('.$nama_umum.')';
			            $id_institusi = $this->session->userdata('id');
			            $tanggal = date('Y-m-d');
			            $waktu = date('H:i:s');
			            $dataLog = array('kegiatan' => $kegiatan, 
			        					'id_institusi' => $id_institusi,
			        					'tanggal' => $tanggal,
			        					'waktu' => $waktu,);
			            $this->Mymodel->inputData($table, $dataLog);
			            $this->session->set_flashdata('pesan','Data Baru Berhasil Ditambahkan');
						redirect(site_url("TugasAkhir/LihatData/famili"));
		        	break;

		        	default :
		        		$table = 'tmp_famili';
		        		$data = array(
			                	'latin' => $nama_latin, 
			                	'umum' => $nama_umum,
			                	'ciri' => $ciri_ciri,
			                	'ket' => $keterangan,
			                	'gmb' => $gambar,
			                	'id_ordo' => $id_ordo,
			                	'id_institusi' => $institusi
		                	);
		        		$this->Mymodel->inputData($table, $data);
			            $this->session->set_flashdata('menunggu','Menunggu Verifikasi BKSDA');
	            		redirect(site_url("TugasAkhir"));	
		        	break;
		        }	
			break;
			case 'genus':
				$table = 'tb_genus';
				$nama_latin = $this->input->post('nama_latin');
				$nama_umum = $this->input->post('nama_umum');
				$ciri_ciri = $this->input->post('ciri_ciri');
				$keterangan = $this->input->post('keterangan');
				$id_famili = $this->input->post('id_famili');
				$ekstensi = $_FILES['img']['type'];
				if($_FILES['img']['name']){
					switch ($ekstensi) {
						case 'image/jpeg':
							$eks = 'jpeg';
						break;
						case 'image/jpg':
							$eks = 'jpg';
						break;
						case 'image/png':
							$eks ='png';
						break;
						default:
						break;
					}
		           	$nmfile = "photo_".time().'_'.rand(1000,9999);
			        $config['upload_path'] = './assets/img/gambar/genus';
			        $config['allowed_types'] = 'jpg|png|jpeg';
			        $config['file_name'] = $nmfile;
					$this->load->library('upload',$config);
		            $this->upload->do_upload('img');
		            $gambar = $config['file_name'].".".$eks;
	            }
		      	else{
		           	$gambar = "NOIMAGE.jpg";
		        }
		        $level = $this->session->userdata('level');
		        $institusi = $this->session->userdata('id');
		        switch($level){
		        	case 'bksda':
				        $data = array(
				            'nama_latin' => $nama_latin, 
				            'nama_umum' => $nama_umum,
				            'ciri_ciri' => $ciri_ciri,
				            'keterangan' => $keterangan,
				            'gambar' => $gambar,
				            'id_famili' => $id_famili
		               	);
			            $this->Mymodel->inputData($table,$data);
			            // update tabel log 
			            $table = 'tb_log';
			            $kegiatan = 'Menambah Genus ' .$nama_latin. '('.$nama_umum.')';
			            $id_institusi = $this->session->userdata('id');
			            $tanggal = date('Y-m-d');
			            $waktu = date('H:i:s');
			            $dataLog = array('kegiatan' => $kegiatan, 
			        					'id_institusi' => $id_institusi,
			        					'tanggal' => $tanggal,
			        					'waktu' => $waktu,);
			            $this->Mymodel->inputData($table, $dataLog);
			            $this->session->set_flashdata('pesan','Data Baru Berhasil Ditambahkan');
						redirect(site_url("TugasAkhir/LihatData/genus"));
		        	break;

		        	default :
		        		$table = 'tmp_genus';
		        		$data = array(
			                	'latin' => $nama_latin, 
			                	'umum' => $nama_umum,
			                	'ciri' => $ciri_ciri,
			                	'ket' => $keterangan,
			                	'gmb' => $gambar,
			                	'id_famii' => $id_famii,
			                	'id_institusi' => $institusi
		                	);
		        		$this->Mymodel->inputData($table, $data);
			            $this->session->set_flashdata('menunggu','Menunggu Verifikasi BKSDA');
	            		redirect(site_url("TugasAkhir"));
		        	break;
		        }
			break;

			case 'spesies':
				$table = 'tb_spesies';
				$nama_latin = $this->input->post('nama_latin');
				$nama_umum = $this->input->post('nama_umum');
				$stat = $this->input->post('stat');
				$habitat = $this->input->post('habitat');
				$karakteristik = $this->input->post('karakteristik');
				$keterangan = $this->input->post('keterangan');
				$id_genus = $this->input->post('id_genus');
				$id_kategori = $this->input->post('id_kategori');
				$ekstensi = $_FILES['img']['type'];
				// GAMBAR 1
				if($_FILES['img']['name']){
					switch ($ekstensi) {
						case 'image/jpeg':
							$eks = 'jpeg';
						break;
						case 'image/jpg':
							$eks = 'jpg';
						break;
						case 'image/png':
							$eks ='png';
						break;
						default:
						break;
					}
					$nmfile = "photo_".time().'_'.rand(1,9999);
			        $config['upload_path'] = './assets/img/gambar/spesies';
			        $config['allowed_types'] = 'jpg|png|jpeg';
			        $config['file_name'] = $nmfile;
					$this->load->library('upload',$config);
		            $this->upload->initialize($config);
		            $this->upload->do_upload('img');
		            $gambar = $config['file_name'].".".$eks;
	            }
	            else{
	            	$gambar = "NOIMAGE.jpg";
	            }
	            // echo print_r($config);
	            // GAMBAR 2
				// $ekstensi2 = $_FILES['img2']['type'];
	   //          if($_FILES['img2']['name']){
				// 	switch ($ekstensi2) {
				// 		case 'image/jpeg':
				// 			$eks = 'jpeg';
				// 		break;
				// 		case 'image/jpg':
				// 			$eks = 'jpg';
				// 		break;
				// 		case 'image/png':
				// 			$eks ='png';
				// 		break;
				// 		default:
				// 		break;
				// 	}
				// 	$nmfile = "photo_".time().'_'.rand(1,9999);
				// 	$config['allowed_types'] = 'jpg|png|jpeg';
			 //        $config['file_name'] = $nmfile;
				// 	$this->load->library('upload',$config);
		  //           $this->upload->initialize($config);
		  //           $this->upload->do_upload('img2');
		  //           $gambar2 = $config['file_name'].".".$eks;
	   //          }
	   //          else{
	   //          	$gambar2 = "NOIMAGE.jpg";
	   //          }

	   //          // GAMBAR 3
				// $ekstensi3 = $_FILES['img3']['type'];
				// if($_FILES['img3']['name']){
				// 	switch ($ekstensi3) {
				// 		case 'image/jpeg':
				// 			$eks = 'jpeg';
				// 		break;
				// 		case 'image/jpg':
				// 			$eks = 'jpg';
				// 		break;
				// 		case 'image/png':
				// 			$eks ='png';
				// 		break;
				// 		default:
				// 		break;
				// 	}
				// 	$nmfile = "photo_".time().'_'.rand(1,9999);
				// 	$config['allowed_types'] = 'jpg|png|jpeg';
			 //        $config['file_name'] = $nmfile;
				// 	$this->load->library('upload',$config);
		  //           $this->upload->initialize($config);
				// 	$this->upload->do_upload('img3');
		  //           $gambar3 = $config['file_name'].".".$eks;  
	   //          }
	   //          else{
	   //          	$gambar3 = "NOIMAGE.jpg";
	   //          }
	            

	            $level = $this->session->userdata('level');
	            $institusi = $this->session->userdata('id');
	            switch($level){
	            	case 'bksda':
			            $data = array(
				           	'nama_latin' => $nama_latin, 
				           	'nama_umum' => $nama_umum,
				           	'stat' => $stat,
				           	'habitat' => $habitat,
				           	'karakteristik' => $karakteristik,
				           	'keterangan' => $keterangan,
				           	'gambar' => $gambar,
				           	'gambar2' => $gambar2,
				           	'gambar3' => $gambar3,
				          	'id_genus' => $id_genus,
				          	'id_kategori' => $id_kategori
			            );
			            $this->Mymodel->inputData($table,$data);	            
			            // update tabel log 
			            $table = 'tb_log';
			            $kegiatan = 'Menambah Spesies ' .$nama_latin. '('.$nama_umum.')';
			            $id_institusi = $this->session->userdata('id');
						$last_insert_id = $this->db->insert_id(); //Get Lastes ID Using CI
			            $tanggal = date('Y-m-d');
			            $waktu = date('H:i:s');
			            $dataLog = array('kegiatan' => $kegiatan, 
			        					'id_institusi' => $id_institusi,
			        					'tanggal' => $tanggal,
			        					'waktu' => $waktu,);
			            $this->Mymodel->inputData($table, $dataLog);
			            $this->session->set_flashdata('pesan','Data Baru Berhasil Ditambahkan');
						redirect(site_url("TugasAkhir/LihatData/spesies"));
	            	break;

	            	default :
		            	$table = 'tmp_spesies';
	            		$data = array(
				           	'latin' => $nama_latin, 
				           	'umum' => $nama_umum,
				           	'stat' => $stat,
				           	'habitat' => $habitat,
				           	'karakteristik' => $karakteristik,
				           	'ket' => $keterangan,
				           	'gmb' => $gambar,
				           	'gmb2' => $gambar2,
				           	'gmb3' => $gambar3,
				          	'id_genus' => $id_genus,
				          	'id_kategori' => $id_kategori,
		                	'id_institusi' => $institusi
			            );
			            $this->Mymodel->inputData($table,$data);	
			            $this->session->set_flashdata('menunggu','Menunggu Verifikasi BKSDA');            
						redirect(site_url("TugasAkhir"));
	            	break;
	            }
			break;
			default:
				echo "aksi belum dibuat";
			break;
		}
	}

	public function RPASS($id){
		$pass = md5($data['institusi']['username']);
		$table = 'tb_institusi';
		$where = array('id_institusi' => $id );
		$data['institusi'] =$this->Mymodel->editData($table,$where)->row_array();
		$updatepass = array('pass' => $pass);
		$this->Mymodel->updateData($where,$updatepass,$table);
		redirect(site_url("TugasAkhir/LihatData/institusi"));
	}
	public function update($master,$id){
		$data['level'] = $this->session->userdata('level');
		$data['nama'] = $this->session->userdata('nama');
		$data['username'] = $this->session->userdata('username');
		$data["tglhariini"] = date('d-m-Y');
		$data["nohari"] = date('w');
		list($data["tgl"],$data["bln"], $data["thn"])=explode("-",$data["tglhariini"]);
		switch ($master) {
			case 'institusi':
				$where = array('id_institusi' => $id );
				$table = 'tb_institusi';
				$data['institusi'] = $this->Mymodel->editData($table,$where)->row_array();
				$data['level_user'] = $this->Mymodel->getData('tb_userlevel')->result_array();
				$this->load->view('edit/editinstitusi',$data);
			break;
			case 'kategori':
				$where = array('id_kategori' => $id );
				$table = 'tb_kelangkaan';
				$data['kategori'] = $this->Mymodel->editData($table,$where)->row_array();
				$this->load->view('edit/editkategori',$data);
			break;
			case 'class':
				$where = array('id_class' => $id );
				$table = 'tb_class';
				$data['class'] = $this->Mymodel->editData($table,$where)->row_array();
				$this->load->view('edit/editclass',$data);
			break;
			case 'ordo':
				$where = array('id_ordo' => $id );
				$table = 'tb_ordo';
				$data['ordo'] = $this->Mymodel->editData($table,$where)->row_array();
				$data['class'] = $this->Mymodel->getData('tb_class')->result_array();
				$this->load->view('edit/editordo',$data);
			break;
			case 'famili':
				$where = array('id_famili' => $id );
				$table = 'tb_famili';
				$data['famili'] = $this->Mymodel->editData($table,$where)->row_array();
				$data['ordo'] = $this->Mymodel->getData('tb_ordo')->result_array();
				$this->load->view('edit/editfamili',$data);
			break;
			case 'genus':
				$where = array('id_genus' => $id );
				$table = 'tb_genus';
				$data['genus'] = $this->Mymodel->editData($table,$where)->row_array();
				$data['famili'] = $this->Mymodel->getData('tb_famili')->result_array();
				$this->load->view('edit/editgenus',$data);
			break;
			case 'spesies':
				$where = array('id_spesies' => $id);
				$table = 'tb_spesies';
				$data['spesies'] = $this->Mymodel->editData($table, $where)->row_array();
				$data['genus'] = $this->Mymodel->getData('tb_genus')->result_array();
				$data['kategori'] = $this->Mymodel->getData('tb_kelangkaan')->result_array();
				$this->load->view('edit/editspesies',$data);
			break;
			default:
				echo "belum buat";
			break;
		}
	}
	public function aksiEdit($master, $id){
		switch ($master) {
			case 'institusi':
				$table = 'tb_institusi';
				$where = array('id_institusi' => $id);
				$nama = $this->input->post('nama');
				$alamat = $this->input->post('alamat');
				$username = $this->input->post('username');
				$id_level = $this->input->post('id_level');
				$insertdata = array('nama' => $nama, 
									'alamat' => $alamat,
									'username' =>$username,
									'id_level' => $id_level
								);
				$this->Mymodel->updateData($where,$insertdata,$table);
	            $this->session->set_flashdata('pesan','Data Berhasil Di Update !');
				redirect(site_url("TugasAkhir/LihatData/institusi"));
			break;
			case 'kategori':
				$table = 'tb_kelangkaan';
				$where = array('id_kategori' => $id );
				$nama = $this->input->post('nama');
				$umum = $this->input->post('umum');
				$singkatan = $this->input->post('singkatan');
				$keterangan = $this->input->post('keterangan');
				$level = $this->session->userdata('level');
				$insertdata = array('nama' => $nama,
									'umum' => $umum,
									'singkatan' => $singkatan,
									'keterangan' => $keterangan);
				$this->Mymodel->updateData($where,$insertdata,$table);
	            $this->session->set_flashdata('pesan','Data Berhasil Di Update !');
				redirect(site_url("TugasAkhir/LihatData/kelangkaan"));
			break;
			case 'class':
				$where = array('id_class' => $id );
				$table = 'tb_class';
				$data['class'] = $this->Mymodel->editData($table,$where)->row_array();
				$nama_latin = $this->input->post('nama_latin');
				$nama_umum = $this->input->post('nama_umum');
				$ciri_ciri = $this->input->post('ciri_ciri');
				$keterangan = $this->input->post('keterangan');
				$img = $_FILES['img']['name'];
				if (($img == '')||is_null($img)) {
					$img = $data['class']['gambar'];
				}
				else{
					$ekstensi = $_FILES['img']['type'];
					switch ($ekstensi) {
						case 'image/jpeg':
							$eks = 'jpeg';
						break;
						case 'image/jpg':
							$eks = 'jpg';
						break;
						case 'image/png':
							$eks ='png';
						break;
						default:
						break; }
					$nmfile = "photo_".time().'_'.rand(1000,9999);
					$config['upload_path'] = './assets/img/gambar/class';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['file_name'] = $nmfile;
					$this->load->library('upload',$config);
					$this->upload->do_upload('img'); //ini yang diuload
					$config['file_name'] = $nmfile;
		            $img = $config['file_name'].".".$eks;
				}
				$level = $this->session->userdata('level');
				$insertdata = array('nama_latin' => $nama_latin,
									'nama_umum' => $nama_umum, 
									'ciri_ciri' => $ciri_ciri,
									'keterangan' => $keterangan,
									'gambar' => $img );
				$this->Mymodel->updateData($where,$insertdata,$table);

				$table = 'tb_log';
			    $kegiatan = 'Mengubah Class ' .$nama_latin. '('.$nama_umum.')';
			    $id_institusi = $this->session->userdata('id');
			    $tanggal = date('Y-m-d');
			    $waktu = date('H:i:s');
			    $dataLog = array('kegiatan' => $kegiatan, 
			    				'id_institusi' => $id_institusi,
			        			'tanggal' => $tanggal,
			        			'waktu' => $waktu,);
			    $this->Mymodel->inputData($table,$dataLog);	            
	            $this->session->set_flashdata('pesan','Data Berhasil Di Update !');
				redirect(site_url('TugasAkhir/LihatData/class'));
			break;
			case 'ordo':
				$where = array('id_ordo' => $id );
				$table = 'tb_ordo';
				$data['ordo'] = $this->Mymodel->editData($table,$where)->row_array();
				$nama_latin = $this->input->post('nama_latin');
				$nama_umum = $this->input->post('nama_umum');
				$ciri_ciri = $this->input->post('ciri_ciri');
				$keterangan = $this->input->post('keterangan');
				$img = $_FILES['img']['name'];
				$id_class = $this->input->post('id_class');
				if (($img == '')||is_null($img)) {
					$img = $data['ordo']['gambar'];
				}
				else{
					$ekstensi = $_FILES['img']['type'];
					switch ($ekstensi) {
						case 'image/jpeg':
							$eks = 'jpeg';
						break;
						case 'image/jpg':
							$eks = 'jpg';
						break;
						case 'image/png':
							$eks ='png';
						break;
						default:
						break; }
					$nmfile = "photo_".time().'_'.rand(1000,9999);
					$config['upload_path'] = './assets/img/gambar/ordo';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['file_name'] = $nmfile;
					$this->load->library('upload',$config);
					$this->upload->do_upload('img'); 
					$config['file_name'] = $nmfile;
		            $img = $config['file_name'].".".$eks;
				}
				$level = $this->session->userdata('level');
				$insertdata = array('nama_latin' => $nama_latin,
									'nama_umum' => $nama_umum, 
									'ciri_ciri' => $ciri_ciri,
									'keterangan' => $keterangan,
									'gambar' => $img,
									'id_class' => $id_class);
				$this->Mymodel->updateData($where,$insertdata,$table);
				$table = 'tb_log';
			    $kegiatan = 'Mengubah Ordo ' .$nama_latin. '('.$nama_umum.')';
			    $id_institusi = $this->session->userdata('id');
			    $tanggal = date('Y-m-d');
			    $waktu = date('H:i:s');
			    $dataLog = array('kegiatan' => $kegiatan, 
			    				'id_institusi' => $id_institusi,
			        			'tanggal' => $tanggal,
			        			'waktu' => $waktu,);
			    $this->Mymodel->inputData($table,$dataLog);	
	            $this->session->set_flashdata('pesan','Data Berhasil Di Update !');
				redirect(site_url('TugasAkhir/LihatData/ordo'));
			break;
			case 'famili':
				$where = array('id_famili' => $id );
				$table = 'tb_famili';
				$data['famili'] = $this->Mymodel->editData($table,$where)->row_array();
				$nama_latin = $this->input->post('nama_latin');
				$nama_umum = $this->input->post('nama_umum');
				$ciri_ciri = $this->input->post('ciri_ciri');
				$keterangan = $this->input->post('keterangan');
				$img = $_FILES['img']['name'];
				$id_ordo = $this->input->post('id_ordo');
				if (($img == '')||is_null($img)) {
					$img = $data['famili']['gambar'];
				}
				else{
					$ekstensi = $_FILES['img']['type'];
					switch ($ekstensi) {
						case 'image/jpeg':
							$eks = 'jpeg';
						break;
						case 'image/jpg':
							$eks = 'jpg';
						break;
						case 'image/png':
							$eks ='png';
						break;
						default:
						break; }
					$nmfile = "photo_".time().'_'.rand(1000,9999);
					$config['upload_path'] = './assets/img/gambar/famili';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['file_name'] = $nmfile;
					$this->load->library('upload',$config);
					$this->upload->do_upload('img'); 
					$config['file_name'] = $nmfile;
		            $img = $config['file_name'].".".$eks;
				}
				$level = $this->session->userdata('level');
				$insertdata = array('nama_latin' => $nama_latin,
									'nama_umum' => $nama_umum, 
									'ciri_ciri' => $ciri_ciri,
									'keterangan' => $keterangan,
									'gambar' => $img,
									'id_ordo' => $id_ordo);
				$this->Mymodel->updateData($where,$insertdata,$table);
				$table = 'tb_log';
			    $kegiatan = 'Mengubah Famili ' .$nama_latin. '('.$nama_umum.')';
			    $id_institusi = $this->session->userdata('id');
			    $tanggal = date('Y-m-d');
			    $waktu = date('H:i:s');
			    $dataLog = array('kegiatan' => $kegiatan, 
			    				'id_institusi' => $id_institusi,
			        			'tanggal' => $tanggal,
			        			'waktu' => $waktu,);
			    $this->Mymodel->inputData($table,$dataLog);	
	            $this->session->set_flashdata('pesan','Data Berhasil Di Update !');
				redirect(site_url('TugasAkhir/LihatData/famili'));
			break;
			case 'genus':
				$where = array('id_genus' => $id );
				$table = 'tb_genus';
				$data['genus'] = $this->Mymodel->editData($table,$where)->row_array();
				$nama_latin = $this->input->post('nama_latin');
				$nama_umum = $this->input->post('nama_umum');
				$ciri_ciri = $this->input->post('ciri_ciri');
				$keterangan = $this->input->post('keterangan');
				$img = $_FILES['img']['name'];
				$id_famili = $this->input->post('id_famili');
				if (($img == '')||is_null($img)) {
					$img = $data['genus']['gambar'];
				}
				else{
					$ekstensi = $_FILES['img']['type'];
					switch ($ekstensi) {
						case 'image/jpeg':
							$eks = 'jpeg';
						break;
						case 'image/jpg':
							$eks = 'jpg';
						break;
						case 'image/png':
							$eks ='png';
						break;
						default:
						break; }
					$nmfile = "photo_".time().'_'.rand(1000,9999);
					$config['upload_path'] = './assets/img/gambar/genus';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['file_name'] = $nmfile;
					$this->load->library('upload',$config);
					$this->upload->do_upload('img'); 
					$config['file_name'] = $nmfile;
		            $img = $config['file_name'].".".$eks;
				}
				$level = $this->session->userdata('level');
				$insertdata = array('nama_latin' => $nama_latin,
									'nama_umum' => $nama_umum, 
									'ciri_ciri' => $ciri_ciri,
									'keterangan' => $keterangan,
									'gambar' => $img,
									'id_famili' => $id_famili);
				$this->Mymodel->updateData($where,$insertdata,$table);
				$table = 'tb_log';
			    $kegiatan = 'Mengubah Genus ' .$nama_latin. '('.$nama_umum.')';
			    $id_institusi = $this->session->userdata('id');
			    $tanggal = date('Y-m-d');
			    $waktu = date('H:i:s');
			    $dataLog = array('kegiatan' => $kegiatan, 
			    				'id_institusi' => $id_institusi,
			        			'tanggal' => $tanggal,
			        			'waktu' => $waktu,);
			    $this->Mymodel->inputData($table,$dataLog);	
	            $this->session->set_flashdata('pesan','Data Berhasil Di Update !');
				redirect(site_url('TugasAkhir/LihatData/genus'));
			break;
			case 'spesies':
				$where = array('id_spesies' => $id );
				$table = 'tb_spesies';
				$data['spesies'] = $this->Mymodel->editData($table,$where)->row_array();
				$nama_latin = $this->input->post('nama_latin');
				$nama_umum = $this->input->post('nama_umum');
				$habitat = $this->input->post('habitat');
				$karakteristik = $this->input->post('karakteristik');
				$keterangan = $this->input->post('keterangan');
				$stat = $this->input->post('stat');
				$img = $_FILES['img']['name'];
				$id_genus = $this->input->post('id_genus');
				$id_kategori = $this->input->post('id_kategori');
				// GAMBAR 1
				if (($img == '')||is_null($img)) {
					$img = $data['spesies']['gambar'];
				}
				else{
					$ekstensi = $_FILES['img']['type'];
					switch ($ekstensi) {
						case 'image/jpeg':
							$eks = 'jpeg';
						break;
						case 'image/jpg':
							$eks = 'jpg';
						break;
						case 'image/png':
							$eks ='png';
						break;
						default:
						break; }
					$nmfile = "photo_".time().'_'.rand(1000,9999);
					$config['upload_path'] = './assets/img/gambar/spesies';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['file_name'] = $nmfile;
					$this->load->library('upload',$config);
		            $this->upload->initialize($config);
					$this->upload->do_upload('img'); 
					$config['file_name'] = $nmfile;
		            $img = $config['file_name'].".".$eks;
				}

				// GAMBAR 2
				// $img2 = $_FILES['img2']['name'];
				// if (($img2 == '')||is_null($img2)) {
				// 	$img2 = $data['spesies']['gambar'];
				// }
				// else{
				// 	$ekstensi = $_FILES['img2']['type'];
				// 	switch ($ekstensi) {
				// 		case 'image/jpeg':
				// 			$eks = 'jpeg';
				// 		break;
				// 		case 'image/jpg':
				// 			$eks = 'jpg';
				// 		break;
				// 		case 'image/png':
				// 			$eks ='png';
				// 		break;
				// 		default:
				// 		break; }
				// 	$nmfile = "photo_".time().'_'.rand(1000,9999);
				// 	$config['allowed_types'] = 'jpg|png|jpeg';
				// 	$config['file_name'] = $nmfile;
				// 	$this->load->library('upload',$config);
		  //           $this->upload->initialize($config);
				// 	$this->upload->do_upload('img2'); 
				// 	$config['file_name'] = $nmfile;
		  //           $img2 = $config['file_name'].".".$eks;
				// }

				// // GAMBAR 3
				// $img3 = $_FILES['img3']['name'];
				// if (($img3 == '')||is_null($img2)) {
				// 	$img3 = $data['spesies']['gambar'];
				// }
				// else{
				// 	$ekstensi = $_FILES['img3']['type'];
				// 	switch ($ekstensi) {
				// 		case 'image/jpeg':
				// 			$eks = 'jpeg';
				// 		break;
				// 		case 'image/jpg':
				// 			$eks = 'jpg';
				// 		break;
				// 		case 'image/png':
				// 			$eks ='png';
				// 		break;
				// 		default:
				// 		break; }
				// 	$nmfile = "photo_".time().'_'.rand(1000,9999);
				// 	$config['allowed_types'] = 'jpg|png|jpeg';
				// 	$config['file_name'] = $nmfile;
				// 	$this->load->library('upload',$config);
		  //           $this->upload->initialize($config);
				// 	$this->upload->do_upload('img3'); 
				// 	$config['file_name'] = $nmfile;
		  //           $img3 = $config['file_name'].".".$eks;
				// }
				$level = $this->session->userdata('level');
				$insertdata = array('nama_latin' => $nama_latin,
									'nama_umum' => $nama_umum, 
									'habitat' => $habitat,
									'karakteristik' => $karakteristik,
									'keterangan' => $keterangan,
									'stat' => $stat,
									'gambar' => $img,
									'id_genus' => $id_genus,
									'id_kategori' => $id_kategori);
				$this->Mymodel->updateData($where,$insertdata,$table);
				// udate Log
				$table = 'tb_log';
				$kegiatan = 'Mengubah Data Spesies ' .$nama_latin. '('.$nama_umum.')';
				$id_institusi = $this->session->userdata('id');
				$tanggal = date('Y-m-d');
	            $waktu = date('H:i:s');
	            $dataLog = array('kegiatan' => $kegiatan, 
	        					'id_institusi' => $id_institusi,
	        					'tanggal' => $tanggal,
	        					'waktu' => $waktu,);
	            $this->Mymodel->inputData($table, $dataLog);
	            $this->session->set_flashdata('pesan','Data Berhasil Di Update !');
				redirect(site_url('TugasAkhir/LihatData/spesies'));
			break;

			default:
				echo "belum buat";
			break;
		}
	}
	public function delete($master,$id){
		switch ($master) {
			case 'institusi':
				$table = 'tb_institusi';
				$where = array('id_institusi' =>$id);
				$this->Mymodel->hapusData($where,$table);
				redirect(site_url("TugasAkhir/LihatData/institusi"));
			break;
			case 'class':
				$table = 'tb_class';
				$where = array('id_class' =>$id);
				$data['tabel'] = $this->Mymodel->editData($table,$where)->row_array();
				$tableLog = 'tb_log';
			    $kegiatan = 'Menghapus Class ' .$data['tabel']['nama_latin']. '('.$data['tabel']['nama_umum'].')';
			    $id_institusi = $this->session->userdata('id');
			    $tanggal = date('Y-m-d');
			    $waktu = date('H:i:s');
			    $dataLog = array('kegiatan' => $kegiatan, 
			    				'id_institusi' => $id_institusi,
			        			'tanggal' => $tanggal,
			        			'waktu' => $waktu,);
			    $this->Mymodel->inputData($tableLog,$dataLog);	
				$this->Mymodel->hapusData($where,$table);
				redirect(site_url("TugasAkhir/LihatData/class"));
			break;
			case 'ordo':
				$table = 'tb_ordo';
				$where = array('id_ordo' =>$id);
				$data['tabel'] = $this->Mymodel->editData($table,$where)->row_array();
				$tableLog = 'tb_log';
			    $kegiatan = 'Menghapus Ordo ' .$data['tabel']['nama_latin']. '('.$data['tabel']['nama_umum'].')';
			    $id_institusi = $this->session->userdata('id');
			    $tanggal = date('Y-m-d');
			    $waktu = date('H:i:s');
			    $dataLog = array('kegiatan' => $kegiatan, 
			    				'id_institusi' => $id_institusi,
			        			'tanggal' => $tanggal,
			        			'waktu' => $waktu,);
			    $this->Mymodel->inputData($tableLog,$dataLog);
				$this->Mymodel->hapusData($where,$table);
				redirect(site_url("TugasAkhir/LihatData/ordo"));
			break;
			case 'famili':
				$table = 'tb_famili';
				$where = array('id_famili' =>$id);
				$data['tabel'] = $this->Mymodel->editData($table,$where)->row_array();
				$tableLog = 'tb_log';
			    $kegiatan = 'Menghapus Famili ' .$data['tabel']['nama_latin']. '('.$data['tabel']['nama_umum'].')';
			    $id_institusi = $this->session->userdata('id');
			    $tanggal = date('Y-m-d');
			    $waktu = date('H:i:s');
			    $dataLog = array('kegiatan' => $kegiatan, 
			    				'id_institusi' => $id_institusi,
			        			'tanggal' => $tanggal,
			        			'waktu' => $waktu,);
			    $this->Mymodel->inputData($tableLog,$dataLog);
				$this->Mymodel->hapusData($where,$table);
				redirect(site_url("TugasAkhir/LihatData/famili"));
			break;
			case 'genus':
				$table = 'tb_genus';
				$where = array('id_genus' =>$id);
				$data['tabel'] = $this->Mymodel->editData($table,$where)->row_array();
				$tableLog = 'tb_log';
			    $kegiatan = 'Menghapus Genus ' .$data['tabel']['nama_latin']. '('.$data['tabel']['nama_umum'].')';
			    $id_institusi = $this->session->userdata('id');
			    $tanggal = date('Y-m-d');
			    $waktu = date('H:i:s');
			    $dataLog = array('kegiatan' => $kegiatan, 
			    				'id_institusi' => $id_institusi,
			        			'tanggal' => $tanggal,
			        			'waktu' => $waktu,);
			    $this->Mymodel->inputData($tableLog,$dataLog);
				$this->Mymodel->hapusData($where,$table);
				redirect(site_url("TugasAkhir/LihatData/genus"));
			break;
			case 'spesies':
				// udate Log
				$table = 'tb_spesies';
				$where = array('id_spesies' =>$id);

				$table2 = 'tb_log';
				$data['spesies'] = $this->Mymodel->editData($table,$where)->row_array();
				$kegiatan = 'Menghapus Data Spesies '.$data['spesies']['nama_latin']. ' ('.$data['spesies']['nama_umum'].')';
				$id_institusi = $this->session->userdata('id');
				$tanggal = date('Y-m-d');
	            $waktu = date('H:i:s');
	            $dataLog = array('kegiatan' => $kegiatan, 
	        					'id_institusi' => $id_institusi,
	        					'tanggal' => $tanggal,
	        					'waktu' => $waktu,);
	            $this->Mymodel->inputData($table2, $dataLog);
				
				//delete
				$this->Mymodel->hapusData($where,$table);
				redirect(site_url("TugasAkhir/LihatData/spesies"));
			break;
			
			default:
				# code...
			break;
		}
	}
	public function deltmp($master, $id){
		switch ($master) {
			case 'class': $table = 'tmp_class'; break;
			case 'ordo': $table = 'tmp_ordo'; break;
			case 'famili': $table = 'tmp_famili'; break;
			case 'genus': $table = 'tmp_genus'; break;
			case 'spesies': $table = 'tmp_spesies'; break;
			
			default:				
			break;
		}
		$where = array('id' => $id );
		$this->Mymodel->hapusData($where,$table);
		redirect(site_url("TugasAkhir/verifikasi/lsm"));
	}

	public function aksiverif($master,$id){
		$where = array('id' => $id );
		switch ($master) {
			case 'class':
				$table_tmp ='tmp_class';
				$table = 'tb_class';
				$table_log = 'tb_log';
				$data['tmp'] = $this->Mymodel->editData($table_tmp, $where)->row_array();
				$insert = array(
						'nama_latin' => $data['tmp']['latin'],
						'nama_umum' => $data['tmp']['umum'], 
						'ciri_ciri' => $data['tmp']['ciri'],
						'keterangan' => $data['tmp']['ket'],
						'nama_latin' => $data['tmp']['latin'], 
						'gambar' => $data['tmp']['gmb']
 				);
 				$tanggal = date('Y-m-d');
	            $waktu = date('H:i:s');
	            $kegiatan = 'Menambah Data Class '.$data['tmp']['latin']. ' ('.$data['tmp']['umum'].')';
	            $dataLog = array('kegiatan' => $kegiatan, 
	        					'id_institusi' => $data['tmp']['id_institusi'],
	        					'tanggal' => $tanggal,
	        					'waktu' => $waktu
	        	);
	        	$this->Mymodel->inputData($table, $insert);
	        	$this->Mymodel->inputData($table_log, $dataLog);
	        	$this->Mymodel->hapusData($where,$table_tmp);
	            $this->session->set_flashdata('pesan','Data Telah Berhasil Diverfikasi !');
	        	redirect(site_url("TugasAkhir/LihatData/class"));
			break;
			case 'ordo':
				$table_tmp ='tmp_ordo';
				$table = 'tb_ordo';
				$table_log = 'tb_log';
				$data['tmp'] = $this->Mymodel->editData($table_tmp, $where)->row_array();
				$insert = array(
						'nama_latin' => $data['tmp']['latin'],
						'nama_umum' => $data['tmp']['umum'], 
						'ciri_ciri' => $data['tmp']['ciri'],
						'keterangan' => $data['tmp']['ket'],
						'nama_latin' => $data['tmp']['latin'], 
						'gambar' => $data['tmp']['gmb'],
						'id_class' => $data['tmp']['id_class']
 				);
 				$tanggal = date('Y-m-d');
	            $waktu = date('H:i:s');
	            $kegiatan = 'Menambah Data Ordo'.$data['tmp']['latin']. ' ('.$data['tmp']['umum'].')';
	            $dataLog = array('kegiatan' => $kegiatan, 
	        					'id_institusi' => $data['tmp']['id_institusi'],
	        					'tanggal' => $tanggal,
	        					'waktu' => $waktu
	        	);
	        	$this->Mymodel->inputData($table, $insert);
	        	$this->Mymodel->inputData($table_log, $dataLog);
	        	$this->Mymodel->hapusData($where,$table_tmp);
	            $this->session->set_flashdata('pesan','Data Telah Berhasil Diverfikasi !');
	        	redirect(site_url("TugasAkhir/LihatData/ordo"));
			break;
			case 'famili':
				$table_tmp ='tmp_famili';
				$table = 'tb_famili';
				$table_log = 'tb_log';
				$data['tmp'] = $this->Mymodel->editData($table_tmp, $where)->row_array();
				$insert = array(
						'nama_latin' => $data['tmp']['latin'],
						'nama_umum' => $data['tmp']['umum'], 
						'ciri_ciri' => $data['tmp']['ciri'],
						'keterangan' => $data['tmp']['ket'],
						'nama_latin' => $data['tmp']['latin'], 
						'gambar' => $data['tmp']['gmb'],
						'id_ordo' => $data['tmp']['id_ordo']
 				);
 				$tanggal = date('Y-m-d');
	            $waktu = date('H:i:s');
	            $kegiatan = 'Menambah Data Famili'.$data['tmp']['latin']. ' ('.$data['tmp']['umum'].')';
	            $dataLog = array('kegiatan' => $kegiatan, 
	        					'id_institusi' => $data['tmp']['id_institusi'],
	        					'tanggal' => $tanggal,
	        					'waktu' => $waktu
	        	);
	        	$this->Mymodel->inputData($table, $insert);
	        	$this->Mymodel->inputData($table_log, $dataLog);
	        	$this->Mymodel->hapusData($where,$table_tmp);
	            $this->session->set_flashdata('pesan','Data Telah Berhasil Diverfikasi !');
	        	redirect(site_url("TugasAkhir/LihatData/famili"));
			break;
			case 'genus':
				$table_tmp ='tmp_genus';
				$table = 'tb_genus';
				$table_log = 'tb_log';
				$data['tmp'] = $this->Mymodel->editData($table_tmp, $where)->row_array();
				$insert = array(
						'nama_latin' => $data['tmp']['latin'],
						'nama_umum' => $data['tmp']['umum'], 
						'ciri_ciri' => $data['tmp']['ciri'],
						'keterangan' => $data['tmp']['ket'],
						'nama_latin' => $data['tmp']['latin'], 
						'gambar' => $data['tmp']['gmb'],
						'id_famili' => $data['tmp']['id_famili']
 				);
 				$tanggal = date('Y-m-d');
	            $waktu = date('H:i:s');
	            $kegiatan = 'Menambah Data Famili'.$data['tmp']['latin']. ' ('.$data['tmp']['umum'].')';
	            $dataLog = array('kegiatan' => $kegiatan, 
	        					'id_institusi' => $data['tmp']['id_institusi'],
	        					'tanggal' => $tanggal,
	        					'waktu' => $waktu
	        	);
	        	$this->Mymodel->inputData($table, $insert);
	        	$this->Mymodel->inputData($table_log, $dataLog);
	        	$this->Mymodel->hapusData($where,$table_tmp);
	            $this->session->set_flashdata('pesan','Data Telah Berhasil Diverfikasi !');
	        	redirect(site_url("TugasAkhir/LihatData/genus"));
			break;
			case 'spesies':
				$table_tmp ='tmp_spesies';
				$table = 'tb_spesies';
				$table_log = 'tb_log';
				$data['tmp'] = $this->Mymodel->editData($table_tmp, $where)->row_array();
				$insert = array(
						'nama_latin' => $data['tmp']['latin'],
						'nama_umum' => $data['tmp']['umum'], 
						'habitat' => $data['tmp']['habitat'],
						'karakteristik' => $data['tmp']['karakteristik'],
						'keterangan' => $data['tmp']['ket'],
						'stat' => $data['tmp']['stat'],
						'nama_latin' => $data['tmp']['latin'], 
						'gambar' => $data['tmp']['gmb'],
						'id_genus' => $data['tmp']['id_genus'],
						'id_kategori' => $data['tmp']['id_kategori']
 				);
 				$tanggal = date('Y-m-d');
	            $waktu = date('H:i:s');
	            $kegiatan = 'Menambah Data Spesies'.$data['tmp']['latin']. ' ('.$data['tmp']['umum'].')';
	            $dataLog = array('kegiatan' => $kegiatan, 
	        					'id_institusi' => $data['tmp']['id_institusi'],
	        					'tanggal' => $tanggal,
	        					'waktu' => $waktu
	        	);
	        	$this->Mymodel->inputData($table, $insert);
	        	$this->Mymodel->inputData($table_log, $dataLog);
	        	$this->Mymodel->hapusData($where,$table_tmp);
	            $this->session->set_flashdata('pesan','Data Telah Berhasil Diverfikasi !');
	        	redirect(site_url("TugasAkhir/LihatData/spesies"));
			break;
			default:
				echo "Belum Dibuat";
				break;
		}
	}

	public function komentar($switch, $id)
	{
		switch ($switch) {
			case 'spesies':
				$komentar = $this->input->post('komentar');
				$where = array('id' => $id );
				$data = array('komentar' => $komentar);
				$table = 'tmp_spesies';
				$this->Mymodel->updateData($where,$data,$table);
				$this->session->set_flashdata('pesan', 'Komentar Telah Ditambahkan');
				redirect(site_url("TugasAkhir/tableverif/spesies"));
			break;
			
			default:
			break;
		}
	}
}

?>