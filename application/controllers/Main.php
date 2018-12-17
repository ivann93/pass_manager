<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Main extends CI_Controller {  
  
    public function index()  
    {  
        $this->login();
    }  
  
    public function login()  
    {  
        $this->load->view('login_view');  
    }  

    public function show_form()  
    {  
        $this->load->view('show_form');  
    }  

    public function newUser(){
        $this->load->view('new_user');
    }

     public function novo(){
        $this->load->model("fetch_model");
        $udata['records']=$this->fetch_model->getAllData();
        $this->load->view("novo", $udata);  
       
    }

    public function newProject(){
        $this->load->view('new_project');
    }


   public function categoryMenu()
   {
        $this->load->view('category_menu');
       
    }
  


    public function data()  
    {  
        if ($this->session->userdata('currently_logged_in'))   
        {  
            //$this->load->view('data');
            //$this->load->model("fetch_model");
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
            //$data['records'] = $this->fetch_model->getAllRecords($config['per_page'], $this->uri->segment(3));
            
            $userid = $this->session->userdata('id');
            //echo $userid; return;
            $data['records'] = $this->fetch_model->getAllRecordsbyuserid( $config['per_page'], $this->uri->segment(3), $userid);

            $tagdata = $this->fetch_model->fetchalltags($id=0);

            $tagdata_str = $tagdata['results'][0]->alltags;
            $tagdata_arr = explode(',', $tagdata_str);
            $tagdata_arr = array_unique($tagdata_arr);

            $data['tagdata'] = $tagdata_arr;

            

            //$data['data'] = $this->fetch_model->fetchtree();
            // for admin
            $level = $this->session->userdata('level');
            if($level==1){

               $data['data'] = $this->fetch_model->fetchtreebyadminid();
            }else{
                
               $data['data'] = $this->fetch_model->fetchtreebyuserid($userid);
            }
            //echo $level; return;


            $projectid = 0;
            $data['projectid'] = $projectid;
            $data['projectdata'] = '';

            $this->load->view("data", $data); 

            //$data['result'] = $this->fetch_model->get_all_category_data();
            //$data['result'] = $this->fetch_mod->getAllRecords($config['per_page'], $this->uri->segment(3));
            //$data['records'] = $this->fetch_model->getAllData();
            //$data['result'] = $this->fetch_mod->getAllUsers(); 
            //$data['result'] = $this->fetch_model->get_all_category_data();  


         
            //echo $this->load->view('data', array('data'=>$data),true);   

        


            // $this->pagination->initialize($config);
            // $data['result'] = $this->fetch_model->get_all_category_data($config['per_page'], $this->uri->segment(3));
            // $this->load->view("data", $data);  fetch_model
        } else {  
            redirect('Main/invalid');  
        }  
    }  




    // public function dataUser()  
    // {  
    //     if ($this->session->userdata('currently_logged_in'))   
    //     {  
    //         //$this->load->view('data');
    //         //$this->load->model("fetch_model");
    //         $this->load->library('pagination');
    //         $this->load->model("fetch_model");
    //         $config = array();
            
    //         $config['base_url'] = site_url('Main/dataUser');
    //         $config['total_rows'] = $this->db->get('projects')->num_rows();
    //         $config['per_page'] = 3;
    //         $config['full_tag_open'] = '<div id="pagination">';
    //         $config['full_tag_close'] = '</div>';

    //         $this->pagination->initialize($config);
    //         //$data['records'] = $this->fetch_model->getAllRecords($config['per_page'], $this->uri->segment(3));
            
    //         $userid = $this->session->userdata('id');
    //         $data['records'] = $this->fetch_model->getAllRecordsbyuserid( $config['per_page'], $this->uri->segment(3), $userid);
    //         $data['data'] = $this->fetch_model->fetchtreebyuserid($userid);

    //         $tagdata = $this->fetch_model->fetchalltags($id=0);

    //         $tagdata_str = $tagdata['results'][0]->alltags;
    //         $tagdata_arr = explode(',', $tagdata_str);
    //         $tagdata_arr = array_unique($tagdata_arr);

    //         $data['tagdata'] = $tagdata_arr;

    //         $this->load->view("dataUser", $data);  
    //     } else {  
    //         redirect('Main/invalid');  
    //     }
    // }

    public function dataUser()  
    {  
        if ($this->session->userdata('currently_logged_in'))   
        {  
            //$this->load->view('data');
            //$this->load->model("fetch_model");
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
            //$data['records'] = $this->fetch_model->getAllRecords($config['per_page'], $this->uri->segment(3));
            
            $userid = $this->session->userdata('id');
            //echo $userid; return;
            $data['records'] = $this->fetch_model->getAllRecordsbyuserid( $config['per_page'], $this->uri->segment(3), $userid);

            $tagdata = $this->fetch_model->fetchalltags($id=0);

            $tagdata_str = $tagdata['results'][0]->alltags;
            $tagdata_arr = explode(',', $tagdata_str);
            $tagdata_arr = array_unique($tagdata_arr);

            $data['tagdata'] = $tagdata_arr;

            

            //$data['data'] = $this->fetch_model->fetchtree();
            $data['data'] = $this->fetch_model->fetchtreebyuserid($userid);

            $projectid = 0;
            $data['projectid'] = $projectid;
            $data['projectdata'] = '';

            $this->load->view("dataUser", $data); 

            //$data['result'] = $this->fetch_model->get_all_category_data();
            //$data['result'] = $this->fetch_mod->getAllRecords($config['per_page'], $this->uri->segment(3));
            //$data['records'] = $this->fetch_model->getAllData();
            //$data['result'] = $this->fetch_mod->getAllUsers(); 
            //$data['result'] = $this->fetch_model->get_all_category_data();  


         
            //echo $this->load->view('data', array('data'=>$data),true);   

        


            // $this->pagination->initialize($config);
            // $data['result'] = $this->fetch_model->get_all_category_data($config['per_page'], $this->uri->segment(3));
            // $this->load->view("data", $data);  fetch_model
        } else {  
            redirect('Main/invalid');  
        }  
    }  


    public function users()  
    {  
        

        if ($this->session->userdata('currently_logged_in'))   
        {  
            //$this->load->view('data');
            // $this->load->model("fetch_mod");
            // $udata['records']=$this->fetch_mod->getAllRecords();


        $this->load->library('pagination');
        $this->load->model("fetch_mod");
        $config = array();
        
        $config['base_url'] = site_url('Main/users');
        $config['total_rows'] = $this->db->get('users')->num_rows();
        $config['per_page'] = 3;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);
        $offset = $this->uri->segment(3);
        $data['records'] = $this->fetch_mod->getAllRecords($config['per_page'], $this->uri->segment(3));   

        $data['offset'] = $offset;

        $user_id = 0;
        $data['user_id'] = $user_id;
        $data['userdata'] = '';

            $this->load->model("fetch_model");
            $tagdata = $this->fetch_model->fetchalltagsuser($id=0);

            //print_r($tagdata); return;

            $tagdata_str = $tagdata['results'][0]->alltags;
            $tagdata_arr = explode(',', $tagdata_str);
            $tagdata_arr = array_unique($tagdata_arr);

            $data['tagdata'] = $tagdata_arr;

            $this->load->view("users_view", $data);  
        } else {  
            redirect('Main/invalid');  
        }

    }  

   


    public function invalid()  
    {  
        $this->load->view('invalid');  
    }  
  

    public function login_action()  
    {  
        //$this->load->helper('security');  
        $this->load->library('form_validation');  
  
        $this->form_validation->set_rules('username', 'Username', 'required|trim|callback_validation');  
        $this->form_validation->set_rules('password', 'Password', 'required|trim');    
  
        if ($this->form_validation->run() == False)   
        {  
            
            $this->load->view('login_view'); 
              
        }   
        else {  
            
                if($this->session->userdata('level') == '1'){  
               redirect('Main/data');}
                    
                else if($this->session->userdata('level') == '2'){  
                redirect('Main/dataUser');}

                else redirect('Main');
        } 
    } 
  


     public function validation()  
    {  
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('login_model');  
        $result = $this->login_model->log_in_correctly($username, md5($password));
        if ($result != false)  
        {  
            foreach($result as $user)
                $data = array(
                'id' => $user->ID,
                'username' => $user->username,
                'password' => $user->password,
                'level' => $user->level,
                'currently_logged_in' => 1 
                );
                $this->session->set_userdata($data);

                return true;
        } else {  
            $this->form_validation->set_message('validation', 'Incorrect username/password.');  
            return false;  
        }  
    }  


  
    public function logout()  
    {  
        $this->session->sess_destroy();  
        redirect('Main/login');  
    }  
  

    public function deletesubproject()
    {
        $id = $_POST['id'];
        $this->load->model('Projects_model');
        $result = $this->Projects_model->delete_data($id);
    }  


    // public function ajaxsearchdata()
    // {
    //     $searchBar = $_POST['searchBar'];
    //     $config['per_page'] = 3;
    //     $userid = $this->session->userdata('id');
    //     $this->load->model('fetch_model');
    //     $records = $this->fetch_model->getAllRecordsbyuseridandsearch( $config['per_page'], $userid, $searchBar);

    //     $html='';
    //     $html.='<table id="tableProjects">
    //           <tr>
    //           </tr>';
              
    //           foreach($records['results'] as $row){ 
    //           $html.='<tr>
    //             <td>'.$row->name.'</td>';
    //             $html.='<td width="10%"><a href=" '.base_url().'index.php/ProjectsController/edit_project/'.$row->id.'"><span class="glyphicon glyphicon-pencil"></span></a></td>';
    //             $html.='<td width="6%"><a href="#" class="delete_data" id="'.$row->id.'"><i class="glyphicon glyphicon-trash"></i></a></td>
    //           </tr>';
    //           } 
    //     $html.='</table>
    //     <p><br/><p>';
    //     echo $html;
    // } 

    public function ajaxsearchdata()
    {
        $searchBar = $_POST['searchBar'];
        $userid = $this->session->userdata('id');

        $this->load->model('fetch_model');
        $data = $this->fetch_model->fetchtreebyuseridandsearch($userid, $searchBar);

        $level = $this->session->userdata('level');
        if($level==1){

           $data = $this->fetch_model->fetchtreebyadminidandsearch($userid, $searchBar);
        }else{
            
           $data = $this->fetch_model->fetchtreebyuseridandsearch($userid, $searchBar);
        }

        $html='';

        // $html.='<table id="tableProjects">
        //       <tr>
        //       </tr>';
              
        //       foreach($records['results'] as $row){ 
        //       $html.='<tr>
        //         <td>'.$row->name.'</td>';
        //         $html.='<td width="10%"><a href=" '.base_url().'index.php/ProjectsController/edit_project/'.$row->id.'"><span class="glyphicon glyphicon-pencil"></span></a></td>';
        //         $html.='<td width="6%"><a href="#" class="delete_data" id="'.$row->id.'"><i class="glyphicon glyphicon-trash"></i></a></td>
        //       </tr>';
        //       } 
        // $html.='</table>
        // <p><br/><p>';



          $html.='<h2>My Projects</h2>
            <ul>';
              if($data['numResults']>0){ 
                 foreach($data['results'] as $key => $value ){ 

                    $html.='<li>
                    <a href="'.base_url().'index.php/Main/editdata/'.$value->id.'">'.$value->name.'</a>
                     <a href="'.base_url().'index.php/Main/editdata/'.$value->id.'"><span class="glyphicon glyphicon-edit"></span></a>
                      <a href="'.base_url().'index.php/ProjectsController/subchild/'.$value->id.'"><span class="glyphicon glyphicon-plus"></span></a> <a href="javascript:;" onclick="deleteprojectmodelview('.$value->id.');"><i class="glyphicon glyphicon-trash"></i></a></li>';

                 

                    if($value->subchild['numResults']>0){ 

                    $html.='<ul>';
                      foreach($value->subchild['results'] as $key1 => $value1 ){ 
                  
                         $html.='<li><a href="'.base_url().'index.php/Main/editdata/'.$value1->id.'">'.$value1->name.'</a> <a href="'.base_url().'index.php/Main/editdata/'.$value1->id.'"><span class="glyphicon glyphicon-edit"></span></a> <a href="'.base_url().'index.php/ProjectsController/subchild/'.$value1->id.'"><span class="glyphicon glyphicon-plus"></span></a> <a href="javascript:;" onclick="deleteprojectmodelview('.$value1->id.');"><i class="glyphicon glyphicon-trash"></i></a></li>';

                          if($value1->grandchild['numResults']>0){ 

                               $html.='<ul>';

                                foreach($value1->grandchild['results'] as $key2 => $value2 ){ 

                                   $html.='<li><a href="'.base_url().'index.php/Main/editdata/'.$value2->id.'">'.$value2->name.'</a> <a href="'.base_url().'index.php/Main/editdata/'.$value2->id.'"><span class="glyphicon glyphicon-edit"></span></a> <a href="'.base_url().'index.php/ProjectsController/subchild/'.$value2->id.'"><span class="glyphicon glyphicon-plus"></span></a> <a href="javascript:;" onclick="deleteprojectmodelview('.$value2->id.');"><i class="glyphicon glyphicon-trash"></i></a></li>';
                             
                                } 
                              $html.='</ul>';
                         }

                      }
                    $html.='</ul>';
                    }

                } 
              }
            $html.='</ul>';

        echo $html;
    } 

    public function editdata()  
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


            $this->load->view("editP", $data); 
        } else {  
            redirect('Main/invalid');  
        }  

    }


    


      // public function editpassPR()  
      //   {

            
      //       if ($this->session->userdata('currently_logged_in'))   
      //       {  
      //           $this->load->library('pagination');
      //           $this->load->model("fetch_model");
      //           $this->load->model("fetch_mod");
      //           $this->load->model("projects_model");

      //           $config = array();            
      //           $config['base_url'] = site_url('Main/data');
      //           $config['total_rows'] = $this->db->get('projects')->num_rows();
      //           $config['per_page'] = 3;
      //           $config['full_tag_open'] = '<div id="pagination">';
      //           $config['full_tag_close'] = '</div>';
      //           $this->pagination->initialize($config);
                
      //           $userid = $this->session->userdata('id');
      //           $data['records'] = $this->fetch_model->getAllRecordsbyuserid( $config['per_page'], $this->uri->segment(3), $userid);

                
      //           $level = $this->session->userdata('level');
      //           if($level==1){

      //              $data['data'] = $this->fetch_model->fetchtreebyadminid();
      //           }else{
                    
      //              $data['data'] = $this->fetch_model->fetchtreebyuserid($userid);
      //           }

      //           //$data['data'] = $this->fetch_model->fetchtreebyuserid($userid);
                
      //           $projectid = $this->uri->segment(3);
      //           $data['projectid'] = $projectid;
      //           $data['projectdata'] = $this->fetch_model->get_project_update($projectid);

      //           //$data['tagdata'] = $this->fetch_model->fetchalltags($id=0);
      //           $tagdata = $this->fetch_model->fetchalltags($id=0);

      //           $tagdata_str = $tagdata['results'][0]->alltags;
      //           $tagdata_arr = explode(',', $tagdata_str);
      //           $tagdata_arr = array_unique($tagdata_arr);

      //           $data['tagdata'] = $tagdata_arr;


      //           $this->load->view("change_project_pass", $data); 
      //       } else {  
      //           redirect('Main/invalid');  
      //       }  

      //   }

      //    public function editpassPR2()  
      //   {

            
      //       if ($this->session->userdata('currently_logged_in'))   
      //       {  
      //           $this->load->library('pagination');
      //           $this->load->model("fetch_model");
      //           $this->load->model("fetch_mod");
      //           $this->load->model("projects_model");

      //           $config = array();            
      //           $config['base_url'] = site_url('Main/data');
      //           $config['total_rows'] = $this->db->get('projects')->num_rows();
      //           $config['per_page'] = 3;
      //           $config['full_tag_open'] = '<div id="pagination">';
      //           $config['full_tag_close'] = '</div>';
      //           $this->pagination->initialize($config);
                
      //           $userid = $this->session->userdata('id');
      //           $data['records'] = $this->fetch_model->getAllRecordsbyuserid( $config['per_page'], $this->uri->segment(3), $userid);

                
      //           $level = $this->session->userdata('level');
      //           if($level==1){

      //              $data['data'] = $this->fetch_model->fetchtreebyadminid();
      //           }else{
                    
      //              $data['data'] = $this->fetch_model->fetchtreebyuserid($userid);
      //           }

      //           //$data['data'] = $this->fetch_model->fetchtreebyuserid($userid);
                
      //           $projectid = $this->uri->segment(3);
      //           $data['projectid'] = $projectid;
      //           $data['projectdata'] = $this->fetch_model->get_project_update($projectid);

      //           //$data['tagdata'] = $this->fetch_model->fetchalltags($id=0);
      //           $tagdata = $this->fetch_model->fetchalltags($id=0);

      //           $tagdata_str = $tagdata['results'][0]->alltags;
      //           $tagdata_arr = explode(',', $tagdata_str);
      //           $tagdata_arr = array_unique($tagdata_arr);

      //           $data['tagdata'] = $tagdata_arr;


      //           $this->load->view("change_project_pass2", $data); 
      //       } else {  
      //           redirect('Main/invalid');  
      //       }  

      //   }



    public function editdata2()  
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


            $this->load->view("edit_project", $data); 
        } else {  
            redirect('Main/invalid');  
        }  

    }


         public function select_project()  
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


                $this->load->view("select_project", $data); 
            } else {  
                redirect('Main/invalid');  
            }  

        }

    
       public function select_project2()  
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


                $this->load->view("select_project2", $data); 
            } else {  
                redirect('Main/invalid');  
            }  

        }


    public function addnewtag()
    {
        $tagname = $_POST['tagname'];
        $multipletags = $_POST['multipletags'];
        $multipletags = implode(',', $multipletags);

        $this->load->model('Projects_model');
        $insertid = $this->Projects_model->addnewtag($tagname);

        $this->load->model('fetch_model');
        $tagdata = $this->fetch_model->fetchalltags($id=0);

        $tagdata_str = $tagdata['results'][0]->alltags;
        $tagdata_arr = explode(',', $tagdata_str);
        $tagdata_arr = array_unique($tagdata_arr);

        $html = $this->load->view('ajaxdropdown',array('tagdata'=>$tagdata_arr,'multipletags'=>$multipletags),true);

        echo $insertid.'###'.$html;
    }


    public function ajaxsearchdatauser()
    {
        $searchBar = $_POST['searchBar'];
        $userid = $this->session->userdata('id');

        $this->load->model('fetch_model');
        $records = $this->fetch_model->fetchuserbysearch($searchBar);

        $html='';
        $offset ='';

        $html.='<div class="hr-line"></div>
                <table id="tableUsers">
                <tr></tr>';
                 
        if($records['numResults']>0){
            foreach($records['results'] as $row){
                  
              // $html.='<tr><td><a href="javascript:;" onclick="myclickevent('.$row->customerName.','.$row->customerName.');">'.$row->customerName.'</a></td>';

               $html.='<tr><td><a href="'.base_url().'index.php/UsersController/edit_userdata/'.$row->ID.'/'.$offset.'">'.$row->customerName.'</a> </td>';

               $html.='<td width="10%"><a href="'.base_url().'index.php/UsersController/edit_passdata/'.$row->ID.'/'.$offset.'"><span class="glyphicon glyphicon-lock"></span></a> </td>';

               $html.='<td width="10%">
                <a href="'.base_url().'index.php/UsersController/edit_userdata/'.$row->ID.'/'.$offset.'"><span class="glyphicon glyphicon-edit"></span></a>                 
                </td>';

               $html.='<td width="6%"><a href="#" class="delete_data" ID="'.$row->ID.'"> <i class="glyphicon glyphicon-trash"></i></a></td>  
              </tr>';
            }
        }
          $html.='</table>';

        echo $html;
    } 


    public function deleteprojectmodelview()
    {
        $headertext  = $_POST['headertext'];
        $msgbody  = $_POST['msgbody'];
        $btnname  = $_POST['btnname'];
        $onclick  = $_POST['onclick'];

        $content = $this->load->view('confirmpopup', array('headertext'=>$headertext,'msgbody'=>$msgbody,'btnname'=>$btnname,'onclick'=>$onclick), true);
        echo $content;
    }

    public function deleteprojectbyid()
    {
        $id  = $_POST['id'];
        $this->load->model("projects_model");
        $this->projects_model->delete_data($id);
    }

    public function delete_data()
    {
        $ID = $_POST['id'];
        $this->load->model("users_model");
        $this->users_model->delete_data($ID);
    }


}  
?>  