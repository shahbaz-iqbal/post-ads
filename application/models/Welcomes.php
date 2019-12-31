<?php

Class Welcomes extends CI_Model {
    
    
    public function all_vehical() {
        $this->db->where('category', 'Vehicals');
        $this->db->from('post');
        return $this->db->count_all_results();
    }
    public function all_Rent() {
        $this->db->where('category', 'Rent');
        $this->db->from('post');
        return $this->db->count_all_results();
    }
    public function all_Pets() {
        $this->db->where('category', 'Pets');
        $this->db->from('post');
        return $this->db->count_all_results();
    }
    public function all_Personal() {
        $this->db->where('category', 'Personal');
        $this->db->from('post');
        return $this->db->count_all_results();
    }
    public function all_For_Sale() {
        $this->db->where('category', 'For_Sale');
        $this->db->from('post');
        return $this->db->count_all_results();
    }
    public function all_Jobs() {
        $this->db->where('category', 'Jobs');
        $this->db->from('post');
        return $this->db->count_all_results();
    }
    public function all_Real_Estate() {
        $this->db->where('category', 'Real_Estate');
        $this->db->from('post');
        return $this->db->count_all_results();
    }
    public function all_Services() {
        $this->db->where('category', 'Services');
        $this->db->from('post');
        return $this->db->count_all_results();
    }
    public function all_Comunity() {
        $this->db->where('category', 'Comunity');
        $this->db->from('post');
        return $this->db->count_all_results();
    }
    
    public function get_all_post() {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('post');
        $result = $query->result();
        return $result;
    }

    public function first_six_post() {
        //$this->db->where('category','Vehicals');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('post', 9);
        $result = $query->result();
        return $result;
    }
    
    public function search_post($search,$categoryId,$subCategoryId) {
       if($search != "") {
           $this->db->like('title', $search, 'both');
           $this->db->or_like('discription', $search, 'both');
       }
       if($categoryId != "") {
           $this->db->like('category', $categoryId);
       }
       if($subCategoryId != "") {
           $this->db->like('sub_category', $subCategoryId);
       }
       $this->db->order_by('id', 'DESC');
       $query = $this->db->get('post');
       $result = $query->result();
       return $result;
    }

    public function all_listings_info($page,$limit,$search) {
        //$this->db->where('category','Vehicals');
       if($search != "") {
            $this->db->like('title',$search);
        }
        $query = $this->db->get('post', $limit, $page);
        $result = $query->result();
        return $result;
    }
     public function all_listings_info_count($search) {
        $this->db->from('post');
//        $this->db->where('category','Rent');
        if($search != "") {
            $this->db->like('title',$search);
        }
        $result = $this->db->count_all_results();
        return $result;
    }
    public function get_users($data) {
        $this->db->where('email', $data['email']);
        $this->db->where('passward', $data['pass']);
        $query = $this->db->get('users');
        $result = $query->result();
        return $result;
    }

    public function addUser($user) {

        $result = $this->db->insert('users', $user);
        return $result;
    }

    public function addContact($user) {

        $result = $this->db->insert('contact', $user);
        return $result;
    }

    function is_email_available($email) {
        $this->db->where('gmail', $email);
        $query = $this->db->get("player");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function is_cnic_available($cnic) {
        $this->db->where('cnic', $cnic);
        $query = $this->db->get('player');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
     public function search_page_count($search) {
        $this->db->from('post');
//        $this->db->where('category','Rent');
        if($search != "") {
            $this->db->like('title',$search);
        }
        $result = $this->db->count_all_results();
        return $result;
    }

}
