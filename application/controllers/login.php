<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library("session");
		$this->load->database();
		$this->load->model("Admin_Model");
		$this->load->model("Database_Model"); //model tanımlama
		/*if(!$this->session->userdata("logged_in")){
			redirect(base_url()."home/giris");
		}*/
	}
	
	public function index()
	{
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		$query=$this->db->get("evler");
		$data["yeniler"]=$query->result();
		$query=$this->db->get("evler");
		$data["encok"]=$query->result();
		$query=$this->db->query("SELECT * FROM kategoriler WHERE id IN (SELECT kategori_id FROM evler)");
		$data["kategoriler"]=$query->result();
		
		$data["menu"]='home';
		$this->load->view('_header',$data);
		$this->load->view('_slider');
		$this->load->view('_sidebar');
		$this->load->view('_main_content');
		$this->load->view('_footer');
		 
	}
	
	public function giris()
	{
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		$query=$this->db->query("SELECT * FROM kategoriler WHERE id IN (SELECT kategori_id FROM evler)");
		$data["kategoriler"]=$query->result();
		
		$data["menu"]='giris';
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('giris');
		$this->load->view('_footer');
	}
	public function login_ol()
	{
		$email=$this->input->post("email",TRUE);
		$sifre=$this->input->post("sifre",TRUE);
		$result=$this->Admin_Model->anasayfalogin($email,$sifre);
		if($result){
			$oturum_dizi=array(
			'id' => $result[0]->id,
			'adsoyad' => $result[0]->adsoyad,
			'email' => $result[0]->email,
			'yetki' => $result[0]->yetki
			);
			
			$this->session->set_userdata("logged_in",$oturum_dizi);
			

			redirect(base_url()."home");
			
		}else{
			$this->session->set_flashdata("login_hata","Geçersiz email yada şifre");
			$this->load->view("home");
			//redirect(base_url()."admin/kullanicilar");
		}
	}
}
