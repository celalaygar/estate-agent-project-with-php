<?php 

class Database_Model extends CI_Model {
	
	function __construct(){
		parent::__construct();
		
	}
		

	public function insert_data($table,$data)
	{
		$this->db->insert($table,$data);
		return $this->db->insert_id();

		 
	}
	public function edit_data($table,$id){
		$sorgu=$this->db->query("SELECT * FROM $table WHERE id=$id");
		if($sorgu)
		return $sorgu;
		else
			return false;
	}
	public function update_data($table,$data,$id)
	{
		$this->db->where("id",$id); 
		$this->db->update($table,$data);
		return true;

		 
	}
	public function get_urun($id)
	{
		$sql="SELECT turu.adi as turadi, kategoriler.adi as katadi, evler.* FROM evler 
			LEFT JOIN turu ON evler.turu=turu.id
			LEFT JOIN kategoriler ON evler.kategori_id=kategoriler.id
			WHERE evler.id=$id";
			
		$query=$this->db->query($sql);
		if($query->num_rows() > 0 ){
			return $query->result();
			
		}else{
			
			return false;
			
		}
		 
	}	
	public function get_sepet_urun($id)
	{
		$sql="SELECT evler.adi as adi, evler.sfiyat as fiyat, sepet.* FROM sepet 
			LEFT JOIN evler ON sepet.urun_id=evler.id
			WHERE sepet.musteri_id=$id";
			
		$query=$this->db->query($sql);
		if($query->num_rows() > 0 ){
			return $query->result();
			
		}else{
			
			return false;
			
		}
		 
	}
	public function get_kategori($id)
	{
		$sql="SELECT turu.adi as turadi, kategoriler.adi as katadi, evler.* FROM evler 
			LEFT JOIN turu ON evler.turu=turu.id
			LEFT JOIN kategoriler ON evler.kategori_id=kategoriler.id
			WHERE evler.kategori_id=$id ";
			
		$query=$this->db->query($sql);
		if($query->num_rows() == 1 ){
			return $query->result();
			
		}else{
			
			return false;
			
		}
		 
	}
}


?>