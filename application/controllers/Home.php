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
			redirect(base_url());
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
		
		$data["altmenu"]="";
		$data["menu"]='home';
		$this->load->view('_header',$data);
		$this->load->view('_slider');
		$this->load->view('_sidebar');
		$this->load->view('_main_content');
		$this->load->view('_footer');
		 
	}	
	public function sepeteekle($id)
	{	
		//$tutar=($this->input->post('adet')*$this->input->post('fiyat'));
		$data=array(
		'adet'       => $this->input->post('adet'),
		'urun_id'    =>$id,
		'musteri_id' =>$this->session->logged['id'],
		//'adi' => $this->input->post('adi'),
		//'fiyat' => $this->input->post('fiyat'),
		//'tutar'=>$tutar
		);
		
		$this->Database_Model->insert_data("sepet",$data);
		$this->session->set_flashdata("sonuc","Urun sepete eklendi.");
		redirect(base_url()."home/sepet_listesi");
	}
	public function sepet_listesi()
	{
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		$query=$this->db->query("SELECT * FROM kategoriler WHERE id IN (SELECT kategori_id FROM evler)");
		$data["kategoriler"]=$query->result();
		
		//$query=$this->db->query("SELECT * FROM sepet WHERE musteri_id =".$this->session->logged['id']);
		$result=$this->Database_Model->get_sepet_urun($this->session->logged['id']);
		$data["urunler"]=$result;
		
		$data["altmenu"]="";
		$data["menu"]='home';
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('sepet_listesi');
		$this->load->view('_footer');
	}
	public function sepetten_sil($id){
		$this->db->query("DELETE FROM sepet where id=$id");
		
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM kategoriler WHERE id IN (SELECT kategori_id FROM evler)");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM sepet WHERE id =".$this->session->logged['id']);
		$data["urunler"]=$query->result();
		
		
		$this->session->set_flashdata("sonuc","Urun sepetten silindi.");
		redirect(base_url()."home/sepet_listesi");
		/*
		$data["altmenu"]="";
		$data["menu"]='home';
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('sepet_listesi');
		$this->load->view('_footer');*/
	}	
	public function sepet_odeme()
	{
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		$query=$this->db->query("SELECT * FROM kategoriler WHERE id IN (SELECT kategori_id FROM evler)");
		$data["kategoriler"]=$query->result();
		
		$result=$this->Database_Model->get_sepet_urun($this->session->logged['id']);
		$data["urunler"]=$result;
		
		$query=$this->db->query("SELECT * FROM musteriler WHERE id=".$this->session->logged['id']);
		$data["musteri"]=$query->result();
		
		$data["altmenu"]="";
		$data["menu"]='home';
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('sepet_odeme');
		$this->load->view('_footer');
		
	}
	public function siparisi_tamamla(){
		$banka_onay=1;
		
		if($banka_onay==1){
			$data=array(
			'musteri_id' => $this->session->logged['id'],
			'tutar'      => $this->input->post('tutar'),
			'adsoyad'    => $this->input->post('adsoyad'),
			'il'         => $this->input->post('il'),
			'adres'      => $this->input->post('adres'),
			'odemesekli' =>'kredi kartı',
			'odemedurumu'=>'odendi'
			);
			
			$siparisid=$this->Database_Model->insert_data("siparis",$data);			
			$urunler=$this->Database_Model->get_sepet_urun($this->session->logged['id']);
			
			foreach( $urunler as $rs){
				$query=$this->db->query("SELECT * FROM musteriler WHERE id=".$this->session->logged['id']);
				$query=$this->db->query("INSERT INTO siparis_urunler (musteri_id,siparis_id,urun_id,fiyat,adet) 
				VALUES(".$this->session->logged['id'].",".$siparisid.",".$rs->urun_id.",".$rs->fiyat.",".$rs->adet.")");
			}
			
			$query=$this->db->query("DELETE FROM sepet WHERE musteri_id=".$this->session->logged['id']);
			$this->session->set_flashdata("sonuc","Sipariş tamamlanmıştır. ");
			redirect(base_url()."home/sepet_listesi");
		}else{
			
			$this->session->set_flashdata("sonuc","Odeme bilgilerinizde problem var.");
			redirect(base_url()."home/sepet_odeme");
		}
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		$data["kategoriler"]=$query->result();
		
		
		
		
		$data["altmenu"]="";
		$data["menu"]='home';
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('sepet_odeme');
		$this->load->view('_footer');
		
	}
	public function hakkimizda()
	{
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		$query=$this->db->get("evler");
		$data["yeniler"]=$query->result();
		
		
		$query=$this->db->query("SELECT * FROM kategoriler WHERE id IN (SELECT kategori_id FROM evler)");
		$data["kategoriler"]=$query->result();
		$data["altmenu"]="";
		$data["menu"]='hakkimizda';
		$this->load->view('_header',$data);
		$this->load->view('_slider');
		$this->load->view('_sidebar');
		$this->load->view('hakkimizda');
		$this->load->view('_footer');
	}
	public function iletisim()
	{
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		$query=$this->db->get("evler");
		$data["yeniler"]=$query->result();
		
		
		$query=$this->db->query("SELECT * FROM kategoriler WHERE id IN (SELECT kategori_id FROM evler)");
		$data["kategoriler"]=$query->result();
		
		$data["altmenu"]="";
		$data["menu"]='iletisim';
		
		$this->load->view('_header',$data);
		$this->load->view('_slider');
		$this->load->view('_sidebar');
		$this->load->view('iletisim');
		$this->load->view('_footer');
	}
	public function login()
	{
		$this->load->view('admin/login_formu');
	}
	public function sayfayok()
	{
		
		$query=$this->db->query("SELECT * FROM kategoriler WHERE id IN (SELECT kategori_id FROM evler)");
		$data["kategoriler"]=$query->result();
		
		$data["altmenu"]="";
		$data["menu"]='home';
		
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('sayfayok');
		$this->load->view('_footer');
	}
	public function ev_detay($id)
	{
		$result=$this->Database_Model->get_urun($id);
		if($result){
			$data["veri"]=$result;
			$sorgu=$this->db->query("SELECT * FROM evler_resim WHERE ev_id=$id");
			$data["veriler"]=$sorgu->result();
		
		$query=$this->db->query("SELECT * FROM kategoriler WHERE id IN (SELECT kategori_id FROM evler)");
			$data["kategoriler"]=$query->result();
			
			$query=$this->db->get("evler");
			$data["yeniler"]=$query->result();
			
			$data["altmenu"]="";
			$data["menu"]='detay';
			
			$this->load->view('_header',$data);
			$this->load->view('_sidebar');
			$this->load->view('ev_detay');
			$this->load->view('_footer');
		}else{
			redirect(base_url()."home/sayfayok");
		}	
	}
	public function bize_yazin()
	{	
	
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM kategoriler WHERE id IN (SELECT kategori_id FROM evler)");
		$data["kategoriler"]=$query->result();
		
		$data["altmenu"]="";
		$data["menu"]='bize_yazin';
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('bize_yazin');
		$this->load->view('_footer');
	}	
	public function mesaj_ekle()
	{	
		$data=array(
		'adsoyad' => $this->input->post('adsoyad'),
		'email' => $this->input->post('email'),
		'tel' => $this->input->post('tel'),
		'konu' => $this->input->post('konu'),
		'mesaj' => $this->input->post('mesaj'),
		);
		$this->Database_Model->insert_data("mesajlar",$data);

		$adsoyad=$this->input->post('adsoyad');
		$email=$this->input->post('email');
		
		//email ayarlarını veri tabanından okuma işlemi
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		
		$config=array(
		//'protocol'=>'smtp',
		'smtp_host' => $data["veri"][0]->smtpserver,
		'smtp_port' => $data["veri"][0]->smtpport,
		'smtp_user'=>$data["veri"][0]->smtpemail,
		'smtp_pass'=>$data["veri"][0]->password,
		'mailtype' =>'html',
		'charset'=>'utf-8',
		'wordwrap'=>TRUE
		);
		$mesaj="Değerli".$adsoyad."<br/>Göndermiş olduğunuz email alınmıştır.";
		$mesaj.="===============================================<br/>";
		$mesaj.="Gönderdiğiniz mesaj aşağıdaki gibidir.";
		$mesaj.=$this->input->post('mesaj');
		
		$this->load->library("email",$config);
		
		$this->email->set_newline("\r\n");
		$this->email->from($data["veri"][0]->smtpemail,'ccccc');
		$this->email->to("$email");
		$this->email->subject($data["veri"][0]->name."Form mesajı alınmıştır.");
		$this->email->message($mesaj);
		
		if($this->email->send()){
			
			$this->session->set_flashdata("email_sent","Email başarı ile gönderilmiştir.");
			
			redirect(base_url()."home/bize_yazin");
		}else{
			$this->session->set_flashdata("email_sent","Email gönderme işleminde hata oluşmuştur..");
			
			show_error($this->email->print_debugger());  //ayrıntılı hata dökümü için gönderiliyor.
		}
		
		$this->session->set_flashdata("sonuc","Mesajınız başarıyla göderlmiştir. En kısa sürede sizinle iletişime geçilecektir.");
		redirect(base_url()."home/bize_yazin");
	}
	public function kategori($id,$adi)
	{
		$data["kategori_adi"]=$adi;
		$sorgu=$this->db->query("SELECT * FROM evler WHERE kategori_id=$id");
		$data["veri"]=$sorgu->result();
		
		$kategorisorgu=$this->db->query("SELECT * FROM kategoriler WHERE adi LIKE '$adi'");
		$data["kategori_adi_sonuc"]=$kategorisorgu->result();
		if($data["veri"] && $data["kategori_adi_sonuc"] ){
			
			$query=$this->db->query("SELECT * FROM kategoriler WHERE id IN (SELECT kategori_id FROM evler)");
			$data["kategoriler"]=$query->result();  //kategoriler tablosundan adi cekılecek
			
			$data["altmenu"]=$adi;
			$data["menu"]='kategoriler';
			$this->load->view('_header',$data);
			$this->load->view('_sidebar');
			$this->load->view('kategori');
			$this->load->view('_footer');
		}else{
			redirect(base_url()."home/sayfayok");
		}
		 
	}
	public function uye_kayit()
	{
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		$query=$this->db->query("SELECT * FROM kategoriler WHERE id IN (SELECT kategori_id FROM evler)");
		$data["kategoriler"]=$query->result();
		
		$data["altmenu"]="";
		$data["menu"]='giris';
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('uye_kayit');
		$this->load->view('_footer');
	}
	public function uyeol()
	{
		$data=array(
		'adsoyad' => $this->input->post('adsoyad'),
		'email' => $this->input->post('email'),
		'sifre' => $this->input->post('sifre'),
		'telefon' => $this->input->post('telefon'),
		'yetki' => 1,
		'durum' => $this->input->post('durum'),
		);
		$this->Database_Model->insert_data("musteriler",$data);
		$this->session->set_flashdata("sonuc","Kayıt ekleme işlemi başarıyla gerçekleştirildi.");
		redirect(base_url()."home/uye_kayit");
		
	}
	public function login_ol()
	{
		$email=$this->input->post("email",TRUE);
		$sifre=$this->input->post("sifre",TRUE);
		
		$result=$this->Admin_Model->analogin($email,$sifre);
		if($result){
			$oturum_dizi=array(
			'id' => $result[0]->id,
			'adsoyad' => $result[0]->adsoyad,
			'email' => $result[0]->email,
			'yetki' => $result[0]->yetki
			);
			$this->session->set_userdata("logged",$oturum_dizi);
			redirect(base_url()."home");
			
		}else{
			$this->session->set_flashdata("login_hata","Geçersiz email yada şifre");
			//$this->load->view("home");
			redirect(base_url()."home");
		}
	}
	public function log_out(){
		$this->session->unset_userdata("logged");
		$this->session->sess_destroy();
		redirect(base_url());		
		
	}
	public function musteri_goster($id){
		if($this->session->logged["id"]==$id){
		$sql="SELECT * FROM musteriler WHERE id=$id";
		
		$sorgu=$this->db->query($sql);
		$data["musteri"]=$sorgu->result();

		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		$query=$this->db->query("SELECT * FROM kategoriler WHERE id IN (SELECT kategori_id FROM evler)");
		$data["kategoriler"]=$query->result();
		
		$data["altmenu"]="";
		$data["menu"]='home';
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('musteri_goster');
		$this->load->view('_footer');
		}else{
			redirect(base_url()."home/sayfayok");
		}
	}	
	public function musteri_duzenle($id){
		$data["altmenu"]="";
		$data["menu"]='home';
		if($this->session->logged["id"]==$id){
			$sql="SELECT * FROM musteriler WHERE id=$id ";
			$sorgu=$this->db->query($sql);
			$data["musteri"]=$sorgu->result();

			$query=$this->db->get("ayarlar");
			$data["veri"]=$query->result();
			$query=$this->db->query("SELECT * FROM kategoriler WHERE id IN (SELECT kategori_id FROM evler)");
			$data["kategoriler"]=$query->result();
			
			$this->load->view('_header',$data);
			$this->load->view('_sidebar');
			$this->load->view('musteri_duzenle');
			$this->load->view('_footer');
		}else{
			redirect(base_url()."home/sayfayok");
		}
	}
	public function guncellekayit($id,$email)
	{
		$data=array(
		'adsoyad' => $this->input->post('adsoyad'),
		'email' => $this->input->post('email'),
		'telefon' => $this->input->post('telefon'),
		'sifre' => $this->input->post('sifre'),
		'durum' => $this->input->post('durum'),
		);
		$this->Database_Model->update_data("musteriler",$data,$id);
		$this->session->set_flashdata("sonuc","Kayıt güncelleme işlemi başarıyla gerçekleştirildi.");
		redirect(base_url()."home/musteri_goster/".$id."/".$email);
	}
	
}
