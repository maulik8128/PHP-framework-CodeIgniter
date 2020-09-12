<?php  


class Project_model extends CI_Model{


    public function get_projects(){


        $query = $this->db->get('projects');

        return $query->result();

    }

}





























?>