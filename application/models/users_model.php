<?php  
  
class Users_model extends CI_Model {  
  
function test_main() {  
  
       echo "This is model function";
  
    }  

function insert_data($data){
    $this->db->insert("users", $data);

}

  
function delete_data($ID)
{
	$this->db->where("ID", $ID);
	$this->db->delete("users");
	
}

}  
?>  