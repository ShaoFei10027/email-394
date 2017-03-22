<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_event extends CI_Controller {

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
		$this->load->model('event');
		$data = json_decode(json_encode($this->event->index()[0]),true);
		$data['user'] = json_decode(json_encode($this->event->getUserInfo()),true);
		$this->load->view('email_event',$data);
	}
	public function userinfo(){
		$this->load->model('event');
		header('Content-Type: application/json;charset=utf-8', true, 200);
		echo json_encode($this->event->getUserInfo());
	}
	public function create(){
		$this->load->view('create');
	}
	public function createdeal(){
		$this->load->model('event');
		$data['dealresult'] = $this->event->dealWithCreate();
		$this->load->view('create_result',$data);
	}
}