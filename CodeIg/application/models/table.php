<?php
class Table extends CI_Model{

	public function index(){
		$this->load->database();
		
		$condition1 = $this->input->get('type');
		$condition2 = $this->input->get('module');
		if($condition1>-1){
			$this->db->where('type', $condition1);
		}
		if($condition2!='all'){
			$this->db->where('module', $condition2);
		}
		$query = $this->db->get('email');
		return $query->result();
	}
}