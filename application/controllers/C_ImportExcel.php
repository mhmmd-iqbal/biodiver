<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ImportExcel extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('RealModal');
		$this->load->library('PHPExcel2/Excel');
		// $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
		// $this->load->model('mymodel');
	}
		
	public function UploadExcel($master)
	{
		switch ($master) {
			case 'class':
				if(isset($_FILES["file"]["name"]))
				{
					$path = $_FILES["file"]["tmp_name"];
					$object = PHPExcel_IOFactory::load($path);
					foreach($object->getWorksheetIterator() as $worksheet)
					{
						$highestRow = $worksheet->getHighestRow();
						$highestColumn = $worksheet->getHighestColumn();
						for($row=2; $row<=$highestRow; $row++)
						{   
							$nama_latin = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
							$nama_umum= $worksheet->getCellByColumnAndRow(1, $row)->getValue();
							$ciri_ciri= $worksheet->getCellByColumnAndRow(2, $row)->getValue();
							$keterangan= $worksheet->getCellByColumnAndRow(3, $row)->getValue();
							if ((!is_null($nama_latin)) AND (!is_null($nama_umum)) AND (!is_null($ciri_ciri)) AND (!is_null($keterangan))) {
								$data[] = array(
								'nama_latin'	=>	$nama_latin,
								'nama_umum' 	=>	$nama_umum,
								'ciri_ciri' 	=>	$ciri_ciri,
								'keterangan'	=> 	$keterangan,
								'gambar'		=> 	"NOIMAGE.jpg"
								);
							}
							
						}
					}
				$this->RealModal->insertimport($data, 'tb_class');
				}    
			break;

			case 'ordo':
				if(isset($_FILES["file"]["name"]))
				{
					$path = $_FILES["file"]["tmp_name"];
					$object = PHPExcel_IOFactory::load($path);
					foreach($object->getWorksheetIterator() as $worksheet)
					{
						$highestRow = $worksheet->getHighestRow();
						$highestColumn = $worksheet->getHighestColumn();
						for($row=2; $row<=$highestRow; $row++)
						{   
							$nama_latin = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
							$nama_umum = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
							$id_class = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
							$ciri_ciri = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
							$keterangan= $worksheet->getCellByColumnAndRow(4, $row)->getValue();

							if ((!is_null($nama_latin)) AND (!is_null($nama_umum)) AND (!is_null($ciri_ciri)) AND (!is_null($keterangan)) AND (!is_null($id_class))) {
								$data[] = array(
								'nama_latin'	=>	$nama_latin,
								'nama_umum' 	=>	$nama_umum,
								'id_class'		=> 	$id_class,
								'ciri_ciri' 	=>	$ciri_ciri,
								'keterangan'	=> 	$keterangan,
								'gambar'		=> 	"NOIMAGE.jpg"
								);
							}
							
						}
					}
				$this->RealModal->insertimport($data, 'tb_ordo');
				}
			break;

			case 'famili':
				if(isset($_FILES["file"]["name"]))
				{
					$path = $_FILES["file"]["tmp_name"];
					$object = PHPExcel_IOFactory::load($path);
					foreach($object->getWorksheetIterator() as $worksheet)
					{
						$highestRow = $worksheet->getHighestRow();
						$highestColumn = $worksheet->getHighestColumn();
						for($row=2; $row<=$highestRow; $row++)
						{   
							$nama_latin = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
							$nama_umum = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
							$id_ordo = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
							$ciri_ciri = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
							$keterangan= $worksheet->getCellByColumnAndRow(4, $row)->getValue();

							if ((!is_null($nama_latin)) AND (!is_null($nama_umum)) AND (!is_null($ciri_ciri)) AND (!is_null($keterangan)) AND (!is_null($id_ordo))) {
								$data[] = array(
								'nama_latin'	=>	$nama_latin,
								'nama_umum' 	=>	$nama_umum,
								'id_ordo'		=> 	$id_ordo,
								'ciri_ciri' 	=>	$ciri_ciri,
								'keterangan'	=> 	$keterangan,
								'gambar'		=> 	"NOIMAGE.jpg"
								);
							}
							
						}
					}
				$this->RealModal->insertimport($data, 'tb_famili');
				}
			break;
			
			case 'genus':
				if(isset($_FILES["file"]["name"]))
				{
					$path = $_FILES["file"]["tmp_name"];
					$object = PHPExcel_IOFactory::load($path);
					foreach($object->getWorksheetIterator() as $worksheet)
					{
						$highestRow = $worksheet->getHighestRow();
						$highestColumn = $worksheet->getHighestColumn();
						for($row=2; $row<=$highestRow; $row++)
						{   
							$nama_latin = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
							$nama_umum = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
							$id_famili = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
							$ciri_ciri = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
							$keterangan= $worksheet->getCellByColumnAndRow(4, $row)->getValue();

							if ((!is_null($nama_latin)) AND (!is_null($nama_umum)) AND (!is_null($ciri_ciri)) AND (!is_null($keterangan)) AND (!is_null($id_famili))) {
								$data[] = array(
								'nama_latin'	=>	$nama_latin,
								'nama_umum' 	=>	$nama_umum,
								'id_famili'		=> 	$id_famili,
								'ciri_ciri' 	=>	$ciri_ciri,
								'keterangan'	=> 	$keterangan,
								'gambar'		=> 	"NOIMAGE.jpg"
								);
							}
							
						}
					}
				$this->RealModal->insertimport($data, 'tb_genus');
				}
			break;

			case 'spesies':
				if(isset($_FILES["file"]["name"]))
				{
					$path = $_FILES["file"]["tmp_name"];
					$object = PHPExcel_IOFactory::load($path);
					foreach($object->getWorksheetIterator() as $worksheet)
					{
						$highestRow = $worksheet->getHighestRow();
						$highestColumn = $worksheet->getHighestColumn();
						for($row=2; $row<=$highestRow; $row++)
						{   
							$nama_latin = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
							$nama_umum = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
							$id_genus = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
							$id_kategori = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
							$habitat= $worksheet->getCellByColumnAndRow(4, $row)->getValue();
							$karakteristik = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
							$stat =$worksheet->getCellByColumnAndRow(6, $row)->getValue();

							if ((!is_null($nama_latin)) AND (!is_null($nama_umum)) AND (!is_null($ciri_ciri)) AND (!is_null($keterangan)) AND (!is_null($id_famili))) {
								$data[] = array(
								'nama_latin'	=>	$nama_latin,
								'nama_umum' 	=>	$nama_umum,
								'id_genus'		=> 	$id_genus,
								'id_kategori'	=> 	$id_kategori,
								'habitat'		=> 	$habitat,
								'karakteristik' 	=>	$karakteristik,
								'stat'	=> 	$stat,
								'gambar'		=> 	"NOIMAGE.jpg",
								'gambar2'		=> 	"NOIMAGE.jpg",
								'gambar3'		=> 	"NOIMAGE.jpg"
								);
							}
							
						}
					}
				$this->RealModal->insertimport($data, 'tb_spesies');
				}
			break;

			default:
				echo "belum buat";
			break;
		}
		$this->session->set_flashdata('import_msg','Data Berhasil ditambahkan');
		redirect(site_url());
	}	

	public function DownloadForm($master)
	{
		switch ($master) {
			case 'class':
				$this->load->view('form/formclass');		
			break;
			case 'ordo':
				$this->load->view('form/formordo');		
			break;
			case 'famili':
				$this->load->view('form/formfamili');		
			break;
			case 'genus':
				$this->load->view('form/formgenus');		
			break;
			case 'spesies':
				$this->load->view('form/formspesies');		
			break;
			default:
				echo "belum buat";
			break;
		}
	}
	public function CodeCheck($master)
	{
		switch ($master) {
			case 'classCode':
				$data['class'] = $this->RealModal->getData('tb_class')->result_array();
				$this->load->view('form/classCode', $data);	
			break;
			case 'ordoCode':
				$data['ordo'] = $this->RealModal->getData('tb_ordo')->result_array();
				$this->load->view('form/ordoCode', $data);	
			break;
			case 'familiCode':
				$data['famili'] = $this->RealModal->getData('tb_famili')->result_array();
				$this->load->view('form/familiCode', $data);	
			break;
			case 'genusCode':
				$data['genus'] = $this->RealModal->getData('tb_genus')->result_array();
				$this->load->view('form/genusCode', $data);	
			break;
			case 'kategoriCode':
				$data['kategori'] = $this->RealModal->getData('tb_kelangkaan')->result_array();
				$this->load->view('form/kategoriCode', $data);	
			break;
			default:
				echo "belum buat";
			break;
		}
	}
}
?>