	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
class CategoriesModel extends CI_Model {
	public function getAllCate(){
		$sql='SELECT * from Categories';
		$query = $this->db->query($sql); 
		 $row = $query->result_array();
		 return $row;
	}
	/*public function getOneCate($id){
		$sql='SELECT * from Categories where idCategorie='.$id;
		$query = $this->db->query($sql); 
		 $rep = $query->row_array();
		 return $rep;
	}*/
	public function getCategorieById($nom){
	    $sql="select * from Categories where NomCate='".$nom."'";
	    $query = $this->db->query($sql);
        $rep = $query->row_array();
        return $rep;

    }
}