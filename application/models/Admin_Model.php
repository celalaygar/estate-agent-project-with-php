<?php 

class Admin_Model extends CI_Model {
	
	function __construct(){
		parent::__construct();
		
	}
	
	public function Login($email,$sifre)
	{
		
		$this->db->select(" * ");
		$this->db->from("kullanicilar");
		$this->db->where("email",$email);
		$this->db->where("sifre",$sifre);
		$this->db->limit(1);
		
		$query=$this->db->get();
		if($query->num_rows() == 1 ){
			return $query->result();
			
		}else{
			
			return false;
			
		}
		 
	}
	public function analogin($email,$sifre)
	{
		
		$this->db->select(" * ");
		$this->db->from("musteriler");
		$this->db->where("email",$email);
		$this->db->where("sifre",$sifre);
		$this->db->limit(1);
		
		$query=$this->db->get();
		if($query->num_rows() == 1 ){
			return $query->result();
			
		}else{
			
			return false;
			
		}
		 
	}
}


?>