<?php
/**
 * Created by PhpStorm.
 * User: Toky
 * Date: 03/07/2018
 * Time: 20:50
 */
    class UtilisateurModel extends CI_model{

            public function getAllUtilisateur()
            {
                $sql = "select * from Utilisateur";
                $query = $this->db->query($sql);
                $retour = $query->result_array();
                return $retour;
            }
            public function insertUtilisateur($login,$password,$argent,$contact,$mail){
                $sql = "insert into Utilisateur values(null,'.$login.','.$password.','.$argent.','.$contact.','.$mail.')";
                $this->db->query($sql);
            }
            public function updateUtilisateur($idUser,$login,$password,$argent,$contact,$mail){
                $sql = "update Utilisateur set login='.$login.',password='.$password.',argent='.$argent.',contact='.$contact.',mail='.$mail.' where idUser='.$idUser.'";
                $this->db->query($sql);
            }

            public function deleteUtilisateur($nom){
                    $this->db->where('idUser', $nom);
                    $this->db->delete('Utilisateur');

            }
            public function checkLogin($login,$pass){
                $sql = "select count(*) as nb Utilisateur where $login='.$login.' and $pass='$.pass'";
                $query = $this->db->query($sql);
                $ret = $query->row_array();
                return $ret;
            }
    }
?>