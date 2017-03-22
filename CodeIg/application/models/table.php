<?php
class Table extends CI_Model{

	public function index(){
		$this->load->database();
		$obj = new stdClass;
		$conditionType = $this->input->get('type');
		$conditionEvent = $this->input->get('event');
		$condition['type'] =$conditionType;
		$condition['event'] =$conditionEvent;
		$condition['limit'] = $this->input->get('pageSize');
		$condition['offset'] = $this->input->get('pageIndex');
		

		$obj->total = json_decode(json_encode($this->selectOpDatabase('count(*)',$condition)),true)[0]['count(*)'];

		$obj->rows = $this->selectOpDatabase('*',$condition);
		return $obj;
	}

	public function selectOpDatabase($selector,$condition){
		$this->load->database();
		$this->db->select($selector);
		if($condition['type']!=='All'){
			$this->db->where('type',$condition['type']);
		}
		if($condition['event']!=='All'){
			$this->db->where('event',$condition['type']);
		}
		if($selector!='count(*)'){
			$this->db->limit($condition['limit'],$condition['offset']);
		}
		$this->db->from('email_log');
		$query = $this->db->get();
		//return $query->result();
		return $query->result();
	}
}