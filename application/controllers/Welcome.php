<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Auth_Modele');
		$this->load->model('Salle_Modele');
        $this->load->library('session');
        //$this->load->library('database');
    }

	public function index()
    {
        $onglet['accueil']="";
        $this->load->view('layout/entete',$onglet);
        $this->load->view('layout/vue_ensemble');
        $this->load->view('layout/pied');
    }
	public function decouvrir_platforme()
    {
        $onglet['title']="A propos de nous";
        $this->load->view('layout/entete',$onglet);
         $this->load->view('layout/accueil_infos');
        $this->load->view('layout/pied');
    }
	public function gamme_salle()
    {
        $onglet['title']="Notre gamme des salles";
        $this->load->view('layout/entete',$onglet);
        $this->afficher_salles();
        $this->load->view('layout/pied');
    }
	public function contactez_nous()
    {
        $onglet['title']="Nos offres d'emploi";
        $this->load->view('layout/entete',$onglet);
        $this->load->view('layout/contactez_nous');
        $this->load->view('layout/pied');
    }
    public function afficher_salles()
    {
        $resultat['salle']=$this->Salle_Modele->lister_salles();
        $resultat['nombre']=$this->Salle_Modele->compter_salles();
        $this->load->view('layout/gamme_salles',$resultat);
    }
    //reference ref produit auto
    function produit_id(){
        $al = '0123456789abcdefghijklmnopqrstuvwxyzBCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle(str_repeat($al, 10)), 0, 10);
    }
}
