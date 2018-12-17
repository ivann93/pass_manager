<?php  
  
class Projects_model extends CI_Model {  
  
function test_main() 
{    
    echo "This is model function";
}  

function insert_data($data)
{
    $this->db->insert("projects", $data);
}

  
function delete_data($id)
{
	$this->db->where("id", $id);
	$this->db->delete("projects");
	
}

function addnewtag($tagname)
{
	$sql = "INSERT INTO `projects`( `tag`) VALUES ('$tagname') ";
	$res = $this->db->query($sql);
	$id  = $this->db->insert_id();
    return $id;
}


function addnewtagedit($projectid,$tagname)
{
	$newtag='';

    $sql = "SELECT tag FROM projects WHERE id='$projectid' ";
    $res = $this->db->query($sql);
    if($res->row()){

     $tag = $res->row()->tag;
     if($tag==''){
     	$newtag=$tagname;
     }else{
     	$newtag=$tag.','.$tagname;
     }
    }

	$sql1 = "UPDATE `projects` SET `tag`='$newtag' WHERE id='$projectid' ";
	$res1 = $this->db->query($sql1);
    return $projectid;
}

// function search_action($name){
//     $this->db->select('*');
//     $this->db->from('projects');
//     $this->db->like('name', $name);
//     $query = $this->db->get();
//     if($query->num_rows() > 0){
//         return $query->result();
//     } else {
//         return $query->result();
//     }
// }


// function dropdown_projects()
// {
//     $this->db->select('*, projects.id as projects_id, projects_item.p_id as projects_item_id');
//     $this->db->from('projects');
//     $this->db->join('projects_item', 'projects.id = projects_item.p_id');
//     // $this->db->group_by('');
//     // $this->db->order_by('projects_id');
//     $query = $this->db->get();
//     return $query->result();
// }


// function dropdown_projects_item()
// {
//     $this->db->select('*');
//     $this->db->from('projects_item');
//     $query = $this->db->get();
//     return $query->result();
// }



} 
?>  