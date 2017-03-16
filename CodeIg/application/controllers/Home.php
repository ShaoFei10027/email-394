<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('table');
		$this->table->index();
		$this->load->view('table');

	}
	public function getres()
	{
		$this->load->model('table');
		
		header('Content-Type: application/json;charset=utf-8', true, 200);
		echo json_encode($this->table->index());
		// var_dump($this->table->tableData);
		//return $this->table->tableData;
	}
}
