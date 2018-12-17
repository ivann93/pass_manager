<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class UsersController extends CI_Controller {  
  
 

    public function form_validation()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules("username", "Username", 'required');
        $this->form_validation->set_rules("password", "Password", 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        //$this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]|min_length[6]|alpha_numeric|callback_password_check');
        //$this->form_validation->set_rules("tag", "Tag", 'required');
        $this->form_validation->set_rules("customerName", "CustomerName", 'required');
        $this->form_validation->set_rules("level", "Level");

        $this->form_validation->set_rules('multipletags', 'multipletags');
        
        
        if($this->form_validation->run())
        {

            $alltags = $this->input->post("multipletags");
            $alltagsstr ='';
            foreach ($alltags as $value) {
                
                $alltagsstr .=$value.',';
            }
            $alltagsstr = rtrim($alltagsstr,',');

            $this->load->model("users_model");
            $data = array(
                "username" =>$this->input->post("username"),
                "password" =>md5($this->input->post("password")),
                "confirm_password" =>md5($this->input->post("confirm_password")),
                //"tag" =>$this->input->post("tag"),
                "customerName" =>$this->input->post("customerName"),
                "level" =>$this->input->post("level"),
                "tag" =>$alltagsstr
                );
            $this->users_model->insert_data($data);

            redirect(base_url() . "/index.php/UsersController/inserted");
        }

        else {
            $this->index();
        }
    }


        public function inserted()
        {
//            $this->index();
            redirect(base_url()."/index.php/Main/users");
        }
  	

        public function delete_data()
        {
            $ID = $this->uri->segment(3);
            $this->load->model("users_model");
            $this->users_model->delete_data($ID);
            redirect(base_url()."/index.php/UsersController/deleted");
        }

        public function deleted()
        {
            redirect(base_url()."/index.php/Main/users");
        }

        public function change_pass($ID)
        {
            //$title['title'] = 'Edit User';
            //$data['data'] = 'Edit User';
            $this->load->model('fetch_mod');
            $data['user'] = $this->fetch_mod->get_user_update($ID);
                
            $this->load->view('change_pass', $data);
        }

      public function edit_user($ID)
        {
            //$title['title'] = 'Edit User';
            //$data['data'] = 'Edit User';
            $this->load->model('fetch_mod');
            $data['user'] = $this->fetch_mod->get_user_update($ID);
                
            $this->load->view('edit_user', $data);
        }

        public function update()
        {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'username', 'required|trim');
            $this->form_validation->set_rules('password', 'password', 'required|trim');
            $this->form_validation->set_rules('tag', 'tag', 'required|trim');
            $this->form_validation->set_rules('level', 'level', 'required|trim');
            $ID = $this->input->post('ID');
            if($this->form_validation->run()==false)
            {
                $this->edit_user($ID);
            }
            else{
                $user = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                    'tag' => $this->input->post('tag'),
                    'level' => $this->input->post('level')

                    );
                $this->load->model('fetch_mod');
                $this->fetch_mod->update($user, $ID);
                redirect(base_url() . "/index.php/UsersController/updated");
                }
        }

        public function updated()
        {
//            $this->index();
            redirect(base_url()."/index.php/Main/users");
        }


    public function edit_userdata()  
    {  
        
        if ($this->session->userdata('currently_logged_in'))   
        {  

        $this->load->library('pagination');
        $this->load->model("fetch_mod");
        $config = array();
        
        $config['base_url'] = site_url('Main/users');
        $config['total_rows'] = $this->db->get('users')->num_rows();
        $config['per_page'] = 3;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);
        $data['records'] = $this->fetch_mod->getAllRecords($config['per_page'], $this->uri->segment(4));

        $user_id = $this->uri->segment(3);
        $data['user_id'] = $user_id;

        $offset = $this->uri->segment(4);
        $data['offset'] = $offset;

        $data['userdata'] = $this->fetch_mod->get_user_update($user_id);


            $this->load->model("fetch_model");
            $tagdata = $this->fetch_model->fetchalltagsuser($id=0);

            //print_r($tagdata); return;

            $tagdata_str = $tagdata['results'][0]->alltags;
            $tagdata_arr = explode(',', $tagdata_str);
            $tagdata_arr = array_unique($tagdata_arr);

            $data['tagdata'] = $tagdata_arr;

            $this->load->view("editU", $data);  
        } else {  
            redirect('Main/invalid');  
        }

    }    

    public function edit_passdata()  
    {  
        
        if ($this->session->userdata('currently_logged_in'))   
        {  

        $this->load->library('pagination');
        $this->load->model("fetch_mod");
        $config = array();
        
        $config['base_url'] = site_url('Main/users');
        $config['total_rows'] = $this->db->get('users')->num_rows();
        $config['per_page'] = 3;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);
        $data['records'] = $this->fetch_mod->getAllRecords($config['per_page'], $this->uri->segment(4));

        $user_id = $this->uri->segment(3);
        $data['user_id'] = $user_id;

        $offset = $this->uri->segment(4);
        $data['offset'] = $offset;

        $data['userdata'] = $this->fetch_mod->get_user_update($user_id);


            $this->load->model("fetch_model");
            $tagdata = $this->fetch_model->fetchalltagsuser($id=0);

            //print_r($tagdata); return;

            $tagdata_str = $tagdata['results'][0]->alltags;
            $tagdata_arr = explode(',', $tagdata_str);
            $tagdata_arr = array_unique($tagdata_arr);

            $data['tagdata'] = $tagdata_arr;

            $this->load->view("change_pass", $data);  
        } else {  
            redirect('Main/invalid');  
        }

    }   


    public function form_validation_edit()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules("username", "Username", 'required');
        $this->form_validation->set_rules("password", "Password", 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        //$this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]|min_length[6]|alpha_numeric|callback_password_check');
        //$this->form_validation->set_rules("tag", "Tag", 'required');
        $this->form_validation->set_rules("customerName", "CustomerName", 'required');
        $this->form_validation->set_rules("level", "Level");
        $this->form_validation->set_rules("user_id", "user_id");
        $this->form_validation->set_rules("multipletags", "multipletags");
        
        
        if($this->form_validation->run())
        {

            $alltags = $this->input->post("multipletags");
            $alltagsstr ='';
            foreach ($alltags as $value) {
                
                $alltagsstr .=$value.',';
            }
            $alltagsstr = rtrim($alltagsstr,',');

            $this->load->model("users_model");
            $data = array(
                "username" =>$this->input->post("username"),
                //"password" =>md5($this->input->post("password")),
                "password" =>$this->input->post("password"),
                //"confirm_password" =>md5($this->input->post("confirm_password")),
                "confirm_password" =>$this->input->post("confirm_password"),
                //"tag" =>$this->input->post("tag"),
                "customerName" =>$this->input->post("customerName"),
                "level" =>$this->input->post("level"),
                "tag" =>$alltagsstr,
                );

            $id = $this->input->post("user_id");

            $this->load->model("fetch_mod");

            $this->fetch_mod->update($data,$id);

            //redirect(base_url() . "/index.php/UsersController/inserted");
            redirect(base_url() . "index.php/UsersController/edit_userdata/".$id."");

        }

        else {
            $this->index();
        }
    }


    public function form_validation_editPass()
    {
        $this->load->library('form_validation');

       
        $this->form_validation->set_rules("password", "Password", 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        //$this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]|min_length[6]|alpha_numeric|callback_password_check');
        //$this->form_validation->set_rules("tag", "Tag", 'required');
  
        
        
        if($this->form_validation->run())
        {

           
            $this->load->model("users_model");
            $data = array(
       
                //"password" =>md5($this->input->post("password")),
                "password" =>$this->input->post("password"),
                //"confirm_password" =>md5($this->input->post("confirm_password")),
                "confirm_password" =>$this->input->post("confirm_password"),
                //"tag" =>$this->input->post("tag"),
             
                );

            $id = $this->input->post("user_id");

            $this->load->model("fetch_mod");

            $this->fetch_mod->update($data,$id);

            //redirect(base_url() . "/index.php/UsersController/inserted");

            redirect(base_url() . "index.php/UsersController/edit_passdata/".$id."");

        }

        else {
           (base_url()."/index.php/Main/dataUser");
        }
    }




}  
?>  