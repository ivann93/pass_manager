<?php
    class Pgnmdl extends CI_Model
    {
        
        function countProjects(){
            $query = $this->db->get('projects');
            return $query->num_rows();
        }

        function getProjects($limit, $offset){
            $query = $this->fb->('projects', $limit, $offset);
            return $query->result_array();
        }

    }

?>