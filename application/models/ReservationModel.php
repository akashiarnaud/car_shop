<?php
    class ReservationModel extends CI_model{
        public function getAllReservation()
        {
            $sql = "select * from Reservation where etat='0'";
            $query = $this->db->query($sql);
            $retour = $query->result_array();
            return $retour;
        }
        public function getReservationEtat(){
            $sql = "select * from Reservation where etat='1'";
            $query = $this->db->query($sql);
            $retour = $query->result_array();
        }
        public function insertReservation($idUser,$idVoiture,$etat){
            $sql = "insert into Utilisateur values(null,'.$idUser.','.$idVoiture.','.$etat.')";
            $this->db->query($sql);
        }
        public function updateReservation($idReserv,$idUser,$idVoiture,$etat){
            $sql = "update Utilisateur set idUser='.$idUser.', idVoiture='.$idVoiture.' , etat='.$etat.' where idReserv='.$idReserv.'";
            $this->db->query($sql);
        }

    }

?>