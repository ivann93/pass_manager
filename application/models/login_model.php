<?php  
  
class Login_model extends CI_Model {   

        public function log_in_correctly($username, $password) {  
  
        $this->db->where('username', $username);
        $this->db->where('password', $password);  
        
        $this->db->from('users');
        $query = $this->db->get();  
  
        if ($query->num_rows() == 1)  
        {  
            return $query->result();
        } else {  
            return false;  
        }  
  
    }  


  

}  
?>  