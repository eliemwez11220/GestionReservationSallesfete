<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webmaster extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Auth_Modele');
        $this->load->library('session');
        //$this->load->library('database');
        //Test de profile admin
        if($this->session->userdata('role_utilisateur') !="Webmaster"){
            redirect('connexion/');
        }
        //Grocery CRUD
        $this->load->library('grocery_CRUD');
    }

    public function _example_output($output = null)
    {
        $this->load->view('layout/entete_user',(array)$output);
        $this->load->view('Webmaster/Menu_Admin',(array)$output);
        $this->load->view('layout/pied_user',(array)$output);
    }
    public function utilisateur()
    {
        $output = $this->grocery_crud->render();
        $this->_example_output($output);
    }
    public function index()
    {
        $this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
    }
    public function gerer_utilisateur()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('utilisateur');
        $crud->set_subject('compte utilisateur');
        $output = $crud->render();
        $this->_example_output($output);
    }
    public function gerer_salles()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('salle_fete');
        $crud->set_subject('salle de fete');
        $crud->set_relation('gerant_responsable','utilisateur','pseudo_utilisateur');
        $crud->display_as('pseudo_utilisateur','utilisateur');
        $output = $crud->render();
        $this->_example_output($output);
    }
}
