<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TugasAkhir extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mymodel');
	}
	public function index()
	{
		$data["tglhariini"] = date('d-m-Y');
		$data["nohari"] = date('w');
		list($data["tgl"],$data["bln"], $data["thn"])=explode("-",$data["tglhariini"]);
		$data['class'] = $this->Mymodel->getData('tb_class')->num_rows();
		$data['ordo'] = $this->Mymodel->getData('tb_ordo')->num_rows();
		$data['famili'] = $this->Mymodel->getData('tb_famili')->num_rows();
		$data['genus'] = $this->Mymodel->getData('tb_genus')->num_rows();
		$data['spesies'] = $this->Mymodel->getData('tb_spesies')->num_rows();
		$data['kelangkaan'] = $this->Mymodel->getData('tb_kelangkaan')->num_rows();
		$order = array('id_class','nmu_spesies');
		$data['tbl_spesies'] = $this->Mymodel->getOrderWhere('v_spesies',array('stat'=>'DILINDUNGI'),$order,'ASC')->result_array();
		$data['level'] = $this->session->userdata('level');
		$id =  $this->session->userdata('id');
		$where = array('id_institusi' => $id );
		$data['akun'] = $this->Mymodel->editData('v_login_sistem',$where)->row_array();
		$data['menunggu'] = $this->session->flashdata('menunggu');
		$data['import_msg'] = $this->session->flashdata('import_msg');
		$this->load->view('home', $data);
	}

	public function taksonomi()
	{
		$data["tglhariini"] = date('d-m-Y');
		$data["nohari"] = date('w');
		list($data["tgl"],$data["bln"], $data["thn"])=explode("-",$data["tglhariini"]);
		$data['class'] = $this->Mymodel->getData('tb_class')->result_array();
		$data['ordo'] = $this->Mymodel->getData('tb_ordo')->result_array();
		$data['famili'] = $this->Mymodel->getData('tb_famili')->result_array();
		$data['genus'] = $this->Mymodel->getData('tb_genus')->result_array();
		$data['spesies'] = $this->Mymodel->getData('tb_spesies')->result_array();
		$this->load->view('halaman/taksonomi', $data);
	}

	public function f_lihatdata()
	{
		$data["tglhariini"] = date('d-m-Y');
		$data["nohari"] = date('w');
		list($data["tgl"],$data["bln"], $data["thn"])=explode("-",$data["tglhariini"]);
		$data['institusi'] = $this->Mymodel->getData('tb_institusi')->num_rows();
		$data['leveluser'] = $this->Mymodel->getData('tb_userlevel')->num_rows();
		$data['class'] = $this->Mymodel->getData('tb_class')->num_rows();
		$data['ordo'] = $this->Mymodel->getData('tb_ordo')->num_rows();
		$data['famili'] = $this->Mymodel->getData('tb_famili')->num_rows();
		$data['genus'] = $this->Mymodel->getData('tb_genus')->num_rows();
		$data['spesies'] = $this->Mymodel->getData('v_spesies')->num_rows();
		$data['kelangkaan'] = $this->Mymodel->getData('tb_kelangkaan')->num_rows();
		$data['level'] = $this->session->userdata('level');
		$this->load->view('halaman/lihatdata', $data);
	}
	public function LihatData($view)
	{
		$data["tglhariini"] = date('d-m-Y');
		$data["nohari"] = date('w');
		list($data["tgl"],$data["bln"], $data["thn"])=explode("-",$data["tglhariini"]);
		$data['level'] = $this->session->userdata('level');
		switch ($view) {
			case 'institusi':
				$data['pesan'] = $this->session->flashdata('pesan');
				$data['institusi'] = $this->Mymodel->getData('v_login_sistem')->result_array();
				$this->load->view('lihatdata/datainstitusi', $data);
			break;
			case 'leveluser':
				$data['leveluser'] = $this->Mymodel->getData('tb_userlevel')->result_array();
				$this->load->view('lihatdata/datauserlevel', $data);
			break;
			case 'kelangkaan':
				$data['kelangkaan'] = $this->Mymodel->getData('tb_kelangkaan')->result_array();
				$data['pesan'] = $this->session->flashdata('pesan');
				$this->load->view('lihatdata/datakategorilangka',$data);
			break;
			case 'class':
				$data['class'] = $this->Mymodel->getData('tb_class')->result_array();
				$data['pesan'] = $this->session->flashdata('pesan');
				$this->load->view('lihatdata/dataclass', $data);
			break;
			case 'ordo':
				$order = array('id_class','nama_latin');
				$data['ordo'] = $this->Mymodel->getOrder('tb_ordo',$order,'ASC')->result_array();
				$data['pesan'] = $this->session->flashdata('pesan');
				$this->load->view('lihatdata/dataordo', $data);
			break;
			case 'famili':
				$order = array('id_ordo','nama_latin');
				$data['famili'] = $this->Mymodel->getOrder('tb_famili',$order,'ASC')->result_array();
				$data['pesan'] = $this->session->flashdata('pesan');
				$this->load->view('lihatdata/datafamili',$data);
			break;
			case 'genus':
				$order = array('nama_latin');
				$data['genus'] = $this->Mymodel->getOrder('tb_genus',$order,'ASC')->result_array();
				// $data['genus'] = $this->Mymodel->getData('tb_genus')->result_array();
				$data['pesan'] = $this->session->flashdata('pesan');
				$this->load->view('lihatdata/datagenus',$data);
			break;
			case 'spesies':
				$table = 'v_spesies';
				// $data['spesies'] = $this->Mymodel->getData($table)->result_array();
				// $order = array('id_class','id_ordo','id_famili','id_genus','nm_spesies');
				$order = array('nm_spesies');
				$data['spesies'] = $this->Mymodel->getOrder($table,$order,'ASC')->result_array();
				$data['pesan'] = $this->session->flashdata('pesan');
				$this->load->view('lihatdata/dataspesies',$data);
			break;
			default:
				echo "view belum dibuat";
			break;
		}
	}

	public function LihatDataById($view,$id)
	{
		$data["tglhariini"] = date('d-m-Y');
		$data["nohari"] = date('w');
		list($data["tgl"],$data["bln"], $data["thn"])=explode("-",$data["tglhariini"]);
		$data['level'] = $this->session->userdata('level');
		
		switch ($view) {
		case 'class':
			$data['class'] = $this->Mymodel->editData('tb_class',array('id_class'=>$id))->row_array();
			$data['ordobyclass'] = $this->Mymodel->editData('tb_ordo',array('id_class'=>$id))->result_array();
			$this->load->view('lihatdata/dataclassbyid',$data);
		break;
		case 'ordo':
			$data['ordo'] = $this->Mymodel->editData('tb_ordo',array('id_ordo'=>$id))->row_array();
			$data['takson'] = $this->Mymodel->jointoordo($data['ordo']['id_class'])->row_array();
			$data['familibyordo'] = $this->Mymodel->editData('tb_famili',array('id_ordo'=>$id))->result_array();
			$this->load->view('lihatdata/dataordobyid',$data);
		break;
		case 'famili':
			$data['famili'] = $this->Mymodel->editData('tb_famili',array('id_famili'=>$id))->row_array();
			$data['takson'] = $this->Mymodel->jointofamili($data['famili']['id_ordo'])->row_array();
			$data['genusbyfamili'] = $this->Mymodel->editData('tb_genus',array('id_famili'=>$id))->result_array();
			$this->load->view('lihatdata/datafamilibyid',$data);
		break;
		case 'genus':
			$data['genus'] 	= $this->Mymodel->editData('tb_genus',array('id_genus'=>$id))->row_array();
			$data['takson'] = $this->Mymodel->jointogenus($data['genus']['id_famili'])->row_array();
			$data['spesiesbyfamili'] = $this->Mymodel->editData('tb_spesies',array('id_genus'=>$id))->result_array();
			$this->load->view('lihatdata/datagenusbyid',$data);
		break;
		case 'spesies':
			$table1 = 'v_spesies';
			$where1 = array('id_spesies' =>$id );
			$data['spesies'] = $this->Mymodel->editData($table1,$where1)->row_array();

			$id2 = $data['spesies']['id_famili'];
			$table2 = 'v_spesies';
			$where2 = array('id_famili' =>  $id2);
			$data['kerabat'] = $this->Mymodel->editData($table2,$where2)->result_array();
			$this->load->view('lihatdata/dataspesiesbyid',$data);
		break;
		default:
			echo "View Belum diBuat";
		break;
		}
	}
	public function pencarian()
	{
		$data["tglhariini"] = date('d-m-Y');
		$data["nohari"] = date('w');
		list($data["tgl"],$data["bln"], $data["thn"])=explode("-",$data["tglhariini"]);
		$this->load->view('halaman/pencarian',$data);
	}
	public function hasilPencarian()
	{
		$data["tglhariini"] = date('d-m-Y');
		$data["nohari"] = date('w');
		list($data["tgl"],$data["bln"], $data["thn"])=explode("-",$data["tglhariini"]);
		
		$cari = $this->input->post("cari");
		$data['dicari'] = $cari;
		$like = array('nama_latin' => $cari);
		$orlike = array('nama_umum' => $cari);
		$like1 = array('nm_spesies' => $cari);
		$orlike1 = array('nmu_spesies' => $cari);
		$data['CariClass'] = $this->Mymodel->pencarian('tb_class',$like,$orlike)->result_array();
		$data['JmlCariClass'] = $this->Mymodel->pencarian('tb_class',$like,$orlike)->num_rows();
		$data['CariOrdo'] = $this->Mymodel->pencarian('tb_ordo',$like, $orlike)->result_array();
		$data['JmlCariOrdo'] = $this->Mymodel->pencarian('tb_ordo',$like, $orlike)->num_rows();
		$data['CariFamili'] = $this->Mymodel->pencarian('tb_famili',$like, $orlike)->result_array();
		$data['JmlCariFamili'] = $this->Mymodel->pencarian('tb_famili',$like, $orlike)->num_rows();
		$data['CariGenus'] = $this->Mymodel->pencarian('tb_genus',$like, $orlike)->result_array();
		$data['JmlCariGenus'] = $this->Mymodel->pencarian('tb_genus',$like, $orlike)->num_rows();
		$data['CariSpesies'] = $this->Mymodel->pencarian('v_spesies',$like1, $orlike1)->result_array();
		$data['JmlCariSpesies'] = $this->Mymodel->pencarian('v_spesies',$like1, $orlike1)->num_rows();
		// echo "<pre>";
		// print_r($data['CariSpesies']);
		// echo "</pre>";
		$this->load->view('halaman/hasilpencarian',$data);
	}
	public function akun()
	{
		$data["tglhariini"] = date('d-m-Y');
		$data["nohari"] = date('w');
		list($data["tgl"],$data["bln"], $data["thn"])=explode("-",$data["tglhariini"]);
		$id =  $this->session->userdata('id');
		$where = array('id_institusi' => $id );
		$data['akun'] = $this->Mymodel->editData('v_login_sistem',$where)->row_array();
		$data['sukses'] =$this->session->flashdata('pesan_sukses');
		$data['gagal'] =$this->session->flashdata('pesan_gagal');

		$this->load->view('halaman/akun',$data);
	}
	public function editAkun($id)
	{
		$nama = $this->input->post('nama');
		$pass1 = $this->input->post('pass1');
		$pass2 = $this->input->post('pass2');
		$alamat = $this->input->post('alamat');

		if ($pass1 == $pass2) {
			if ((isset($pass1))||($pass1 !="")) {
				$where = array('id_institusi' => $id );
				$data = array(	'nama' => $nama,
								'alamat' => $alamat,
								'pass' => md5($pass1)
								);
				$table = 'tb_institusi';
				$this->Mymodel->updateData($where,$data,$table);
			}
			else{
				$where = array('id_institusi' => $id );
				$data = array(	'nama' => $nama,
								'alamat' => $alamat
								);
				$table = 'tb_institusi';
				$this->Mymodel->updateData($where,$data,$table);	
			}
			$this->session->set_flashdata('pesan_sukses', 'DATA BERHASIL DIUBAH');
			redirect(site_url('TugasAkhir/akun'));
		}
		else{
			$this->session->set_flashdata('pesan_gagal', 'DATA GAGAL DIUBAH');
			redirect(site_url('TugasAkhir/akun'));
		}
	}
	public function Laporan(){
		$data["tglhariini"] = date('d-m-Y');
		$data["nohari"] = date('w');
		list($data["tgl"],$data["bln"], $data["thn"])=explode("-",$data["tglhariini"]);
		$this->load->view('halaman/laporan',$data);
	}
	public function aksiLaporan($opsi){
		$data["tglhariini"] = date('d-m-Y');
		$data["nohari"] = date('w');
		list($data["tgl"],$data["bln"], $data["thn"])=explode("-",$data["tglhariini"]);
		$data['spesies'] = $this->Mymodel->getData('v_spesies')->result_array();
		$data['instansi'] = $this->Mymodel->getData('v_login_sistem')->result_array();
		$data['log'] = $this->Mymodel->getData('v_log','tanggal')->result_array();
		$data['class'] = $this->Mymodel->getData('tb_class')->result_array();
		switch ($opsi) {
			case '1':
				$this->load->view('halaman/aktifitas',$data);
			break;
			case '2':
				$this->load->view('halaman/spesies',$data);
			break;
			case '3':
				$this->load->view('halaman/lsm',$data);
			break;
			default:
				echo "Belum ADA";
				break;
		}
	}
	public function verifikasi($level){
		$data["tglhariini"] = date('d-m-Y');
		$data["nohari"] = date('w');
		list($data["tgl"],$data["bln"], $data["thn"])=explode("-",$data["tglhariini"]);
		$data['nminstitusi'] = $this->session->userdata('nama');
		$data['institusi'] = $this->session->userdata('id');
		$data['jmltmpclass'] = $this->Mymodel->getData('tmp_class')->num_rows();
		$data['jmltmpordo'] = $this->Mymodel->getData('tmp_ordo')->num_rows();
		$data['jmltmpfamili'] = $this->Mymodel->getData('tmp_famili')->num_rows();
		$data['jmltmpgenus'] = $this->Mymodel->getData('tmp_genus')->num_rows();
		$data['jmltmpspesies'] = $this->Mymodel->getData('tmp_spesies')->num_rows();
		$data['tmpclass'] = $this->Mymodel->getData('v_tmp_class')->result_array();
		$data['tmpordo'] = $this->Mymodel->getData('v_tmp_ordo')->result_array();
		$data['tmpfamili'] = $this->Mymodel->getData('v_tmp_famili')->result_array();
		$data['tmpgenus'] = $this->Mymodel->getData('v_tmp_genus')->result_array();
		$data['tmpspesies'] = $this->Mymodel->getData('v_tmpspesies_baru')->result_array();
		switch ($level) {
			case 'bksda':
				$this->load->view('halaman/verifikasi',$data);
			break;	
			case 'lsm':
				$this->load->view('halaman/menungguverifikasi',$data);
			break;		
			default:
			break;
		};
	}
	public function tableverif($master){
		$data["tglhariini"] = date('d-m-Y');
		$data["nohari"] = date('w');
		list($data["tgl"],$data["bln"], $data["thn"])=explode("-",$data["tglhariini"]);
		$data['nminstitusi'] = $this->session->userdata('nama');
		$data['institusi'] = $this->session->userdata('id');
		$data['tmpclass'] = $this->Mymodel->getData('v_tmp_class')->result_array();
		$data['tmpordo'] = $this->Mymodel->getData('v_tmp_ordo')->result_array();
		$data['tmpfamili'] = $this->Mymodel->getData('v_tmp_famili')->result_array();
		$data['tmpgenus'] = $this->Mymodel->getData('v_tmp_genus')->result_array();
		$data['tmpspesies'] = $this->Mymodel->getData('v_tmpspesies_baru')->result_array();
		switch ($master) {
			case 'class':
				$this->load->view('tmp/class',$data);
			break;
			case 'ordo':
				$this->load->view('tmp/ordo',$data);
				
			break;
			case 'famili':
				$this->load->view('tmp/famili',$data);
				
			break;
			case 'genus':
				$this->load->view('tmp/class',$data);
				
			break;
			case 'spesies':
				$data['pesan'] = $this->session->flashdata('pesan');
				// echo "<pre>";
				// print_r($data['tmpspesies']);
				$this->load->view('tmp/spesies',$data);
			break;

			default:
			break;
		}
	}
	public function Report($master){
		$data["tglhariini"] = date('d-m-Y');
		$data["nohari"] = date('w');
		list($data["tgl"],$data["bln"], $data["thn"])=explode("-",$data["tglhariini"]);
		$data['spesies'] = $this->Mymodel->getData('v_spesies')->result_array();
		$data['instansi'] = $this->Mymodel->getData('v_login_sistem')->result_array();
		$data['log'] = $this->Mymodel->getData('v_log','tanggal')->result_array();
		$data['class'] = $this->Mymodel->getData('tb_class')->result_array();
	    $this->load->library('pdf');
	    $this->pdf->setPaper('A4', 'landscape');
	    switch ($master) {
	    	case '1':
	    		$datefrom = $this->input->post('datefrom');
	    		$dateto = $this->input->post('dateto');
	    		// if ((is_null($datefrom))||($datefrom =='')) {$datefrom = date('Y-m-d');}
	    		// if ((is_null($dateto))||($datefrom =='')) { $dateto = date('Y-m-d');}
	    		
	    		if ($datefrom <= $dateto) {
		    		$data['date'] = array('datefrom' => $datefrom,
		    							  'dateto' => $dateto );
		    		$this->pdf->filename = "Laporan Aktifitas.pdf";
				    $this->pdf->load_view('report/Report_Aktifitas',$data);
		    		// $this->load->view('report/Report_Aktifitas',$data);		
	    		}
	    		else{
	    			echo "Format Pemilihan Tanggal Salah";
	    		}

	    	break;
	    	case '2':
			    $this->pdf->filename = "Laporan Spesies.pdf";
			    $this->pdf->load_view('report/Report_AllSpesies',$data);
	    		// $this->load->view('report/Report_AllSpesies',$data);
	    	break;
	    	case '3':
			    $this->pdf->filename = "Laporan Satwa Yang Dilindungi.pdf";
			    $this->pdf->load_view('report/Report_Spesies',$data);
	    	break;
	    	case '4':
			    $this->pdf->filename = "Laporan LSM.pdf";
			    $this->pdf->load_view('report/Report_Lsm',$data);
	    	break;
	    	default:
	    		echo "Belum Buat";
	    	break;
	    }
	}

	public function about(){
		$data["tglhariini"] = date('d-m-Y');
		$data["nohari"] = date('w');
		list($data["tgl"],$data["bln"], $data["thn"])=explode("-",$data["tglhariini"]);
		$data['nminstitusi'] = $this->session->userdata('nama');
		$data['institusi'] = $this->session->userdata('id');

		$this->load->view('halaman/about',$data);
	}

	public function cetak()
	{
		$this->load->library('pdf');
	    $this->pdf->setPaper('A4', 'landscape');
	    $this->pdf->filename = "Test Cetak.pdf";
	    $this->pdf->load_view('report/tes');
	    // $this->load->view('report/tes');
	}
	
	
}
?>
