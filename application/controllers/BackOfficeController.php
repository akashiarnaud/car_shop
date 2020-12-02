<?php
/**
 * Created by PhpStorm.
 * User: Toky
 * Date: 04/07/2018
 * Time: 21:29
 */
class BackOfficeController extends CI_Controller{
    public function index()
    {
        $this->load->helper('url');
        //$this->load->view('garage/index');
        $this->load->library('Layout');
        $this->load->model('UtilisateurModel');
        $data = array();
        $data['listeUser'] = $this->UtilisateurModel->getAllUtilisateur();
        $this->layout->view('garage/GestionUser',$data);
    }
    public function ajoutCar(){
        $this->load->helper('url');
        $this->load->library('Layout');
        $this->load->model('VoituresModel');
        $this->load->model('CategoriesModel');


        $data = array();
        $data['lc'] = $this->CategoriesModel->getAllCate();




        $this->layout->view('garage/postNewCar',$data);
    }
    public function deleteUser(){
        $this->load->model('UtilisateurModel');
        $nom = $prix = $this->input->post("user");
        $stock = $this->UtilisateurModel->deleteUser($nom);

        $this->layout->view('garage/GestionUser',$stock);
    }
    public function ajouterCarBut(){
        $this->load->helper('url');
        $this->load->library('Layout');
        $this->load->model('CategoriesModel');
        $this->load->model('VoituresModel');
        $nom = $this->input->post("nom");
        $image = $this->input->post("image");
        $prix = $this->input->post("prix");
        $cat = $this->input->post("cat");
        $idCat =$this->CategoriesModel->getCategorieById($cat);
        $annee = $this->input->post("annee");

        $description = $this->input->post("description");

        $stock = $this->VoituresModel->wawa($nom,$image,$cat,$prix,$annee,$description);
        $this->layout->view('garage/postNewCar',$stock);
    }
    public function supprimerUser(){
        $this->load->helper('url');
        $this->load->library('Layout');
        $this->load->model('UtilisateurModel');
        $idUser = $this->input->post("idUser");
        $this->UtilisateurModel->deleteUtilisateur($idUser);
        redirect('BackOfficeController');
    }
    public function showDashBoard(){
        $this->load->helper('url');
        $this->load->library('Layout');
        $this->load->model('VoituresModel');
        $this->load->model('UtilisateurModel');
        $this->load->model('CategoriesModel');
        $this->load->model('ReservationModel');
        $data = array();
        $data['lv'] = $this->VoituresModel->getAllVoitures1();
        $data['lu'] = $this->UtilisateurModel->getAllUtilisateur();
        $data['lr'] = $this->ReservationModel->getAllReservation();
        $data['lr1'] = $this->ReservationModel->getReservationEtat();
        $this->layout->view('garage/DashBoard',$data);
    }

}
