<?php
    class Fetch_mod extends CI_Model
    {
          function getAllRecords($limit, $offset)
            {
                $this->db->limit($limit, $offset);
                //$this->load->database();
                $q=$this->db->get("users");
                if($q->num_rows()>0)
                {
                    return $q->result();
                }

                return $q->result();
                //return array();
            }

             function getAllRecordsById($id)
            {
                $this->load->database();
                $this->db->where('id', $id);
                $q=$this->db->get("users");
                if($q->num_rows()>0)
                {
                    return $q->result();
                }

                return array();
            }

             function getAllUsers()
            {
                
                $this->load->database();
                $this->db->select('*');
                $q=$this->db->get("users");
                if($q->num_rows()>0)
                {
                    return $q->result();
                }

                return $q->result();
            }

            function count_users()
            {
                return $this->db->count_all('users');
            }

            //  function get_user_update($ID)
            // {
            //     $this->db->select('*');
            //     $this->db->from('users');
            //     $this->db->where('ID', $ID);
            //     $q=$this->db->get();
            //     if($q->num_rows()>0)
            //     {
            //         return $q->result();
            //     }

            //     return array();
            // }

             public function get_user_update($ID) {

                $this->db->select('*');
                $this->db->from('users');
                $this->db->where('ID', $ID);
                $query = $this->db->get();
                if($query->num_rows()>0)
                {
                    return $query->result();
                }else{

                return $query->result();
                }


            }

            public function update($user, $ID)
            {
                $this->db->where('ID', $ID);
                $this->db->update('users', $user);
            }
      
    }
?>