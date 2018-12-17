<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class ProjectsController extends CI_Controller {  


    public function form_validation()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules("name", "Name", 'required');
        //$this->form_validation->set_rules("tag", "Tag", 'required|alpha');
        $this->form_validation->set_rules("url", "Url");
        $this->form_validation->set_rules("description", "Description");
        $this->form_validation->set_rules("pic", "pic");
        $this->form_validation->set_rules("username", "username", 'required');
        $this->form_validation->set_rules("password", "password", 'required');
        //$this->form_validation->set_rules("password", "Password", 'required|min_length[6]');
        $this->form_validation->set_rules("notes", "Notes");
        $this->form_validation->set_rules("userid", "userid");
       // $this->form_validation->set_rules('tag', 'tag', 'trim|required');
        //$this->form_validation->set_rules('blog_tags', 'blog_tags');
        $this->form_validation->set_rules('blog_tags', 'blog_tags', 'trim');
        $this->form_validation->set_rules('multipletags', 'multipletags');

        $this->form_validation->set_rules('projectinsertid', 'projectinsertid');
        

        if($this->form_validation->run())
        {
    
             $config['upload_path']   = './upload/'; 
             $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
             $config['max_size']      = 100; 
             $config['max_width']     = 1024; 
             $config['max_height']    = 768;  
             $this->load->library('upload', $config);
                
             if ( ! $this->upload->do_upload('pic')) {
                $error = array('error' => $this->upload->display_errors()); 
               // print_r($error);
             }
                
             else { 
                $data = array('upload_data' => $this->upload->data()); 
               // print_r($data);
             }

            $upload_data = $this->upload->data(); 
            $file_name = $upload_data['file_name'];




            $alltags = $this->input->post("multipletags");
            $alltagsstr ='';
            foreach ($alltags as $value) {
                
                $alltagsstr .=$value.',';
            }
            $alltagsstr = rtrim($alltagsstr,',');

            $this->load->model("projects_model");
            $data = array(
                "name" =>$this->input->post("name"),
               // "tag" =>$this->input->post("tag"),
                "url" =>$this->input->post("url"),
                "description" =>$this->input->post("description"),
                "pic" =>$file_name,
                "username" =>$this->input->post("username"),
                "password" =>$this->input->post("password"),
                "notes" =>$this->input->post("Notes"),
                "userid" =>$this->input->post("userid"),
               // "tag" =>$this->input->post("tag"),
                "tag" =>$alltagsstr
                );

            $projectinsertid = $this->input->post("projectinsertid");

            if($projectinsertid==0){

              $this->projects_model->insert_data($data);

            }else{

             $this->load->model("fetch_model");
             $this->fetch_model->update($data,$projectinsertid);

            }

            redirect(base_url() . "/index.php/ProjectsController/inserted");
        }

        else {
           
            (base_url()."/index.php/Main/data");
        
        }

    }


     public function form_validation2()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules("name", "Name", 'required');
        //$this->form_validation->set_rules("tag", "Tag", 'required|alpha');
        $this->form_validation->set_rules("url", "Url");
        $this->form_validation->set_rules("description", "Description");
        $this->form_validation->set_rules("pic", "pic");
        $this->form_validation->set_rules("username", "username", 'required');
        $this->form_validation->set_rules("password", "password", 'required');
        //$this->form_validation->set_rules("password", "Password", 'required|min_length[6]');
        $this->form_validation->set_rules("notes", "Notes");
        $this->form_validation->set_rules("userid", "userid");
       // $this->form_validation->set_rules('tag', 'tag', 'trim|required');
        //$this->form_validation->set_rules('blog_tags', 'blog_tags');
        $this->form_validation->set_rules('blog_tags', 'blog_tags', 'trim');
        $this->form_validation->set_rules('multipletags', 'multipletags');

        $this->form_validation->set_rules('projectinsertid', 'projectinsertid');
        

        if($this->form_validation->run())
        {
    
             $config['upload_path']   = './upload/'; 
             $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
             $config['max_size']      = 100; 
             $config['max_width']     = 1024; 
             $config['max_height']    = 768;  
             $this->load->library('upload', $config);
                
             if ( ! $this->upload->do_upload('pic')) {
                $error = array('error' => $this->upload->display_errors()); 
               // print_r($error);
             }
                
             else { 
                $data = array('upload_data' => $this->upload->data()); 
               // print_r($data);
             }

            $upload_data = $this->upload->data(); 
            $file_name = $upload_data['file_name'];




            $alltags = $this->input->post("multipletags");
            $alltagsstr ='';
            foreach ($alltags as $value) {
                
                $alltagsstr .=$value.',';
            }
            $alltagsstr = rtrim($alltagsstr,',');

            $this->load->model("projects_model");
            $data = array(
                "name" =>$this->input->post("name"),
               // "tag" =>$this->input->post("tag"),
                "url" =>$this->input->post("url"),
                "description" =>$this->input->post("description"),
                "pic" =>$file_name,
                "username" =>$this->input->post("username"),
                "password" =>$this->input->post("password"),
                "notes" =>$this->input->post("Notes"),
                "userid" =>$this->input->post("userid"),
               // "tag" =>$this->input->post("tag"),
                "tag" =>$alltagsstr
                );

            $projectinsertid = $this->input->post("projectinsertid");

            if($projectinsertid==0){

              $this->projects_model->insert_data($data);

            }else{

             $this->load->model("fetch_model");
             $this->fetch_model->update($data,$projectinsertid);

            }

            redirect(base_url() . "/index.php/ProjectsController/inserted2");
        }

        else {
           
            (base_url()."/index.php/Main/dataUser");
        
        }

    }





    public function form_validation_subproject()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules("name", "Name", 'required');
        //$this->form_validation->set_rules("tag", "Tag", 'required|alpha');
        $this->form_validation->set_rules("url", "Url");
        $this->form_validation->set_rules("description", "Description");
        $this->form_validation->set_rules("pic", "pic");
        $this->form_validation->set_rules("username", "username", 'required');
        $this->form_validation->set_rules("password", "password", 'required');
        //$this->form_validation->set_rules("password", "Password", 'required|min_length[6]');
        $this->form_validation->set_rules("notes", "Notes");
        $this->form_validation->set_rules("userid", "userid");
        $this->form_validation->set_rules("parent_id", "parent_id");
        // $this->form_validation->set_rules('tag', 'tag', 'trim|required');
        //$this->form_validation->set_rules('blog_tags', 'blog_tags', 'trim');

        $this->form_validation->set_rules('multipletags', 'multipletags');
        

        if($this->form_validation->run())
        {
        
             $config['upload_path']   = './upload/'; 
             $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
             $config['max_size']      = 1000; 
             $config['max_width']     = 1024; 
             $config['max_height']    = 768;  
             $this->load->library('upload', $config);
                
             if ( ! $this->upload->do_upload('pic')) {
                $error = array('error' => $this->upload->display_errors()); 
               // print_r($error);
             }
                
             else { 
                $data = array('upload_data' => $this->upload->data()); 
               // print_r($data);
             }
//return;
            $upload_data = $this->upload->data(); 
            $file_name = $upload_data['file_name'];



            $alltags = $this->input->post("multipletags");
            $alltagsstr ='';
            foreach ($alltags as $value) {
                
                $alltagsstr .=$value.',';
            }
            $alltagsstr = rtrim($alltagsstr,',');


            $this->load->model("projects_model");
            $data = array(
                "name" =>$this->input->post("name"),
               // "tag" =>$this->input->post("tag"),
                "url" =>$this->input->post("url"),
                "description" =>$this->input->post("description"),
                "pic" =>$file_name,
                "username" =>$this->input->post("username"),
                "password" =>$this->input->post("password"),
                "notes" =>$this->input->post("Notes"),
                "userid" =>$this->input->post("userid"),
                "parent_id" =>$this->input->post("parent_id"),
                // "tag" =>$this->input->post("tag")
                //"tag" =>$this->input->post("blog_tags")
                "tag" =>$alltagsstr

                );

            $this->projects_model->insert_data($data);

            redirect(base_url() . "/index.php/ProjectsController/inserted");
        }

        else {
           
            redirect(base_url()."/index.php/Main/data");
        
        }

    }


    public function form_validation_subproject2()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules("name", "Name", 'required');
        //$this->form_validation->set_rules("tag", "Tag", 'required|alpha');
        $this->form_validation->set_rules("url", "Url");
        $this->form_validation->set_rules("description", "Description");
        $this->form_validation->set_rules("pic", "pic");
        $this->form_validation->set_rules("username", "username", 'required');
        $this->form_validation->set_rules("password", "password", 'required');
        //$this->form_validation->set_rules("password", "Password", 'required|min_length[6]');
        $this->form_validation->set_rules("notes", "Notes");
        $this->form_validation->set_rules("userid", "userid");
        $this->form_validation->set_rules("parent_id", "parent_id");
        // $this->form_validation->set_rules('tag', 'tag', 'trim|required');
        //$this->form_validation->set_rules('blog_tags', 'blog_tags', 'trim');

        $this->form_validation->set_rules('multipletags', 'multipletags');
        

        if($this->form_validation->run())
        {
        
             $config['upload_path']   = './upload/'; 
             $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
             $config['max_size']      = 1000; 
             $config['max_width']     = 1024; 
             $config['max_height']    = 768;  
             $this->load->library('upload', $config);
                
             if ( ! $this->upload->do_upload('pic')) {
                $error = array('error' => $this->upload->display_errors()); 
               // print_r($error);
             }
                
             else { 
                $data = array('upload_data' => $this->upload->data()); 
               // print_r($data);
             }
//return;
            $upload_data = $this->upload->data(); 
            $file_name = $upload_data['file_name'];



            $alltags = $this->input->post("multipletags");
            $alltagsstr ='';
            foreach ($alltags as $value) {
                
                $alltagsstr .=$value.',';
            }
            $alltagsstr = rtrim($alltagsstr,',');


            $this->load->model("projects_model");
            $data = array(
                "name" =>$this->input->post("name"),
               // "tag" =>$this->input->post("tag"),
                "url" =>$this->input->post("url"),
                "description" =>$this->input->post("description"),
                "pic" =>$file_name,
                "username" =>$this->input->post("username"),
                "password" =>$this->input->post("password"),
                "notes" =>$this->input->post("Notes"),
                "userid" =>$this->input->post("userid"),
                "parent_id" =>$this->input->post("parent_id"),
                // "tag" =>$this->input->post("tag")
                //"tag" =>$this->input->post("blog_tags")
                "tag" =>$alltagsstr

                );

            $this->projects_model->insert_data($data);

            redirect(base_url() . "/index.php/ProjectsController/inserted2");
        }

        else {
           
            redirect(base_url()."/index.php/Main/dataUser");
        
        }

    }


    private function format_tags_keywords($string) 
    {
        preg_match_all('`(?:[^,"]|"((?<=\)"|[^"])*")*`x', $string, $result);
        $tags = '';
        foreach ($result as $arr) 
        {
            $i = 0;
            foreach ($arr as $val) 
            {
                if ($i % 2 == 1) {
                    $i++;
                    continue;
                }
                $tags .= $val . '$';
                $i++;
            }
            
            $tags = str_replace('[', '', $tags);
            $tags = str_replace(']', '', $tags);
            $tags = rtrim($tags, '$');
            $tags = str_replace('"', '', $tags);
            break;
        }
        return $tags;
    }



        public function inserted()
        {
            redirect(base_url()."/index.php/Main/data");
        }

        public function inserted2()
        {
            redirect(base_url()."/index.php/Main/dataUser");
        }
  	

        public function delete_data()
        {
            $id = $this->uri->segment(3);
            $this->load->model("projects_model");
            $this->projects_model->delete_data($id);
            redirect(base_url()."/index.php/ProjectsController/deleted");
        }

        public function deleted()
        {
            redirect(base_url()."/index.php/Main/data");
        }
  

        public function edit_project($id)
        {
            //$title['title'] = 'Edit User';
            //$data['data'] = 'Edit User';
            $this->load->model('fetch_model');
            $data['project'] = $this->fetch_model->get_project_update($id);
                
            $this->load->view('edit_project', $data);
        }

            public function subchild($id)
            {

                $this->load->library('pagination');
                //$this->load->model("fetch_model");
                $this->load->model("fetch_mod");
                $this->load->model("projects_model");

                //$title['title'] = 'Edit User';
                //$data['data'] = 'Edit User';
                 $this->load->model('fetch_model');
                $data['project'] = $this->fetch_model->get_project_update($id);
                $data['parent_id'] = $id;
                    
                $tagdata = $this->fetch_model->fetchalltags($id=0);
                $tagdata_str = $tagdata['results'][0]->alltags;
                $tagdata_arr = explode(',', $tagdata_str);
                $tagdata_arr = array_unique($tagdata_arr);

                $data['tagdata'] = $tagdata_arr;

                $userid = $this->session->userdata('id');

                $level = $this->session->userdata('level');
                if($level==1){

                   $data['data'] = $this->fetch_model->fetchtreebyadminid();
                }else{
                    
                   $data['data'] = $this->fetch_model->fetchtreebyuserid($userid);
                }
                //$data['data'] = $this->fetch_model->fetchtreebyuserid($userid);

                $config = array();
                
                $config['base_url'] = site_url('Main/data');
                $config['total_rows'] = $this->db->get('projects')->num_rows();
                $config['per_page'] = 3;
                $config['full_tag_open'] = '<div id="pagination">';
                $config['full_tag_close'] = '</div>';

                $this->pagination->initialize($config);

                $data['records'] = $this->fetch_model->getAllRecordsbyuserid( $config['per_page'], '', $userid);


                $this->load->view('subchild', $data);
            }

 public function subchild2($id)
        {

            $this->load->library('pagination');
            //$this->load->model("fetch_model");
            $this->load->model("fetch_mod");
            $this->load->model("projects_model");

            //$title['title'] = 'Edit User';
            //$data['data'] = 'Edit User';
             $this->load->model('fetch_model');
            $data['project'] = $this->fetch_model->get_project_update($id);
            $data['parent_id'] = $id;
                
            $tagdata = $this->fetch_model->fetchalltags($id=0);
            $tagdata_str = $tagdata['results'][0]->alltags;
            $tagdata_arr = explode(',', $tagdata_str);
            $tagdata_arr = array_unique($tagdata_arr);

            $data['tagdata'] = $tagdata_arr;

            $userid = $this->session->userdata('id');


            $level = $this->session->userdata('level');
            if($level==1){

               $data['data'] = $this->fetch_model->fetchtreebyadminid();
            }else{
                
               $data['data'] = $this->fetch_model->fetchtreebyuserid($userid);
            }            
            //$data['data'] = $this->fetch_model->fetchtreebyuserid($userid);



            $config = array();
            
            $config['base_url'] = site_url('Main/dataUser');
            $config['total_rows'] = $this->db->get('projects')->num_rows();
            $config['per_page'] = 3;
            $config['full_tag_open'] = '<div id="pagination">';
            $config['full_tag_close'] = '</div>';

            $this->pagination->initialize($config);

            $data['records'] = $this->fetch_model->getAllRecordsbyuserid( $config['per_page'], '', $userid);


            $this->load->view('subchild2', $data);
        }

        public function update()
        {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'name', 'required|trim');
            $this->form_validation->set_rules('tag', 'tag', 'required|trim');
            $this->form_validation->set_rules('url', 'url', 'required|trim');
            $this->form_validation->set_rules('description', 'description', 'required|trim');

            $id = $this->input->post('id');
            if($this->form_validation->run()==false)
            {
                $this->edit_project($id);
            }
            else{
                $project = array(
                    'name' => $this->input->post('name'),
                    'tag' => $this->input->post('tag'),
                    'url' => $this->input->post('url'),
                    'description' => $this->input->post('description')

                    );
                $this->load->model('fetch_model');
                $this->fetch_model->update($project, $id);
                redirect(base_url() . "/index.php/ProjectsController/updated");
                }
        }

        public function updated()
        {
//            $this->index();
            redirect(base_url()."/index.php/Main/data");
        }

        public function update2()
        {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'name', 'required|trim');
            $this->form_validation->set_rules('tag', 'tag', 'required|trim');
            $this->form_validation->set_rules('url', 'url', 'required|trim');
            $this->form_validation->set_rules('description', 'description', 'required|trim');

            $id = $this->input->post('id');
            if($this->form_validation->run()==false)
            {
                $this->edit_project($id);
            }
            else{
                $project = array(
                    'name' => $this->input->post('name'),
                    'tag' => $this->input->post('tag'),
                    'url' => $this->input->post('url'),
                    'description' => $this->input->post('description')

                    );
                $this->load->model('fetch_model');
                $this->fetch_model->update($project, $id);
                redirect(base_url() . "/index.php/ProjectsController/updated2");
                }
        }

        public function updated2()
        {
//            $this->index();
            redirect(base_url()."/index.php/Main/dataUser");
        }


        public function upload()
        {
            $config_image = array();
            $config_image['upload_path'] = './image';
            $config_image['allowed_types'] = 'jpg|png|gif';
            $config_image['max_size'] = '1024';

            $this->load->library('upload', $config_image);
            $this->upload->do_upload();

            echo '<pre>';
            print_r($this->upload->data());
            echo '</pre>';

        }



        
        function build_menu($rows,$parent)
        {
            $temp = "<ul class=\"treeview-menu\">";
            $result = "";
            foreach ($rows as $row)
            {
                if ($row['parent_id'] == $parent){

                    $result.= "<li class=\"treeview\"><a href=" . site_url('Main/data?id=') . $row['id'] ."><span>{$row['name']}</span></a>";
                    if ($this->has_children($rows,$row['id']))
                        $result.= $temp . $this->build_menu($rows,$row['id']);                   
                }
            }
            $result.= "</ul>";

            return $result;
        }
        
        function has_children($rows,$id)
        {
            foreach ($rows as $row) {
                if ($row['parent_id'] == $id)
                return true;            
            }
            return false;
        }        



        public function form_validation_update()
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules("name", "Name", 'required');
            //$this->form_validation->set_rules("tag", "Tag", 'required|alpha');
            $this->form_validation->set_rules("url", "Url");
            $this->form_validation->set_rules("description", "Description");
            $this->form_validation->set_rules("pic", "pic");
            $this->form_validation->set_rules("username", "username", 'required');
            $this->form_validation->set_rules("password", "password", 'required');
            //$this->form_validation->set_rules("password", "Password", 'required|min_length[6]');
            $this->form_validation->set_rules("notes", "Notes");
            $this->form_validation->set_rules("userid", "userid");
           // $this->form_validation->set_rules('tag', 'tag', 'trim|required');
            //$this->form_validation->set_rules('blog_tags', 'blog_tags');
            $this->form_validation->set_rules('blog_tags', 'blog_tags', 'trim');
            $this->form_validation->set_rules('projectid', 'projectid');
            $this->form_validation->set_rules('multipletags', 'multipletags');
            $this->form_validation->set_rules('oldfilename', 'oldfilename');
            

            if($this->form_validation->run())
            {
           
                 $id = $this->input->post("projectid");
                 $oldfilename = $this->input->post("oldfilename");
                 
                 $file_name ='';
           
                 $config['upload_path']   = './upload/'; 
                 $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
                 $config['max_size']      = 800; 
                 $config['max_width']     = 1024; 
                 $config['max_height']    = 768;  
                 $this->load->library('upload', $config);
                    
                 if ( ! $this->upload->do_upload('pic')) {
                    $error = array('error' => $this->upload->display_errors()); 
                    //print_r($error);
                    $file_name = $oldfilename;
                 }
                    
                 else { 
                    $data = array('upload_data' => $this->upload->data()); 
                    $upload_data = $this->upload->data(); 
                    $file_name = $upload_data['file_name'];
                 }


                $alltags = $this->input->post("multipletags");
                $alltagsstr ='';
                foreach ($alltags as $value) {
                    
                    $alltagsstr .=$value.',';
                }
                $alltagsstr = rtrim($alltagsstr,',');

                $this->load->model("projects_model");
                $data = array(
                    "name" =>$this->input->post("name"),
                   // "tag" =>$this->input->post("tag"),
                    "url" =>$this->input->post("url"),
                    "description" =>$this->input->post("description"),
                    "pic" =>$file_name,
                    "username" =>$this->input->post("username"),
                    "password" =>$this->input->post("password"),
                    "notes" =>$this->input->post("Notes"),
                    "userid" =>$this->input->post("userid"),
                   // "tag" =>$this->input->post("tag"),
                    //"tag" =>$this->input->post("blog_tags")
                    "tag" =>$alltagsstr

                    );

                //print_r($id); return;

                //$this->projects_model->insert_data($data);
                $this->load->model("fetch_model");
                $this->fetch_model->update($data,$id);

                //redirect(base_url() . "/index.php/ProjectsController/inserted");
                redirect(base_url() . "index.php/Main/editdata/".$id."");

            }

            else {
               
                (base_url()."/index.php/Main/data");
            
            }

        }



        public function form_validation_updatePASSWORD()
        {
            $this->load->library('form_validation');

           
            $this->form_validation->set_rules("password", "password", 'required');
            $this->form_validation->set_rules("confirm_password", "confirm_password", 'required|matches[password]');
            //$this->form_validation->set_rules("password", "Password", 'required|min_length[6]');
            
            

            if($this->form_validation->run())
            {
           
                 
                 

                $this->load->model("projects_model");
                $data = array(
                   
                    "password" =>$this->input->post("password"),
                    "confirm_password" =>$this->input->post("confirm_password"),
                    );

                //print_r($id); return;
                $id = $this->input->post("projectid");

                //$this->projects_model->insert_data($data);
                $this->load->model("fetch_model");
                $this->fetch_model->update($data,$id);

                //redirect(base_url() . "/index.php/ProjectsController/inserted");
                redirect(base_url() . "index.php/ProjectsController/editPASSWORD/".$id."");

            }

            else {
               
                (base_url()."/index.php/Main/data");
            
            }

        }





        public function editPASSWORD()  
    {

        
        if ($this->session->userdata('currently_logged_in'))   
        {  
            $this->load->library('pagination');
            $this->load->model("fetch_model");
            $this->load->model("fetch_mod");
            $this->load->model("projects_model");

            $config = array();            
            $config['base_url'] = site_url('Main/data');
            $config['total_rows'] = $this->db->get('projects')->num_rows();
            $config['per_page'] = 3;
            $config['full_tag_open'] = '<div id="pagination">';
            $config['full_tag_close'] = '</div>';
            $this->pagination->initialize($config);
            
            $userid = $this->session->userdata('id');
            $data['records'] = $this->fetch_model->getAllRecordsbyuserid( $config['per_page'], $this->uri->segment(3), $userid);

            
            $level = $this->session->userdata('level');
            if($level==1){

               $data['data'] = $this->fetch_model->fetchtreebyadminid();
            }else{
                
               $data['data'] = $this->fetch_model->fetchtreebyuserid($userid);
            }

            //$data['data'] = $this->fetch_model->fetchtreebyuserid($userid);
            
            $projectid = $this->uri->segment(3);
            $data['projectid'] = $projectid;
            $data['projectdata'] = $this->fetch_model->get_project_update($projectid);

            //$data['tagdata'] = $this->fetch_model->fetchalltags($id=0);
            $tagdata = $this->fetch_model->fetchalltags($id=0);

            $tagdata_str = $tagdata['results'][0]->alltags;
            $tagdata_arr = explode(',', $tagdata_str);
            $tagdata_arr = array_unique($tagdata_arr);

            $data['tagdata'] = $tagdata_arr;


            $this->load->view("change_project_pass", $data); 
        } else {  
            redirect('Main/invalid');  
        }  

    }





         public function form_validation_updatePASSWORD2()
            {
                $this->load->library('form_validation');

               
                $this->form_validation->set_rules("password", "password", 'required');
                $this->form_validation->set_rules("confirm_password", "confirm_password", 'required|matches[password]');
                //$this->form_validation->set_rules("password", "Password", 'required|min_length[6]');
                
                

                if($this->form_validation->run())
                {
               
                     
                     

                    $this->load->model("projects_model");
                    $data = array(
                       
                        "password" =>$this->input->post("password"),
                        "confirm_password" =>$this->input->post("confirm_password"),
                        );

                    //print_r($id); return;
                    $id = $this->input->post("projectid");

                    //$this->projects_model->insert_data($data);
                    $this->load->model("fetch_model");
                    $this->fetch_model->update($data,$id);

                    //redirect(base_url() . "/index.php/ProjectsController/inserted");
                    redirect(base_url() . "index.php/ProjectsController/editPASSWORD2/".$id."");

                }

                else {
                   
                    (base_url()."/index.php/Main/dataUser");
                
                }

            }





        public function editPASSWORD2()  
        {

            
            if ($this->session->userdata('currently_logged_in'))   
            {  
                $this->load->library('pagination');
                $this->load->model("fetch_model");
                $this->load->model("fetch_mod");
                $this->load->model("projects_model");

                $config = array();            
                $config['base_url'] = site_url('Main/dataUser');
                $config['total_rows'] = $this->db->get('projects')->num_rows();
                $config['per_page'] = 3;
                $config['full_tag_open'] = '<div id="pagination">';
                $config['full_tag_close'] = '</div>';
                $this->pagination->initialize($config);
                
                $userid = $this->session->userdata('id');
                $data['records'] = $this->fetch_model->getAllRecordsbyuserid( $config['per_page'], $this->uri->segment(3), $userid);

                
                $level = $this->session->userdata('level');
                if($level==1){

                   $data['data'] = $this->fetch_model->fetchtreebyadminid();
                }else{
                    
                   $data['data'] = $this->fetch_model->fetchtreebyuserid($userid);
                }

                //$data['data'] = $this->fetch_model->fetchtreebyuserid($userid);
                
                $projectid = $this->uri->segment(3);
                $data['projectid'] = $projectid;
                $data['projectdata'] = $this->fetch_model->get_project_update($projectid);

                //$data['tagdata'] = $this->fetch_model->fetchalltags($id=0);
                $tagdata = $this->fetch_model->fetchalltags($id=0);

                $tagdata_str = $tagdata['results'][0]->alltags;
                $tagdata_arr = explode(',', $tagdata_str);
                $tagdata_arr = array_unique($tagdata_arr);

                $data['tagdata'] = $tagdata_arr;


                $this->load->view("change_project_pass2", $data); 
            } else {  
                redirect('Main/invalid');  
            }  

        }




        //  public function form_validation_update_pass()
        // {
        //     $this->load->library('form_validation');

        //     $this->form_validation->set_rules("password", "password", 'required');
        //     $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
            

        //     if($this->form_validation->run())
        //     {
           
                
        //         $this->load->model("projects_model");
        //         $data = array(
        //                 "password" =>$this->input->post("password"),
        //         //"confirm_password" =>md5($this->input->post("confirm_password")),
        //         "confirm_password" =>$this->input->post("confirm_password")

        //             );

        //         //print_r($id); return;
        //         $id = $this->input->post("projectsid");
        //         //$this->projects_model->insert_data($data);
        //         $this->load->model("fetch_model");
        //         $this->fetch_model->update($data,$id);

        //         //redirect(base_url() . "/index.php/ProjectsController/inserted");
        //         redirect(base_url() . "index.php/Main/editpassPR2/".$id."");

        //     }

        //     else {
               
        //        $this->index();
            
        //     }

        // }


         public function form_validation_update2()
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules("name", "Name", 'required');
            //$this->form_validation->set_rules("tag", "Tag", 'required|alpha');
            $this->form_validation->set_rules("url", "Url");
            $this->form_validation->set_rules("description", "Description");
            $this->form_validation->set_rules("pic", "pic");
            $this->form_validation->set_rules("username", "username", 'required');
            $this->form_validation->set_rules("password", "password", 'required');
            //$this->form_validation->set_rules("password", "Password", 'required|min_length[6]');
            $this->form_validation->set_rules("notes", "Notes");
            $this->form_validation->set_rules("userid", "userid");
           // $this->form_validation->set_rules('tag', 'tag', 'trim|required');
            //$this->form_validation->set_rules('blog_tags', 'blog_tags');
            $this->form_validation->set_rules('blog_tags', 'blog_tags', 'trim');
            $this->form_validation->set_rules('projectid', 'projectid');
            $this->form_validation->set_rules('multipletags', 'multipletags');
            $this->form_validation->set_rules('oldfilename', 'oldfilename');
            

            if($this->form_validation->run())
            {
           
                 $id = $this->input->post("projectid");
                 $oldfilename = $this->input->post("oldfilename");
                 
                 $file_name ='';
           
                 $config['upload_path']   = './upload/'; 
                 $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
                 $config['max_size']      = 800; 
                 $config['max_width']     = 1024; 
                 $config['max_height']    = 768;  
                 $this->load->library('upload', $config);
                    
                 if ( ! $this->upload->do_upload('pic')) {
                    $error = array('error' => $this->upload->display_errors()); 
                    //print_r($error);
                    $file_name = $oldfilename;
                 }
                    
                 else { 
                    $data = array('upload_data' => $this->upload->data()); 
                    $upload_data = $this->upload->data(); 
                    $file_name = $upload_data['file_name'];
                 }


                $alltags = $this->input->post("multipletags");
                $alltagsstr ='';
                foreach ($alltags as $value) {
                    
                    $alltagsstr .=$value.',';
                }
                $alltagsstr = rtrim($alltagsstr,',');

                $this->load->model("projects_model");
                $data = array(
                    "name" =>$this->input->post("name"),
                   // "tag" =>$this->input->post("tag"),
                    "url" =>$this->input->post("url"),
                    "description" =>$this->input->post("description"),
                    "pic" =>$file_name,
                    "username" =>$this->input->post("username"),
                    "password" =>$this->input->post("password"),
                    "notes" =>$this->input->post("Notes"),
                    "userid" =>$this->input->post("userid"),
                   // "tag" =>$this->input->post("tag"),
                    //"tag" =>$this->input->post("blog_tags")
                    "tag" =>$alltagsstr

                    );

                //print_r($id); return;

                //$this->projects_model->insert_data($data);
                $this->load->model("fetch_model");
                $this->fetch_model->update($data,$id);

                //redirect(base_url() . "/index.php/ProjectsController/inserted2");
                redirect(base_url() . "index.php/Main/editdata2/".$id."");
            }

            else {
               
                (base_url()."/index.php/Main/dataUser");
            
            }

        }



        public function subsubchild($id)
        {

            $this->load->library('pagination');
            //$this->load->model("fetch_model");
            $this->load->model("fetch_mod");
            $this->load->model("projects_model");

            //$title['title'] = 'Edit User';
            //$data['data'] = 'Edit User';
             $this->load->model('fetch_model');
            $data['project'] = $this->fetch_model->get_project_update($id);
            $data['parent_id'] = $id;
                
            $tagdata = $this->fetch_model->fetchalltags($id=0);
            $tagdata_str = $tagdata['results'][0]->alltags;
            $tagdata_arr = explode(',', $tagdata_str);
            $tagdata_arr = array_unique($tagdata_arr);

            $data['tagdata'] = $tagdata_arr;

            $userid = $this->session->userdata('id');

            $level = $this->session->userdata('level');
            if($level==1){

               $data['data'] = $this->fetch_model->fetchtreebyadminid();
            }else{
                
               $data['data'] = $this->fetch_model->fetchtreebyuserid($userid);
            }            
           // $data['data'] = $this->fetch_model->fetchtreebyuserid($userid);



            $config = array();
            
            $config['base_url'] = site_url('Main/data');
            $config['total_rows'] = $this->db->get('projects')->num_rows();
            $config['per_page'] = 3;
            $config['full_tag_open'] = '<div id="pagination">';
            $config['full_tag_close'] = '</div>';

            $this->pagination->initialize($config);

            $data['records'] = $this->fetch_model->getAllRecordsbyuserid( $config['per_page'], '', $userid);


            $this->load->view('subsubchild', $data);
        }



         public function subsubchild2($id)
            {

                $this->load->library('pagination');
                //$this->load->model("fetch_model");
                $this->load->model("fetch_mod");
                $this->load->model("projects_model");

                //$title['title'] = 'Edit User';
                //$data['data'] = 'Edit User';
                 $this->load->model('fetch_model');
                $data['project'] = $this->fetch_model->get_project_update($id);
                $data['parent_id'] = $id;
                    
                $tagdata = $this->fetch_model->fetchalltags($id=0);
                $tagdata_str = $tagdata['results'][0]->alltags;
                $tagdata_arr = explode(',', $tagdata_str);
                $tagdata_arr = array_unique($tagdata_arr);

                $data['tagdata'] = $tagdata_arr;

                $userid = $this->session->userdata('id');
                $level = $this->session->userdata('level');
                if($level==1){

                   $data['data'] = $this->fetch_model->fetchtreebyadminid();
                }else{
                    
                   $data['data'] = $this->fetch_model->fetchtreebyuserid($userid);
                }

                //$data['data'] = $this->fetch_model->fetchtreebyuserid($userid);



                $config = array();
                
                $config['base_url'] = site_url('Main/dataUser');
                $config['total_rows'] = $this->db->get('projects')->num_rows();
                $config['per_page'] = 3;
                $config['full_tag_open'] = '<div id="pagination">';
                $config['full_tag_close'] = '</div>';

                $this->pagination->initialize($config);

                $data['records'] = $this->fetch_model->getAllRecordsbyuserid( $config['per_page'], '', $userid);


                $this->load->view('subsubchild2', $data);
            }

}  
?>  