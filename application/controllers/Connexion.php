<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connexion extends CI_Controller
{

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
        $onglet['title']="Login utilisateur";
        $this->load->view('layout/entete',$onglet);
         $this->load->view('login/login');
        $this->load->view('layout/pied');
    }
    public function inscription()
    {
        $onglet['title']="inscription utilisateur";
        $this->load->view('layout/entete',$onglet);
         $this->load->view('login/vue_enreg');
        //$this->load->view('layout/pied');
    }
    public function success()
    {
       $resultat['info_client']="Votre compte client a été créé avec succès, veuillez vous connectez
       avec vitre pseudo que vous avez choisi ainsi que son mot de passe";
         $resultat['title']="noms_client connexion";
         $this->load->view('layout/entete',$resultat);
         $this->load->view('login/login',$resultat);
        $this->load->view('layout/pied');
    }
    public function inscrire_utilisateur()
    {
         //Ajout du compte utilisateur
        $code=$this->input->post('code_utilisateur');
        $code2=$this->input->post('code_confirmation');
        $role_utilisateur='Client';
        $date_creation=date('Y-m-d');
        if($code==$code2){
            $data=array();
            $data['pseudo_utilisateur']=$this->input->post('pseudo_utilisateur');
            $data['code_utilisateur']=$this->input->post('code_utilisateur');
            $data['role_utilisateur']=$role_utilisateur;
            $data['date_creation']=$date_creation;
            $this->Auth_Modele->add_user($data);
        }
        else{
            $data_erreur['erreur']="Les mots de passe doivent etre conforme";
            $this->load->view('login/vue_enreg',$data_erreur);
        }
        $donnees=array();
        $donnees['noms_complet']=$this->input->post('noms_complet');
        $donnees['telephone']=$this->input->post('telephone');
        $donnees['email']=$this->input->post('email');
        $donnees['adresse']=$this->input->post('adresse');
        $this->Salle_Modele->add_client($donnees);
        redirect('connexion/success');
    }
    
    public function login()
    {
        //Récuperation des valeurs du formulaire
        $user_pseudo = $this->input->post('pseudo_utilisateur');
        $user_code = $this->input->post('code_utilisateur');

        $login_user = $this->Auth_Modele->login_user($user_pseudo, $user_code);
        if ($login_user) {

            foreach ($login_user as $ligne)
                //$session=array('user_pseudo'=>$row->user_pseudo,'user_code'=>$row->user_code);
                $this->session->set_userdata('pseudo_utilisateur', $ligne->pseudo_utilisateur);
            $this->session->set_userdata('role_utilisateur', $ligne->role_utilisateur);
            //si le role correspond à l'admin
            if (($this->session->userdata('role_utilisateur') == "Webmaster")) {
                redirect('Webmaster/index');
            } elseif (($this->session->userdata('role_utilisateur') == "Client")){
                redirect('Client/index');
            } elseif (($this->session->userdata('role_utilisateur') == "Comptable")){
                redirect('Comptable/index');
            } elseif (($this->session->userdata('role_utilisateur') == "Gerant")){
            redirect('Gerant/index');
            }
            else{
                $data['info'] ='Oops, Monsieur '.$this->session->set_userdata('role_utilisateur').
                'vous etes '. $this->session->set_userdata('role_utilisateur'). "
                Vous n'êtes plus autorisez à acceder au système.
                Votre compte utilisateur a été bloqué momentanement, veuillez contacter les admins systeme";
                $this->load->view('layout/Connexion', $data);
            }
        } else {
            $data['info'] = "Coordonnées d'identification non valide";
            $this->load->view('layout/Connexion', $data);
            //$this->session->set_flashdata('info','Nom et mot de passe utilisateur incorrect');
            //redirect('login_users');
        }
    }
    function deconnexion()
    {
        $this->session->sess_destroy();
        redirect('connexion/index');
    }
}
