<?php

Class Categorys extends CI_Model {

    public function all_vehicals_info($page,$limit,$search) {
        $this->db->where('category','Vehicals');
        if($search != "") {
            $this->db->like('title',$search);
        }
        $query = $this->db->get('post', $limit, $page);
        $result = $query->result();
        return $result;
    }
     public function all_vehicals_info_count($search) {
        $this->db->from('post');
        $this->db->where('category','Vehicals');
        if($search != "") {
            $this->db->like('title',$search);
        }
        $result = $this->db->count_all_results();
        return $result;
    }
    public function detail($id) {
         $this->db->where('id',$id);
        $query = $this->db->get('post'); 
        $result = $query->result();
        return $result;
    }
    public function get_recent($categ) {
         $this->db->where('category',$categ);
        $query = $this->db->get('post' , 3); 
        $result = $query->result();
        return $result;
    }
    public function all_comunity_info($page,$limit,$search) {
        $this->db->where('category','Comunity');
        if($search != "") {
            $this->db->like('title',$search);
        }
        $query = $this->db->get('post', $limit, $page);
        $result = $query->result();
        return $result;
    }
     public function all_comunity_info_count($search) {
        $this->db->from('post');
        $this->db->where('category','Comunity');
        if($search != "") {
            $this->db->like('title',$search);
        }
        $result = $this->db->count_all_results();
        return $result;
    }
    public function all_jobs_info($page,$limit,$search) {
        $this->db->where('category','Jobs');
        if($search != "") {
            $this->db->like('title',$search);
        }
        $query = $this->db->get('post', $limit, $page);
        $result = $query->result();
        return $result;
    }
     public function all_jobs_info_count($search) {
        $this->db->from('post');
        $this->db->where('category','Jobs');
        if($search != "") {
            $this->db->like('title',$search);
        }
        $result = $this->db->count_all_results();
        return $result;
    }
    public function all_personal_info($page,$limit,$search) {
        $this->db->where('category','Personal');
        if($search != "") {
            $this->db->like('title',$search);
        }
        $query = $this->db->get('post', $limit, $page);
        $result = $query->result();
        return $result;
    }
     public function all_personal_info_count($search) {
        $this->db->from('post');
        $this->db->where('category','Personal');
        if($search != "") {
            $this->db->like('title',$search);
        }
        $result = $this->db->count_all_results();
        return $result;
    }
    public function all_pets_info($page,$limit,$search) {
        $this->db->where('category','Pets');
        if($search != "") {
            $this->db->like('title',$search);
        }
        $query = $this->db->get('post', $limit, $page);
        $result = $query->result();
        return $result;
    }
     public function all_pets_info_count($search) {
        $this->db->from('post');
        $this->db->where('category','Pets');
        if($search != "") {
            $this->db->like('title',$search);
        }
        $result = $this->db->count_all_results();
        return $result;
    }
    public function all_real_estate_info_count($search) {
        $this->db->from('post');
        $this->db->where('category','Real_Estate');
        if($search != "") {
            $this->db->like('title',$search);
        }
        $result = $this->db->count_all_results();
        return $result;
    }
    public function all_real_estate_info($page,$limit,$search) {
        $this->db->where('category','Real_Estate');
        if($search != "") {
            $this->db->like('title',$search);
        }
        $query = $this->db->get('post', $limit, $page);
        $result = $query->result();
        return $result;
    }
    public function all_rent_info($page,$limit,$search) {
        $this->db->where('category','Rent');
        if($search != "") {
            $this->db->like('title',$search);
        }
        $query = $this->db->get('post', $limit, $page);
        $result = $query->result();
        return $result;
    }
     public function all_rent_info_count($search) {
        $this->db->from('post');
        $this->db->where('category','Rent');
        if($search != "") {
            $this->db->like('title',$search);
        }
        $result = $this->db->count_all_results();
        return $result;
    }
     public function sale_item($page,$limit,$search) {
        $this->db->where('category','For_Sale');
        if($search != "") {
            $this->db->like('title',$search);
        }
        $query = $this->db->get('post', $limit, $page);
        $result = $query->result();
        return $result;
    }
     public function sale_count($search) {
        $this->db->from('post');
        $this->db->where('category','For_Sale');
        if($search != "") {
            $this->db->like('title',$search);
        }
        $result = $this->db->count_all_results();
        return $result;
    }
    public function services($page,$limit,$search) {
        $this->db->where('category','Services');
        if($search != "") {
            $this->db->like('title',$search);
        }
        $query = $this->db->get('post', $limit, $page);
        $result = $query->result();
        return $result;
    }
     public function services_count($search) {
        $this->db->from('post');
        $this->db->where('category','Services');
        if($search != "") {
            $this->db->like('title',$search);
        }
        $result = $this->db->count_all_results();
        return $result;
    }

    }
    