<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gerant extends CI_Controller {

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
        if(($this->session->userdata('role_utilisateur') != "Gerant")){
            redirect('connexion/');
        }
        $this->load->library('grocery_CRUD');
    }
    public function _menu_gerant($output = null)
    {
        $this->load->view('layout/entete_user',(array)$output);
        $this->load->view('gerant/menu_gerant',(array)$output);
        $this->load->view('layout/pied_user',(array)$output);
    }
    public function gerant()
    {
        $output = $this->grocery_crud->render();
        $this->_menu_gerant($output);
    }
    public function index()
    {
        $this->_menu_gerant((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
    }
    public function lister_reservations()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('reservation');
        $crud->set_subject('réservation  salle');
        $crud->set_relation('salle_id','salle_fete','nom_salle');
        $crud->display_as('nom_salle','salle fete');
        $crud->set_relation('client_id','client','noms_complet');
        $crud->display_as('noms_complet','client');
        $output = $crud->render();
        $this->_menu_gerant($output);
    }
    public function enregistrer_paiement()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('paiement');
        $crud->set_subject('paiement reservation');
        $crud->set_relation('client_id','client','noms_complet');
        $crud->display_as('noms_complet','client');
        $crud->set_relation('reservation_id','reservation','ref_demande');
        $crud->display_as('ref_demande','reservation');
        $output = $crud->render();
        $this->_menu_gerant($output);
    }
}
