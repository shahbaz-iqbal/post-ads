<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
          $res = $this->Welcomes->first_six_post();
          $vehical = $this->Welcomes->all_vehical();
          $Rent = $this->Welcomes->all_Rent();
          $Pets = $this->Welcomes->all_Pets();
          $Personal = $this->Welcomes->all_Personal();
          $For_Sale = $this->Welcomes->all_For_Sale();
          $Jobs = $this->Welcomes->all_Jobs();
          $Real_Estate = $this->Welcomes->all_Real_Estate();
          $Services = $this->Welcomes->all_Services();
          $Comunity = $this->Welcomes->all_Comunity();

           $passdata = [
            'data' => $res,
            'vehical' => $vehical,
            'Rent' => $Rent,
            'Pets' => $Pets,
            'Personal' => $Personal,
            'For_Sale' => $For_Sale,
            'Jobs' => $Jobs,
            'Real_Estate' => $Real_Estate,
            'Services' => $Services,
            'Comunity' => $Comunity
        ];
        $this->load->view('index',$passdata);
    }

    public function about() {
                  $vehical = $this->Welcomes->all_vehical();
          $Rent = $this->Welcomes->all_Rent();
          $Pets = $this->Welcomes->all_Pets();
          $Personal = $this->Welcomes->all_Personal();
          $For_Sale = $this->Welcomes->all_For_Sale();
          $Jobs = $this->Welcomes->all_Jobs();
          $Real_Estate = $this->Welcomes->all_Real_Estate();
          $Services = $this->Welcomes->all_Services();
          $Comunity = $this->Welcomes->all_Comunity();

           $passdata = [
            'vehical' => $vehical,
            'Rent' => $Rent,
            'Pets' => $Pets,
            'Personal' => $Personal,
            'For_Sale' => $For_Sale,
            'Jobs' => $Jobs,
            'Real_Estate' => $Real_Estate,
            'Services' => $Services,
            'Comunity' => $Comunity
        ];
        $this->load->view('about',$passdata);
    }
    public function menu() {
                 
          $vehical = $this->Welcomes->all_vehical();
          $Rent = $this->Welcomes->all_Rent();
          $Pets = $this->Welcomes->all_Pets();
          $Personal = $this->Welcomes->all_Personal();
          $For_Sale = $this->Welcomes->all_For_Sale();
          $Jobs = $this->Welcomes->all_Jobs();
          $Real_Estate = $this->Welcomes->all_Real_Estate();
          $Services = $this->Welcomes->all_Services();
          $Comunity = $this->Welcomes->all_Comunity();
           $passdata = [
            'vehical' => $vehical,
            'Rent' => $Rent,
            'Pets' => $Pets,
            'Personal' => $Personal,
            'For_Sale' => $For_Sale,
            'Jobs' => $Jobs,
            'Real_Estate' => $Real_Estate,
            'Services' => $Services,
            'Comunity' => $Comunity
        ];
          $this->session->set_userdata($passdata);
       // $this->load->view('menubar');
       redirect('Welcome/memnu');
    }
    public function memnu(){
        $this->load->view('menubar');
    }

    public function blog() {
                  $vehical = $this->Welcomes->all_vehical();
          $Rent = $this->Welcomes->all_Rent();
          $Pets = $this->Welcomes->all_Pets();
          $Personal = $this->Welcomes->all_Personal();
          $For_Sale = $this->Welcomes->all_For_Sale();
          $Jobs = $this->Welcomes->all_Jobs();
          $Real_Estate = $this->Welcomes->all_Real_Estate();
          $Services = $this->Welcomes->all_Services();
          $Comunity = $this->Welcomes->all_Comunity();

           $passdata = [
            'vehical' => $vehical,
            'Rent' => $Rent,
            'Pets' => $Pets,
            'Personal' => $Personal,
            'For_Sale' => $For_Sale,
            'Jobs' => $Jobs,
            'Real_Estate' => $Real_Estate,
            'Services' => $Services,
            'Comunity' => $Comunity
        ];
        $this->load->view('blog',$passdata);
    }

    public function contact() {
        $this->load->view('contact');
    }
    public function add_contact(){
         $user['firstName'] = $this->input->post('firstName');
        $user['lastName'] = $this->input->post('lastName');
        $user['email'] = $this->input->post('email');
        $user['subject'] = $this->input->post('subject');
        $user['massage'] = $this->input->post('message');
        $res = $this->Welcomes->addContact($user);

        if ($res) {
            $this->session->set_flashdata('add', 'Successfully Send, We Will Contact You Later...');
            $this->session->set_flashdata('alert-class', 'alert-success');
            redirect('welcome/contact', 'refresh');
        }
    }

    public function listings() {
          $search_type = $this->input->post('search_type');
        $search = $this->input->post('search');
        if($search_type == 0 && $search_type != "") {
            $this->session->unset_userdata('realstate_search');
            $search = "";
        } else {
            if($search != "") {
                $this->session->set_userdata(['realstate_search' => $search]);
            } else {
                if(isset($this->session->realstate_search) && !empty($this->session->realstate_search)) {
                    $search = $this->session->realstate_search;
                }
            }
        }
        $coudtRes = $this->Welcomes->all_listings_info_count($search);
        $config = array();
        $config["base_url"] = base_url() . "Welcome/listings";
        $config["total_rows"] = $coudtRes;
        $config["per_page"] = 4;
        $config["uri_segment"] = 3;
        
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '>';
        $config['next_tag_open'] = '<li><i class="fa fa-long-arrow-right"></i>';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<';
        $config['prev_tag_open'] = '<li><i class="fa fa-long-arrow-left"></i>';
        $config['prev_tag_close'] = '</li>';
        
        $this->pagination->initialize($config);
        $pagination =  $this->pagination->create_links();
        
          $vehical = $this->Welcomes->all_vehical();
          $Rent = $this->Welcomes->all_Rent();
          $Pets = $this->Welcomes->all_Pets();
          $Personal = $this->Welcomes->all_Personal();
          $For_Sale = $this->Welcomes->all_For_Sale();
          $Jobs = $this->Welcomes->all_Jobs();
          $Real_Estate = $this->Welcomes->all_Real_Estate();
          $Services = $this->Welcomes->all_Services();
          $Comunity = $this->Welcomes->all_Comunity();
//         $res = $this->Welcomes->all_listings_info();
         
            $limit = $config['per_page'];
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $res = $this->Welcomes->all_listings_info($page,$limit, $search);
        $passdata = [
             'pagination' => $pagination,
            'data' => $res,
             'vehical' => $vehical,
            'Rent' => $Rent,
            'Pets' => $Pets,
            'Personal' => $Personal,
            'For_Sale' => $For_Sale,
            'Jobs' => $Jobs,
            'Real_Estate' => $Real_Estate,
            'Services' => $Services,
            'Comunity' => $Comunity
        ];
        $this->load->view('listings',$passdata);
    }

    public function login() {
        $this->load->view('login');
    }

    public function register() {
        $this->load->view('register');
    }

    public function user_register() {
        $user['email'] = $this->input->post('email');
        $user['passward'] = $this->input->post('pass');
        $res = $this->Welcomes->addUser($user);

        if ($res) {
            $this->session->set_flashdata('add', 'Successfully Resistered, Now Your Can login with your Account');
            $this->session->set_flashdata('alert-class', 'alert-success');
            redirect('welcome/register', 'refresh');
        }
    }

    public function login_user() {
        $data['email'] = $this->input->post('email');
        $data['pass'] = $this->input->post('pass');
//        $user_login = [
//            'email' => $email,
//            'passward' => $pass
//        ];
        $res = $this->Welcomes->get_users($data);
        if ($res) {
            $newdata = array( 
                'logged_in' => TRUE,
               // 'user_type' => 'admin'
            );
            $this->session->set_userdata($newdata);
            redirect('Welcome/index', 'refresh');
        } else {

                $this->session->set_flashdata('error', 'Invalid Email Password');

                redirect('welcome/login');
            }
        
    }
    
    public function search() {
        $search = $this->input->post('search');  
         $coudtRes = $this->Welcomes->search_page_count($search);
         echo "<pre>";
         print_r($coudtRes);
         echo "</pre>";
         die;
        $config = array();
        $config["base_url"] = base_url() . "Welcome/listings";
        $config["total_rows"] = $coudtRes;
        $config["per_page"] = 4;
        $config["uri_segment"] = 3;
        
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '>';
        $config['next_tag_open'] = '<li><i class="fa fa-long-arrow-right"></i>';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<';
        $config['prev_tag_open'] = '<li><i class="fa fa-long-arrow-left"></i>';
        $config['prev_tag_close'] = '</li>';
        
        $this->pagination->initialize($config);
        $pagination =  $this->pagination->create_links();
        
        
        
        
        $categoryId = $this->input->post('category_id');   
        $subCategoryId = $this->input->post('sub_category_id');   
        $res = $this->Welcomes->search_post($search,$categoryId,$subCategoryId);
        $vehical = $this->Welcomes->all_vehical();
        $Rent = $this->Welcomes->all_Rent();
        $Pets = $this->Welcomes->all_Pets();
        $Personal = $this->Welcomes->all_Personal();
        $For_Sale = $this->Welcomes->all_For_Sale();
        $Jobs = $this->Welcomes->all_Jobs();
        $Real_Estate = $this->Welcomes->all_Real_Estate();
        $Services = $this->Welcomes->all_Services();
        $Comunity = $this->Welcomes->all_Comunity();

        $passdata = [
          'data' => $res,
          'vehical' => $vehical,
          'Rent' => $Rent,
          'Pets' => $Pets,
          'Personal' => $Personal,
          'For_Sale' => $For_Sale,
          'Jobs' => $Jobs,
          'Real_Estate' => $Real_Estate,
          'Services' => $Services,
          'Comunity' => $Comunity
        ];
        $this->load->view('category/search',$passdata);
    }

}
