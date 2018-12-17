<?php
    class Fetch_model extends CI_Model
    {

        //     function getChildren($id, $parent_id) {
        //     $q = $this->db->select('id, name, slug, plat');
        //     $q = $this->db->from('games');
        //     $q = $this->db->where('parent_id',$id);
        //     $q = $this->db->or_where('id',$parent_id);
        //     $q = $this->db->or_where('parent_id',$parent_id);
        //     $q = $this->db->where('id !=', $id);
        //     $q = $this->db->get();

        //     return $q->result_array();
        // }


            public function fetchtree()
            {
                $sql = "SELECT *, 0 as subchild FROM projects WHERE parent_id IS NULL ";
                $res = $this->db->query($sql);
                $num = $res->num_rows();
                $rre = $res->result();
            
                if($num==0){
                    $retArr = array('numResults' => $num);
                }else{
                    
                    foreach ($rre as $value) {
                        
                        $id = $value->id;

                        $sql1 = "SELECT *, 0 as grandchild FROM projects WHERE parent_id=$id  ";
                        $res1 = $this->db->query($sql1);
                        $num1 = $res1->num_rows();
                        $rre1 = $res1->result();
                        if($num1==0){

                            $value->subchild = 0;
                        
                        }else{

                                foreach ($rre1 as $value1) {
                                    
                                    $id1 = $value1->id;

                                    $sql2 = "SELECT * FROM projects WHERE parent_id=$id1  ";
                                    $res2 = $this->db->query($sql2);
                                    $num2 = $res2->num_rows();
                                    $rre2 = $res2->result();
                                    if($num2==0){

                                        $value1->grandchild = 0;
                                    
                                    }else{

                                        $value1->grandchild = array('numResults' => $num2,'results' => $rre2);
                                    }                

                                }

                                $value->subchild = array('numResults' => $num1,'results' => $rre1);
                        }                

                    }

                    $retArr = array('numResults' => $num,'results' => $rre);
                }
                return $retArr;

            }



            public function fetchtreebyuserid($userid)
            {
                $sql = "SELECT *, 0 as subchild FROM projects WHERE userid='$userid' AND parent_id IS NULL  ";
                $res = $this->db->query($sql);
                $num = $res->num_rows();
                $rre = $res->result();
            
                if($num==0){
                    $retArr = array('numResults' => $num);
                }else{
                    
                    foreach ($rre as $value) {
                        
                        $id = $value->id;

                        $sql1 = "SELECT *, 0 as grandchild FROM projects WHERE userid='$userid' AND parent_id=$id  ";
                        $res1 = $this->db->query($sql1);
                        $num1 = $res1->num_rows();
                        $rre1 = $res1->result();
                        if($num1==0){

                            $value->subchild = 0;
                        
                        }else{

                                foreach ($rre1 as $value1) {
                                    
                                    $id1 = $value1->id;

                                    $sql2 = "SELECT * FROM projects WHERE userid='$userid' AND parent_id=$id1  ";
                                    $res2 = $this->db->query($sql2);
                                    $num2 = $res2->num_rows();
                                    $rre2 = $res2->result();
                                    if($num2==0){

                                        $value1->grandchild = 0;
                                    
                                    }else{

                                        $value1->grandchild = array('numResults' => $num2,'results' => $rre2);
                                    }                

                                }

                                $value->subchild = array('numResults' => $num1,'results' => $rre1);
                        }                

                    }

                    $retArr = array('numResults' => $num,'results' => $rre);
                }
                return $retArr;

            }



            function getAllRecords($limit, $offset)
            {
                $this->db->limit($limit, $offset);
                //$this->load->database();
                $q=$this->db->get("projects");
                if($q->num_rows()>0)
                {
                    return $q->result();
                }

                return $q->result();
                //return array();
            }


            function getAllRecordsbyuserid($limit, $offset, $userid)
            {
                $this->db->limit($limit, $offset);
                $this->db->where('userid', $userid);
                //$this->load->database();
                $q=$this->db->get("projects");
                if($q->num_rows()>0)
                {
                    return $q->result();
                }

                return $q->result();
                //return array();
            }

            public function get_all_category_data()
            {
                // Get the complete category_menu table
                $query = $this->db->order_by('parent_id','asc')
                    ->get('projects');

                if( $query->num_rows() > 0 )
                {
                    return $query->result_array();
                }

                return FALSE;
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


            function getAllData()
            {
                
                $this->load->database();
                $this->db->select('*');
                $q=$this->db->get("projects");
                if($q->num_rows()>0)
                {
                    return $q->result();
                }

                return $q->result();
            }





            function getAllRecordsById($id)
            {
                $this->load->database();
                $this->db->where('id', $id);
                $q=$this->db->get("projects");
                if($q->num_rows()>0)
                {
                    return $q->result();
                }

                return array();
            }

        
            public function get_project_update($id) {

                $this->db->select('*');
                $this->db->from('projects');
                $this->db->where('id', $id);
                $query = $this->db->get();
                if($query->num_rows()>0)
                {
                    return $query->result();
                }else{

                return $query->result();
                }


            }

            public function update($project, $id)
            {
                $this->db->where('id', $id);
                $this->db->update('projects', $project);
            }



            function tree_al() {
                $result = $this->db->query("SELECT  id, name, name as text, parent_id FROM projects")->result_array();
                    foreach ($result as $row) {
                        $data[] = $row;
                    }
                    return $data;
            }


            function getAllRecordsbyuseridandsearch($limit, $userid, $search)
            {
                $sql = "SELECT * FROM  `projects` WHERE  `name` LIKE  '%$search%' AND userid='$userid' LIMIT $limit ";
                $res = $this->db->query($sql);
                $rre = $res->result();
                $num = $res->num_rows();
                $retArr = array('numResults' => $num,'results' => $rre);
                return $retArr;
            }


            public function fetchtreebyuseridandsearch($userid, $search)
            {
                $sql = "SELECT *, 0 as subchild FROM projects WHERE `name` LIKE  '%$search%' AND userid='$userid' AND parent_id IS NULL  ";
                $res = $this->db->query($sql);
                $num = $res->num_rows();
                $rre = $res->result();
            
                if($num==0){
                    $retArr = array('numResults' => $num);
                }else{
                    
                    foreach ($rre as $value) {
                        
                        $id = $value->id;

                        $sql1 = "SELECT *, 0 as grandchild FROM projects WHERE userid='$userid' AND parent_id=$id  ";
                        $res1 = $this->db->query($sql1);
                        $num1 = $res1->num_rows();
                        $rre1 = $res1->result();
                        if($num1==0){

                            $value->subchild = 0;
                        
                        }else{

                                foreach ($rre1 as $value1) {
                                    
                                    $id1 = $value1->id;

                                    $sql2 = "SELECT * FROM projects WHERE userid='$userid' AND parent_id=$id1  ";
                                    $res2 = $this->db->query($sql2);
                                    $num2 = $res2->num_rows();
                                    $rre2 = $res2->result();
                                    if($num2==0){

                                        $value1->grandchild = 0;
                                    
                                    }else{

                                        $value1->grandchild = array('numResults' => $num2,'results' => $rre2);
                                    }                

                                }

                                $value->subchild = array('numResults' => $num1,'results' => $rre1);
                        }                

                    }

                    $retArr = array('numResults' => $num,'results' => $rre);
                }
                return $retArr;

            }
            

            public function fetchalltags($id)
            {
                // if($id==0){

                //   $sql = "SELECT * FROM  `tags` Order By tagname ";
                // }else{
   
                //   $sql = "SELECT * FROM  `tags` WHERE id='$id' Order By tagname ";

                // }

                $sql = "SELECT GROUP_CONCAT(DISTINCT tag ORDER BY tag ASC) as alltags FROM projects WHERE tag!='' ";
                //$sql = "SELECT DISTINCT tag FROM projects WHERE tag!=''  ORDER BY tag ASC";

                $res = $this->db->query($sql);
                $rre = $res->result();
                $num = $res->num_rows();
                $retArr = array('numResults' => $num,'results' => $rre);
                return $retArr;
            }

            public function fetchalltagsuser($id)
            {
                $sql = "SELECT GROUP_CONCAT(DISTINCT tag ORDER BY tag ASC) as alltags FROM users WHERE tag!='' ";
                $res = $this->db->query($sql);
                $rre = $res->result();
                $num = $res->num_rows();
                $retArr = array('numResults' => $num,'results' => $rre);
                return $retArr;
            }


            public function fetchuserbysearch($search)
            {
                $sql = "SELECT * FROM users WHERE `customerName` LIKE  '%$search%'  ";
                $res = $this->db->query($sql);
                $num = $res->num_rows();
                $rre = $res->result();
            
                if($num==0){
                    $retArr = array('numResults' => $num);
                }else{
                    
                    $retArr = array('numResults' => $num,'results' => $rre);
                }
                return $retArr;

            }
            


            public function fetchtreebyadminid()
            {
                $sql = "SELECT *, 0 as subchild FROM projects WHERE parent_id IS NULL  ";
                $res = $this->db->query($sql);
                $num = $res->num_rows();
                $rre = $res->result();
            
                if($num==0){
                    $retArr = array('numResults' => $num);
                }else{
                    
                    foreach ($rre as $value) {
                        
                        $id = $value->id;

                        $sql1 = "SELECT *, 0 as grandchild FROM projects WHERE parent_id=$id  ";
                        $res1 = $this->db->query($sql1);
                        $num1 = $res1->num_rows();
                        $rre1 = $res1->result();
                        if($num1==0){

                            $value->subchild = 0;
                        
                        }else{

                                foreach ($rre1 as $value1) {
                                    
                                    $id1 = $value1->id;

                                    $sql2 = "SELECT * FROM projects WHERE parent_id=$id1  ";
                                    $res2 = $this->db->query($sql2);
                                    $num2 = $res2->num_rows();
                                    $rre2 = $res2->result();
                                    if($num2==0){

                                        $value1->grandchild = 0;
                                    
                                    }else{

                                        $value1->grandchild = array('numResults' => $num2,'results' => $rre2);
                                    }                

                                }

                                $value->subchild = array('numResults' => $num1,'results' => $rre1);
                        }                

                    }

                    $retArr = array('numResults' => $num,'results' => $rre);
                }
                return $retArr;

            }
    

            public function fetchtreebyadminidandsearch($userid, $search)
            {
                $sql = "SELECT *, 0 as subchild FROM projects WHERE `name` LIKE  '%$search%' AND parent_id IS NULL  ";
                $res = $this->db->query($sql);
                $num = $res->num_rows();
                $rre = $res->result();
            
                if($num==0){
                    $retArr = array('numResults' => $num);
                }else{
                    
                    foreach ($rre as $value) {
                        
                        $id = $value->id;

                        $sql1 = "SELECT *, 0 as grandchild FROM projects WHERE parent_id=$id  ";
                        $res1 = $this->db->query($sql1);
                        $num1 = $res1->num_rows();
                        $rre1 = $res1->result();
                        if($num1==0){

                            $value->subchild = 0;
                        
                        }else{

                                foreach ($rre1 as $value1) {
                                    
                                    $id1 = $value1->id;

                                    $sql2 = "SELECT * FROM projects WHERE parent_id=$id1  ";
                                    $res2 = $this->db->query($sql2);
                                    $num2 = $res2->num_rows();
                                    $rre2 = $res2->result();
                                    if($num2==0){

                                        $value1->grandchild = 0;
                                    
                                    }else{

                                        $value1->grandchild = array('numResults' => $num2,'results' => $rre2);
                                    }                

                                }

                                $value->subchild = array('numResults' => $num1,'results' => $rre1);
                        }                

                    }

                    $retArr = array('numResults' => $num,'results' => $rre);
                }
                return $retArr;

            }


    }

?>