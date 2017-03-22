<?php
class Event extends CI_Model{

	public function index(){
		$this->load->database();
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$query = $this->db->get('email_log');
		return $query->result();
	}
	public function getUserInfo(){
		$this->load->database();
		$this->db->select('username');
		$this->db->select('email');
		//$this->db->where('id', '1000');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result();
	}
	public function dealWithCreate(){
		$this->load->database();
		$data = array('username' => $this->input->post('username'),'email' => $this->input->post('email'));
		$this->db->insert('user', $data);
		return $this->db->affected_rows();
	}
}