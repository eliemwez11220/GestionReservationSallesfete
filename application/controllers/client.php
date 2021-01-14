<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Auth_Modele');
        $this->load->model('Salle_Modele');
        $this->load->library('session');
        //$this->load->library('database');
        //Test de profile admin
        if(($this->session->userdata('role_utilisateur') != "Client")){
            redirect('connexion/');
        }
        //Grocery CRUD
        $this->load->library('grocery_CRUD');
    }
    public function index()
    {
        $resultat['salle']=$this->Salle_Modele->lister_salles();
        $this->load->view('client/menu_client',$resultat);
        $this->load->view('layout/pied',$resultat);
    }
    //reference ref produit auto
    function demande_id(){
        $al = '0123456789';
        return substr(str_shuffle(str_repeat($al, 10)), 0, 10);
    }
    public function enregistrer_demande()
    {
       $data=array();
       $data['ref_demande']=$this->demande_id();
       $data['date_emission']=date('Y-m-d').
       $data['ville']=$this->input->post('ville');
       $data['province']=$this->input->post('province');
       $data['date_debut']=$this->input->post('date_debut');
        $data['date_fin']=$this->input->post('date_fin');
        $data['client_id']=$this->input->post('client_id');
       $data['salle_id']=$this->input->post('salle_id');

       $this->Salle_Modele->add_reservation($data);
       redirect('client/success');
    }
    public function success()
    {
        $data['info']='Votre demande a été envoyée avec succès, patienter pendant qu\'elle est en cours de traitement !';
        $this->load->view('client/menu_client',$data);
    }
}
