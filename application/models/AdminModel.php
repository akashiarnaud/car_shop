<	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
class AdminModel extends CI_Model {
	public function getAllAdmin(){
		$sql='SELECT * from Administrateurs';
		$query = $this->db->query($sql); 
		 $row = $query->row_array();
	}
	public function getOneAdmin($id){
		$sql='SELECT * from Administrateurs where idAdmin='$id;
		$query = $this->db->query($sql); 
		 $rep = $query->row_array();
		 return $rep;
	}
	public function deleteAdmin($id){
		$sql='DELETE from Administrateurs where idAdmin='$id;
		$this->db->query($sql);  
	}
}
