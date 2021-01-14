<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Modele extends CI_Model {
    
    public function login_user($user_pseudo,$user_code){
        //Récuperation des valeurs du formulaire
        $this->db->select('pseudo_utilisateur, code_utilisateur, role_utilisateur');
        $this->db->from('utilisateur');
        $this->db->where('pseudo_utilisateur',$user_pseudo);
        $this->db->where('code_utilisateur',$user_code);
        $this->db->limit(1);

        $query=$this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }
        else{
            //$this->session->set_flashdata('info','Nom et mot de passe utilisateur incorrect');
            //redirect('login_users');
            return false;
        }
    }
    public function add_user($data)
    {
        $this->db->insert('utilisateur',$data);
    }
}