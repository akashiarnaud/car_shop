<?php
    class VoituresModel extends CI_Model
    {
        public function getAllVoitures(){
            $query=$this->db->query('select * from Voitures limit 8');
            $result=$query->result_array();
			return $result;
        }
        public function getAllVoitures1(){
            $query=$this->db->query('select * from Voitures');
            $result=$query->result_array();
            return $result;
        }

        public function getVoituresByID($id){
            $query=$this->db->query('select * from Voitures where idVoiture='.$id.'');
			$result=$query->row_array();
			return $result;
        }

        public function getVoituresByAnnee($anneemin,$anneemax){
            $query=$this->db->query('select * from Voitures where annee>='.$anneemin.' and annee<='.$anneemax.'');
			$result=$query->result_array();
			return $result;
        }
		
		 public function getVoituresByCate($idCate){
            $query=$this->db->query('select * from Voitures where NomCategorie='.$idCate);
			$result=$query->result_array();
			return $result;
        }

        public function insertVoitures($nom,$image,$idcategorie,$prix,$annee,$description){

            $query=$this->db->query('insert into Voitures values(null,'.$nom.','.$image.','.$idcategorie.','.$prix.','.$annee.','.$description.')');
        }
        public function wawa($nom,$image,$idcategorie,$prix,$annee,$description){
            $this->NomVoiture=$nom;
            $this->ImageVoiture=$image;
            $this->idCategorie=$idcategorie;
            $this->prix=$prix;
            $this->annee=$annee;
            $this->description=$description;
            $this->db->insert('Voitures', $this);
        }

        public function update($id,$nom,$image,$idcategorie,$prix,$annee,$description){
            $query=$this->db->query('update Voitures set NomVoiture='.$nom.',ImageVoiture='.$image.',idCategorie='.$idcategorie.',prix='.$prix.',annee='.$annee.',description='.$description.'');
        }

        public function delete($id){
            $query=$this->db->query('delete from Voitures where idVoiture='.$id.'');
        }

    }
?>