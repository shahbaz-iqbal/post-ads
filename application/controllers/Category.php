<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function vehicals() {
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
        $coudtRes = $this->Categorys->all_vehicals_info_count($search);
        $config = array();
        $config["base_url"] = base_url() . "category/vehicals";
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
        $pagination = $this->pagination->create_links();

        $vehical = $this->Welcomes->all_vehical();
        $Rent = $this->Welcomes->all_Rent();
        $Pets = $this->Welcomes->all_Pets();
        $Personal = $this->Welcomes->all_Personal();
        $For_Sale = $this->Welcomes->all_For_Sale();
        $Jobs = $this->Welcomes->all_Jobs();
        $Real_Estate = $this->Welcomes->all_Real_Estate();
        $Services = $this->Welcomes->all_Services();
        $Comunity = $this->Welcomes->all_Comunity();

        $limit = $config['per_page'];
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $res = $this->Categorys->all_vehicals_info($page, $limit, $search);
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
        $this->load->view('category/vehical/vehical', $passdata);
    }

    public function vehical_detail() {
        $id = $this->uri->segment(3);
        $res = $this->Categorys->detail($id);
        $vehical = $this->Welcomes->all_vehical();
        $Rent = $this->Welcomes->all_Rent();
        $Pets = $this->Welcomes->all_Pets();
        $Personal = $this->Welcomes->all_Personal();
        $For_Sale = $this->Welcomes->all_For_Sale();
        $Jobs = $this->Welcomes->all_Jobs();
        $Real_Estate = $this->Welcomes->all_Real_Estate();
        $Services = $this->Welcomes->all_Services();
        $Comunity = $this->Welcomes->all_Comunity();
        foreach ($res as $item) {
            $categ = $item->category;
        }
        $recent = $this->Categorys->get_recent($categ);
        $passdata = [
            'recent' => $recent,
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
        $this->load->view('category/detail', $passdata);
    }

    public function comunity() {
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
        $coudtRes = $this->Categorys->all_comunity_info_count($search);
        $config = array();
        $config["base_url"] = base_url() . "category/comunity";
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
        $pagination = $this->pagination->create_links();

        $vehical = $this->Welcomes->all_vehical();
        $Rent = $this->Welcomes->all_Rent();
        $Pets = $this->Welcomes->all_Pets();
        $Personal = $this->Welcomes->all_Personal();
        $For_Sale = $this->Welcomes->all_For_Sale();
        $Jobs = $this->Welcomes->all_Jobs();
        $Real_Estate = $this->Welcomes->all_Real_Estate();
        $Services = $this->Welcomes->all_Services();
        $Comunity = $this->Welcomes->all_Comunity();

        $limit = $config['per_page'];
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $res = $this->Categorys->all_comunity_info($page, $limit, $search);

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
        $this->load->view('category/community/community', $passdata);
    }

    public function jobs() {
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
        $coudtRes = $this->Categorys->all_jobs_info_count($search);
        $config = array();
        $config["base_url"] = base_url() . "category/jobs";
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
        $pagination = $this->pagination->create_links();

        $vehical = $this->Welcomes->all_vehical();
        $Rent = $this->Welcomes->all_Rent();
        $Pets = $this->Welcomes->all_Pets();
        $Personal = $this->Welcomes->all_Personal();
        $For_Sale = $this->Welcomes->all_For_Sale();
        $Jobs = $this->Welcomes->all_Jobs();
        $Real_Estate = $this->Welcomes->all_Real_Estate();
        $Services = $this->Welcomes->all_Services();
        $Comunity = $this->Welcomes->all_Comunity();

        $limit = $config['per_page'];
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $res = $this->Categorys->all_jobs_info($page, $limit, $search);

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
        $this->load->view('category/jobs/jobs', $passdata);
    }

    public function personal() {
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
        $coudtRes = $this->Categorys->all_personal_info_count($search);
        $config = array();
        $config["base_url"] = base_url() . "category/personal";
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
        $pagination = $this->pagination->create_links();

        $vehical = $this->Welcomes->all_vehical();
        $Rent = $this->Welcomes->all_Rent();
        $Pets = $this->Welcomes->all_Pets();
        $Personal = $this->Welcomes->all_Personal();
        $For_Sale = $this->Welcomes->all_For_Sale();
        $Jobs = $this->Welcomes->all_Jobs();
        $Real_Estate = $this->Welcomes->all_Real_Estate();
        $Services = $this->Welcomes->all_Services();
        $Comunity = $this->Welcomes->all_Comunity();

        $limit = $config['per_page'];
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $res = $this->Categorys->all_personal_info($page, $limit, $search);

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
        $this->load->view('category/personal/personal', $passdata);
    }

    public function pets() {
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
        $coudtRes = $this->Categorys->all_pets_info_count($search);
        $config = array();
        $config["base_url"] = base_url() . "category/pets";
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
        $pagination = $this->pagination->create_links();

        $vehical = $this->Welcomes->all_vehical();
        $Rent = $this->Welcomes->all_Rent();
        $Pets = $this->Welcomes->all_Pets();
        $Personal = $this->Welcomes->all_Personal();
        $For_Sale = $this->Welcomes->all_For_Sale();
        $Jobs = $this->Welcomes->all_Jobs();
        $Real_Estate = $this->Welcomes->all_Real_Estate();
        $Services = $this->Welcomes->all_Services();
        $Comunity = $this->Welcomes->all_Comunity();

        $limit = $config['per_page'];
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $res = $this->Categorys->all_pets_info($page, $limit, $search);

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
        $this->load->view('category/pets/pets', $passdata);
    }

    public function real_estate() {
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
        $coudtRes = $this->Categorys->all_real_estate_info_count($search);
        $config = array();
        $config["base_url"] = base_url() . "category/real_estate";
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
        $pagination = $this->pagination->create_links();

        $vehical = $this->Welcomes->all_vehical();
        $Rent = $this->Welcomes->all_Rent();
        $Pets = $this->Welcomes->all_Pets();
        $Personal = $this->Welcomes->all_Personal();
        $For_Sale = $this->Welcomes->all_For_Sale();
        $Jobs = $this->Welcomes->all_Jobs();
        $Real_Estate = $this->Welcomes->all_Real_Estate();
        $Services = $this->Welcomes->all_Services();
        $Comunity = $this->Welcomes->all_Comunity();

        $limit = $config['per_page'];
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $res = $this->Categorys->all_real_estate_info($page, $limit, $search);
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
        $this->load->view('category/real_estate/real_estate', $passdata);
    }

    public function rent() {
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
        $coudtRes = $this->Categorys->all_rent_info_count($search);
        $config = array();
        $config["base_url"] = base_url() . "category/rent";
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
        $pagination = $this->pagination->create_links();

        $vehical = $this->Welcomes->all_vehical();
        $Rent = $this->Welcomes->all_Rent();
        $Pets = $this->Welcomes->all_Pets();
        $Personal = $this->Welcomes->all_Personal();
        $For_Sale = $this->Welcomes->all_For_Sale();
        $Jobs = $this->Welcomes->all_Jobs();
        $Real_Estate = $this->Welcomes->all_Real_Estate();
        $Services = $this->Welcomes->all_Services();
        $Comunity = $this->Welcomes->all_Comunity();

        $limit = $config['per_page'];
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $res = $this->Categorys->all_rent_info($page, $limit, $search);

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
        $this->load->view('category/rent/rent', $passdata);
    }

    public function sale_item() {
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
        $coudtRes = $this->Categorys->sale_count($search);
        $config = array();
        $config["base_url"] = base_url() . "category/sale_item";
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
        $pagination = $this->pagination->create_links();

        $vehical = $this->Welcomes->all_vehical();
        $Rent = $this->Welcomes->all_Rent();
        $Pets = $this->Welcomes->all_Pets();
        $Personal = $this->Welcomes->all_Personal();
        $For_Sale = $this->Welcomes->all_For_Sale();
        $Jobs = $this->Welcomes->all_Jobs();
        $Real_Estate = $this->Welcomes->all_Real_Estate();
        $Services = $this->Welcomes->all_Services();
        $Comunity = $this->Welcomes->all_Comunity();

        $limit = $config['per_page'];
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $res = $this->Categorys->sale_item($page, $limit, $search);

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
        $this->load->view('category/sale_item/sale_items', $passdata);
    }

    public function services() {
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
        $coudtRes = $this->Categorys->services_count($search);
        $config = array();
        $config["base_url"] = base_url() . "category/services";
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
        $pagination = $this->pagination->create_links();

        $vehical = $this->Welcomes->all_vehical();
        $Rent = $this->Welcomes->all_Rent();
        $Pets = $this->Welcomes->all_Pets();
        $Personal = $this->Welcomes->all_Personal();
        $For_Sale = $this->Welcomes->all_For_Sale();
        $Jobs = $this->Welcomes->all_Jobs();
        $Real_Estate = $this->Welcomes->all_Real_Estate();
        $Services = $this->Welcomes->all_Services();
        $Comunity = $this->Welcomes->all_Comunity();

        $limit = $config['per_page'];
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $res = $this->Categorys->services($page, $limit, $search);

        $passdata = [
            'pagination' => $pagination, 'pagination' => $pagination,
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
        $this->load->view('category/services/services', $passdata);
    }

}
