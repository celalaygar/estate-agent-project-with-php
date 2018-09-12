<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model("Admin_Model");
		$this->load->database();
	}
		

	public function index()
	{
		$this->load->view('admin/login_formu');
		 
	}
	public function login_ol()
	{
		$email=$this->input->post("email",TRUE);
		$sifre=$this->input->post("sifre",TRUE);
		$result=$this->Admin_Model->login($email,$sifre);
		if($result){
			$oturum_dizi=array(
			'id' => $result[0]->id,
			'adsoyad' => $result[0]->adsoyad,
			'email' => $result[0]->email,
			'yetki' => $result[0]->yetki
			);
			
			$this->session->set_userdata("logged_in",$oturum_dizi);
			

			redirect(base_url()."admin/home");
			
		}else{
			$this->session->set_flashdata("login_hata","Geçersiz email yada şifre");
			$this->load->view("admin/login_formu");
			//redirect(base_url()."admin/kullanicilar");
		}
	}
	public function logout(){
		$this->session->unset_userdata("logged_in");
		$this->session->sess_destroy();
		redirect(base_url()."admin/login");


		
		
		
	}
}
