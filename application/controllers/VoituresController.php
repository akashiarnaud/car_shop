<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VoituresController extends CI_Controller {
  public function index(){
	  $this->load->helper('url');
	   $this->load->model('VoituresModel');
	   
	   $listeVoiture=$this->VoituresModel->getAllVoitures();
        $Cate=$this->CategoriesModel->getAllCate();
	    $data = array();
		$data['listeVoiture']= $listeVoiture;
		$data['listeCate']= $Cate;


        $this->load->view('index', $data);
  }
  public function getVoiturebyId($id){
	  $this->load->model('VoituresModel');
	   
	   $Voiture=$this->VoituresModel->getVoituresByID($id);
	    $data = array();
		$data['Voiture']= $Voiture;

        $this->load->view('ficheproduit', $data);
  }
  public function getVoituresByCategorie($id){
	  $this->load->model('VoituresModel');
	   
	   $Voiture=$this->VoituresModel->getVoituresByCate($id);
	    $data = array();
		$data['Voiture']= $Voiture;

        $this->load->view('ficheproduit', $data);
  }
}
