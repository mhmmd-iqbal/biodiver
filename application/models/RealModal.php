<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RealModal extends CI_Model{
	
	public function getData($table){
		return $this->db->get($table);
	}
	public function getDataWhere($table,$where){
		return $this->db->get_where($table,$where);
	}
	public function getOrder($table, $field, $order){
		$this->db->order_by($field, $order);
		return $this->db->get($table);
	}
	public function inputData($table,$data){
		$this->db->insert($table,$data);
	}
	public function updateData($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function hapusData($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function insertimport($data, $table)
    {
        $this->db->insert_batch($table, $data);
        return $this->db->insert_id();
    }

	
	public function join4($tabel1, $tabel2, $tabel3, $tabel4, $data1, $data2, $data3)
	{
		$this->db->select('*');
		$this->db->from($tabel1);
		$this->db->join($tabel2, $data1);
		$this->db->join($tabel3, $data2);
		$this->db->join($tabel4, $data3);
		return $this->db->get();
	}


	public function pencarian($table,$like){
		$this->db->like($like);
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
}
?>