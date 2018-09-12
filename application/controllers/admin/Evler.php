	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evler extends CI_Controller {
	function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->library("session");
		$this->load->database(); //database ye erişmemizi sağlar
		$this->load->model("Database_Model"); //model tanımlama
		$this->load->helper(array("form","url"));
		if(!$this->session->userdata("logged_in")){
			redirect(base_url()."admin/login");
		}
	}
		
	public function index()
	{
		$sql="SELECT turu.adi as turadi, kategoriler.adi as katadi, evler.* FROM evler 
			LEFT JOIN turu ON evler.turu=turu.id
			LEFT JOIN kategoriler ON evler.kategori_id=kategoriler.id
			ORDER BY evler.id";
		//$query=$this->db->get("evler");
		$query=$this->db->query($sql);
		$data["veri"]=$query->result();
		
		$data["menu"]='evler';
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/ev_listesi',$data);
		$this->load->view('admin/_footer');
		 
	}
	public function Mesajlar()
	{
		echo "mesaj sayfası";
	}
	public function Ekle()
	{
		
		$data["menu"]='evler';
		$this->load->view('admin/ev_ekle',$data);
	}
	public function eklekaydet()
	{
		$data=array(
			'adi' => $this->input->post('adi'),
			'durum' => $this->input->post('durum'),
			'kisaaciklama' => $this->input->post('kisaaciklama'),
			'uzunaciklama' => $this->input->post('uzunaciklama'),
			'keywords' => $this->input->post('keywords'),
			'sfiyat' => $this->input->post('sfiyat'),
		);
		$this->Database_Model->insert_data("evler",$data);
		$this->session->set_flashdata("sonuc","Kayıt ekleme işlemi başarıyla gerçekleştirildi.");
		redirect(base_url()."admin/evler");
	}
	public function Edit($id)
	{
		$data["menu"]='evler';
		$result=$this->Database_Model->get_urun($id);
		if($result){
			
			$sorgu=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
			$data["kategoriler"]=$sorgu->result();
			$sorgu=$this->db->query("SELECT * FROM turu ORDER BY adi");
			$data["turu"]=$sorgu->result();
			$data["veri"]=$result;
			$this->load->view('admin/ev_duzenle',$data);
			
		}else{
			$this->load->view('admin/sayfayok');
		}
			
		
		
	}
	public function Guncellekaydet($id)
	{
		$data=array(
			'adi' => $this->input->post('adi'),
			'durum' => $this->input->post('durum'),
			'kisaaciklama' => $this->input->post('kisaaciklama'),
			'kategori_id' => $this->input->post('kategori_id'),
			'turu' => $this->input->post('turu'),
			'uzunaciklama' => $this->input->post('uzunaciklama'),
			'keywords' => $this->input->post('keywords'),
			'sfiyat' => $this->input->post('sfiyat'),
		);
		$this->Database_Model->update_data("evler",$data,$id);
		$this->session->set_flashdata("sonuc","Kayıt güncelleme işlemi başarıyla gerçekleştirildi.");
		redirect(base_url()."admin/evler");
	}
	public function Delete($id)
	{
		$this->db->query("DELETE FROM evler WHERE id=$id");
		$this->db->query("DELETE FROM evler_resim WHERE ev_id=$id");
		$this->session->set_flashdata("sonuc","Kayıt silme işlemi başarıyla gerçekleştirildi.");
		redirect(base_url()."admin/evler");
		
	}
	public function Goster($id)
	{
		$data["menu"]='evler';
		$sorgu=$this->db->query("SELECT * FROM evler WHERE id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/ev_goster',$data);
		
	}	
	public function Resim_ekle($id)
	{
		$data["menu"]='evler';
		$sorgu=$this->db->query("SELECT * FROM evler WHERE id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/ev_resim_ekleme_formu',$data);
		
	}
	public function Resim_upload($id)
	{
		$data["menu"]='evler';
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata("sonuc","Resim yükleme işlemi".$error);
			redirect(base_url()."admin/evler/resim_ekle/$id");		
		}
		else
		{
			$data=array(
				'resim' => $this->upload->data('file_name')
			);
			$this->Database_Model->update_data("evler",$data,$id);
			$this->session->set_flashdata("sonuc","Resim yükleme işlemi gerçekleştirildi. ");
			redirect(base_url()."admin/evler");
		}
	}	
	public function resim_galeri_ekle($id)
	{
		$sorgu=$this->db->query("SELECT * FROM evler WHERE id=$id");
		$data["veri"]=$sorgu->result();
		
		$data["menu"]='evler';
		$sorgu=$this->db->query("SELECT * FROM evler_resim WHERE ev_id=$id");
		$data["veriler"]=$sorgu->result();
		$this->load->view('admin/ev_galeri_resim_ekleme_formu',$data);
		
	}
	public function resim_galeri_upload($id)
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$this->load->library('upload', $config);
		
		
		if ( ! $this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata("sonuc","Resim yükleme işlemi".$error);
			redirect(base_url()."admin/evler/resim_galeri_ekle/$id");		
		}
		else
		{
			
			$data=array(
				'ev_id' => $id,
				'resim' => $this->upload->data('file_name')
			);
			$this->Database_Model->insert_data("evler_resim",$data);
			$this->session->set_flashdata("sonuc","Resim yükleme işlemi gerçekleştirildi. ");
			redirect(base_url()."admin/evler/resim_galeri_ekle/$id");
		}
	}	
	public function Delete_resim($id,$resim_id)
	{
		$this->db->query("DELETE FROM evler_resim WHERE id=$resim_id");
		$this->session->set_flashdata("sonuc","Kayıt silme işlemi başarıyla gerçekleştirildi.");
		redirect(base_url()."admin/evler/resim_galeri_ekle/$id");
		
	}
}
