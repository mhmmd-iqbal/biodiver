<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model{
	public function CekLogin($tabel,$where)	{
		return $this->db->get_where($tabel,$where);
	}
	public function inputData($table,$data){
		$this->db->insert($table,$data);
	}
	public function getData($table){
		return $this->db->get($table);
	}
	public function editData($table,$where){
		return $this->db->get_where($table,$where);
	}
	public function updateData($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function hapusData($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function getOrder($table, &$order, $by){
		$i = 0;
		foreach ($order as $key) {
			$this->db->order_by($order[$i],$by);
			$i++;
		}
		return $this->db->get($table);
	}
	public function getOrderWhere($table, $where, &$order, $by){
		$i = 0;
		foreach ($order as $key) {
			$this->db->order_by($order[$i],$by);
			$i++;
		}
		$this->db->where($where);
		return $this->db->get($table);
	}
	public function pencarian($table,$like,$orlike){
		$this->db->like($like);
		$i = 0;
		foreach ($orlike as $data ) {
			$this->db->or_like($orlike);
		$i++;
		}
		return $this->db->get($table);
	}
	
	public function pencarian2($table,$like){
		$i = 0;
		foreach ($like as $data ) {
			$this->db->like($like);
		$i++;
		}
		return $this->db->get($table);
	}
	public function join($from, &$table, &$join){
		$i = 0;
		foreach ($table as $data ) {
			$tabel = $table[$i];
			$relasi = $join[$i];			
			$this->db->join($tabel, $relasi);
		$i++;
		}
		return $this->db->get($from);
	}

	function jointoordo($where){
		return $this->db->query('SELECT tb_class.id_class, tb_class.nama_latin AS nm_class FROM tb_class INNER JOIN tb_ordo ON tb_class.id_class = tb_ordo.id_class WHERE tb_class.id_class ='.$where);
	}
	function jointofamili($where){
		return $this->db->query('SELECT tb_class.id_class, tb_class.nama_latin AS nm_class , tb_ordo.id_ordo, tb_ordo.nama_latin AS nm_ordo FROM (tb_class INNER JOIN tb_ordo ON tb_class.id_class = tb_ordo.id_class) INNER JOIN tb_famili ON tb_famili.id_ordo = tb_ordo.id_ordo WHERE tb_ordo.id_ordo ='.$where);
	}
	function jointogenus($where){
		return $this->db->query('SELECT tb_class.id_class, tb_class.nama_latin AS nm_class , tb_ordo.id_ordo, tb_ordo.nama_latin AS nm_ordo, tb_famili.id_famili, tb_famili.nama_latin AS nm_famili FROM ((tb_class INNER JOIN tb_ordo ON tb_class.id_class = tb_ordo.id_class) INNER JOIN tb_famili ON tb_famili.id_ordo = tb_ordo.id_ordo) INNER JOIN tb_genus ON tb_famili.id_famili = tb_genus.id_famili WHERE tb_famili.id_famili ='.$where);
	}
}
?>