<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comptable extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Auth_Modele');
        $this->load->model('Assurance_Modele');
        $this->load->library('session');
        //$this->load->library('database');
        //Test de profile admin
        if(($this->session->userdata('role_utilisateur') != "Comptable")){
            redirect('connexion/');
        }
        $this->load->library('grocery_CRUD');
    }
    public function _menu_comptable($output = null)
    {
        $this->load->view('layout/entete_user',(array)$output);
        $this->load->view('comptable/menu_comptable',(array)$output);
        $this->load->view('layout/pied_user',(array)$output);
    }
    public function candidat()
    {
        $output = $this->grocery_crud->render();
        $this->_menu_comptable($output);
    }
    public function index()
    {
        $this->_menu_comptable((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
    }
    public function lister_paiements()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('paiement');
        $crud->set_subject('paiement');
        $crud->set_relation('souscripteur_id','souscripteur','noms_complet');
        $crud->display_as('noms_complet','souscripteur');
        $output = $crud->render();
        $this->_menu_comptable($output);
    }
    
}