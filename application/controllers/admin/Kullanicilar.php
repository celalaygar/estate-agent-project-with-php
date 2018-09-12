	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kullanicilar extends CI_Controller {
	function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->library("session");
		$this->load->database(); //database ye erişmemizi sağlar
		$this->load->model("Database_Model"); //model tanımlama
		if(!$this->session->userdata("logged_in")){
			redirect(base_url()."admin/login");
		}
	}
		
	public function index()
	{
		$query=$this->db->get("kullanicilar");
		$data["veri"]=$query->result();
		$data["menu"]="kullanicilar";
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/kullanicilar_listesi');
		$this->load->view('admin/_footer');
		 
	}
	public function Mesajlar()
	{
		echo "mesaj sayfası";
		
	}
	public function Ekle()
	{
		$data["menu"]='kullanicilar';
		$this->load->view('admin/kullanici_ekle',$data);
	}
	public function eklekaydet()
	{
		$data=array(
		'adsoyad' => $this->input->post('adsoyad'),
		'email' => $this->input->post('email'),
		'sifre' => $this->input->post('sifre'),
		'yetki' => $this->input->post('yetki'),
		'durum' => $this->input->post('durum'),
		);
		$this->Database_Model->insert_data("kullanicilar",$data);
		$this->session->set_flashdata("sonuc","Kayıt ekleme işlemi başarıyla gerçekleştirildi.");
		redirect(base_url()."admin/kullanicilar");
	}
	public function Edit($id)
	{
		$data["menu"]='kullanicilar';
		$sorgu=$this->db->query("SELECT * FROM kullanicilar WHERE id=$id");
		$data["veri"]=$sorgu->result();
		if($data["veri"] !=NULL ){
			$this->load->view('admin/kullanici_duzenle',$data);
		}else{
			$this->load->view('admin/sayfayok');
		}
		/*
		$sorgu=$this->db->query("SELECT * FROM kullanicilar WHERE id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/kullanici_duzenle',$data);
		*/
	}
	public function Guncellekaydet($id)
	{
		$data=array(
		'adsoyad' => $this->input->post('adsoyad'),
		'email' => $this->input->post('email'),
		'sifre' => $this->input->post('sifre'),
		'yetki' => $this->input->post('yetki'),
		'durum' => $this->input->post('durum'),
		);
		$this->Database_Model->update_data("kullanicilar",$data,$id);
		$this->session->set_flashdata("sonuc","Kayıt güncelleme işlemi başarıyla gerçekleştirildi.");
		redirect(base_url()."admin/kullanicilar");
	}
	public function Delete($id)
	{
		$this->db->query("DELETE FROM kullanicilar WHERE id=$id");
		$this->session->set_flashdata("sonuc","Kayıt silme işlemi başarıyla gerçekleştirildi.");
		redirect(base_url()."admin/kullanicilar");
		
	}
	public function Goster($id)
	{	
		$data["menu"]='kullanicilar';
		$sorgu=$this->db->query("SELECT * FROM kullanicilar WHERE id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/kullanici_goster',$data);
		
	}


}
