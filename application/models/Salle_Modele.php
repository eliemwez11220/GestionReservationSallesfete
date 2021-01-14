<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salle_Modele extends CI_Model
{
    public function add_client($donnees)
    {
        $this->db->insert('client',$donnees);
    }
    public function add_reservation($donnees)
    {
        $this->db->insert('reservation',$donnees);
    }
    public function compter_salles()
    {
        $nombre_offres = $this->db->get('salle_fete');
        return $nombre_offres->num_rows();
    }
    public function lister_salle()
    {
        $liste_offres = $this->db->get('salle_fete');
        return $liste_offres->result();
    }
    public function lister_salles()
    {
        $this->db->select('*');
        $this->db->from('salle_fete');
        //$this->db->order_by('date_pub DESC');
        $query=$this->db->get();
        return $query->result();
    }
}
