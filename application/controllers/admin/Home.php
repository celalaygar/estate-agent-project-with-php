<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library("session");
		$this->load->database();
		$this->load->model("Database_Model"); //model tanımlama
		if(!$this->session->userdata("logged_in")){
			redirect(base_url()."admin/login");
		}
	}
	
	public function index()
	{
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		$data["menu"]='home';
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/_main_content');
		$this->load->view('admin/_footer');
		 
	}
	public function hakkimizda()
	{
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();

		$data["menu"]='hakkimda';
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/hakkimizda_ekle');
		$this->load->view('admin/_footer');
		 
	}
	public function hakkimizda_guncelle($id){
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		$data=array(
		'hakkimizda'=>$this->input->post('hakkimizda')
		);
		$this->Database_Model->update_data("ayarlar",$data,$id);
		$this->session->set_flashdata("sonuc","Hakkmizda ekleme işlemi başarıyla gerçekleştirildi.");
		redirect(base_url()."admin/home/hakkimizda");
		/*$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/hakkimizda_ekle');
		$this->load->view('admin/_footer');*/
	}	
	public function iletisim()
	{
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		
		$data["menu"]='iletisim';
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar',$data);
		$this->load->view('admin/iletisim_ekle');
		$this->load->view('admin/_footer');
		 
	}	
	public function iletisim_guncelle($id){
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		$data=array(
		'iletisim'=>$this->input->post('iletisim')
		);
		$this->Database_Model->update_data("ayarlar",$data,$id);
		$this->session->set_flashdata("sonuc","İletişim ekleme işlemi başarıyla gerçekleştirildi.");		
		redirect(base_url()."admin/home/iletisim");
		/*$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/hakkimizda_ekle');
		$this->load->view('admin/_footer');*/
	}	
	public function anaayarlar(){
		
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		
		$data["menu"]='anaayarlar';
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/anaayarlar');
		$this->load->view('admin/_footer');
	}
	public function anaayar_guncelle($id)
	{
		
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		$data=array(
		'adi'         =>$this->input->post('adi'),
		'keywords'    =>$this->input->post('keywords'),
		'kisaaciklama'=>$this->input->post('kisaaciklama'),
		'smtpserver' =>$this->input->post('smtpserver'),
		'smtpport'   =>$this->input->post('smtpport'),
		'smtpemail'  =>$this->input->post('smtpemail'),
		'password'    =>$this->input->post('password'),
		'email'       =>$this->input->post('email'),
		);
		$this->Database_Model->update_data("ayarlar",$data,$id);
		$this->session->set_flashdata("sonuc","İletişim ekleme işlemi başarıyla gerçekleştirildi.");		
		redirect(base_url()."admin/home/anaayarlar");
	}
	public function login()
	{
		$this->load->view('admin/login_formu');
	}
	public function musteri_listesi()
	{
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		$query=$this->db->get("musteriler");
		$data["musteri_listesi"]=$query->result();
		
		$data["menu"]='musteriler';
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/musteri_listesi');
		$this->load->view('admin/_footer');
	}
	public function musteri_delete($id){
		
		$this->db->query("DELETE FROM musteriler WHERE id=$id");
		$this->db->query("DELETE FROM sepet WHERE musteri_id=$id");
		$this->db->query("DELETE FROM siparis WHERE musteri_id=$id");
		$this->db->query("DELETE FROM siparis_urunler WHERE musteri_id=$id");
		$this->session->set_flashdata("sonuc","Kayıt silme işlemi başarıyla gerçekleştirildi.");
		redirect(base_url()."admin/home/musteri_listesi");
	}
	public function musteri_edit($id){
		
		$data["menu"]='musteriler';
		$sorgu=$this->db->query("SELECT * FROM musteriler WHERE id=$id");
		$data["veri"]=$sorgu->result();
		if($data["veri"] !=NULL ){
			$this->load->view('admin/musteri_duzenle',$data);
		}else{
			$this->load->view('admin/sayfayok');
		}
	}
	public function musteriler_guncellekaydet($id){
		
		$data=array(
		'adsoyad' => $this->input->post('adsoyad'),
		'email'   => $this->input->post('email'),
		'sifre'   => $this->input->post('sifre'),
		'telefon' => $this->input->post('telefon'),
		'adres'   => $this->input->post('adres'),
		'il'	  => $this->input->post('il'),
		'durum'   => $this->input->post('durum'),
		);
		$this->Database_Model->update_data("musteriler",$data,$id);
		$this->session->set_flashdata("sonuc","Kayıt güncelleme işlemi başarıyla gerçekleştirildi.");
		redirect(base_url()."admin/home/musteri_listesi");
	}
	public function musteri_ekle(){
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		
		$data["menu"]='musteriler';
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/musteri_ekle');
		$this->load->view('admin/_footer');
		
	}
	public function musteriler_insert(){
		$data=array(		
		'adsoyad' => $this->input->post('adsoyad'),
		'email'   => $this->input->post('email'),
		'sifre'   => $this->input->post('sifre'),
		'telefon' => $this->input->post('telefon'),
		'adres'   => $this->input->post('adres'),
		'il' 	  => $this->input->post('il'),
		'durum'   => $this->input->post('durum'),
		);
		$this->Database_Model->insert_data("musteriler",$data);
		$this->session->set_flashdata("sonuc","Kayıt ekleme işlemi başarıyla gerçekleştirildi.");
		redirect(base_url()."admin/home/musteri_listesi");
		
	}
	public function mesaj_listesi(){
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		$query=$this->db->get("mesajlar");
		$data["mesaj_listesi"]=$query->result();
		
		$data["menu"]='mesajlar';
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/mesaj_listesi');
		$this->load->view('admin/_footer');
	}
	public function mesaj_goster($id){
		$sorgu=$this->db->query("SELECT * FROM mesajlar WHERE id=$id");
		$data["mesaj_icerik"]=$sorgu->result();
		
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		$data["menu"]='mesajlar';
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/mesaj_goster');
		$this->load->view('admin/_footer');
	}
	public function mesaj_delete($id){
		$this->db->query("DELETE FROM mesajlar WHERE id=$id");
		$this->session->set_flashdata("sonuc","Mesajınz  başarıyla silinmistir.");
		redirect(base_url()."admin/home/mesaj_listesi");
	}
}
