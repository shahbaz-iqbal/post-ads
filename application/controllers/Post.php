<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Post extends CI_Controller {
    public function add() {

        $this->load->view('post/add');
    }

    public function add_1() {
        $data['category'] = $this->input->post('category');
        $data['Vehicals'] = $this->input->post('Vehicals');
        $data['Rent'] = $this->input->post('Rent');
        $data['Pets'] = $this->input->post('Pets');
        $data['Personal'] = $this->input->post('Personal');
        $data['For_Sale'] = $this->input->post('For_Sale');
        $data['Jobs'] = $this->input->post('Jobs');
        $data['Real_Estate'] = $this->input->post('Real_Estate');
        $data['Services'] = $this->input->post('Services');
        $data['Comunity'] = $this->input->post('Comunity');

        $this->session->set_userdata($data);
        redirect("./post/load_1/", "refresh");
    }

    public function add_2() {
        $data['title'] = $this->input->post('title');
        $data['web'] = $this->input->post('web');
        $data['discription'] = $this->input->post('discription');
        $this->session->set_userdata($data);

        redirect("./post/load_2/", "refresh");
    }

    public function add_3() {
        $data['address'] = $this->input->post('adress');
        $data['country'] = $this->input->post('country');
        $data['state'] = $this->input->post('state');
        $data['city'] = $this->input->post('city');
        $data['zipcode'] = $this->input->post('zipcode');
        $this->session->set_userdata($data);

        redirect("./post/load_3/", "refresh");
    }

    public function add_4() {
        $data['price'] = $this->input->post('price');
        $data['currency'] = $this->input->post('currency');
        $this->session->set_userdata($data);

        redirect("./post/load_4/", "refresh");
    }

    public function add_5() {
        $data['name'] = $this->input->post('username');
        $data['email'] = $this->input->post('email');
        $this->session->set_userdata($data);

        redirect("./post/load_6/", "refresh");
    }

    public function add_image() {
        $filename = $_FILES["image"]['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $new_name = time() . '.' . $ext;
        $config['file_name'] = $new_name;
        $config['upload_path'] = './assets/images/post_img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('image')) {
            $dataerror = array('error' => $this->upload->display_errors());
        } else {
            $dataa = array('upload_data' => $this->upload->data());
        }
        $data['imagename'] = $new_name;
        $this->session->set_userdata($data);
        redirect("./post/load_5/", "refresh");
    }

    public function submit() {
        $data['feature'] = $this->input->post('feature');
        $this->session->set_userdata($data);
        $category = $this->session->userdata('category');
        $vehical = $this->session->userdata('vehical');
        $Rent = $this->session->userdata('Rent');
        $pets = $this->session->userdata('pets');
        $Personal = $this->session->userdata('Personal');
        $For_Sale = $this->session->userdata('For_Sale');
        $Jobs = $this->session->userdata('Jobs');
        $Real_Estate = $this->session->userdata('Real_Estate');
        $Services = $this->session->userdata('Services');
        $Comunity = $this->session->userdata('Comunity');
       
  $saveCat = "";
        if($category == "Vehicals") {
            $saveCat = $vehical;
        } else if($category == "Rent") {
            $saveCat = $Rent;
        } else if($category == "pets") {
            $saveCat = $pets;
        } else if($category == "Personal") {
            $saveCat = $Personal;
        } else if($category == "For_Sale") {
            $saveCat = $For_Sale;
        } else if($category == "Jobs") {
            $saveCat = $Jobs;
        } else if($category == "Real_Estate") {
            $saveCat = $Real_Estate;
        } else if($category == "Services") {
            $saveCat = $Services;
        } else if($category == "Comunity") {
            $saveCat = $Comunity;
        }
        $title = $this->session->userdata('title');
        $web = $this->session->userdata('web');
        $discription = $this->session->userdata('discription');
        $address = $this->session->userdata('address');
        $country = $this->session->userdata('country');
        $state = $this->session->userdata('state');
        $city = $this->session->userdata('city');
        $zipcode = $this->session->userdata('zipcode');
        $price = $this->session->userdata('price');
        $currency = $this->session->userdata('currency');
        $name = $this->session->userdata('name');
        $email = $this->session->userdata('email');
        $image1 = $this->session->userdata('imagename');
        $image = $image1;
        $feature = $this->session->userdata('feature');

       
        $data = array(
            'category' => $category,
            'sub_category' => $saveCat,
            'title' => $title,
            'web' => $web,
            'discription' => $discription,
            'address' => $address,
            'country' => $country,
            'state' => $state,
            'city' => $city,
            'zipcode' => $zipcode,
            'price' => $price,
            'currency_type' => $currency,
            'name' => $name,
            'email' => $email,
            'file' => $image,
            'type' => $feature
        );
        $res = $this->Posts->insert_user($data);
        if ($res) {
            $this->session->set_flashdata('success', 'Post add successfully');
        } else {
            $this->session->set_flashdata('error', 'Post not add successfully');
        }
        $this->session->sess_destroy();
        $this->load->view('post/add');
    }

    public function load_1() {
        $this->load->view('post/add_1');
    }

    public function load_2() {
        $this->load->view('post/add_2');
    }

    public function load_3() {
        $this->load->view('post/add_3');
    }

    public function load_4() {
        $this->load->view('post/add_4');
    }

    public function load_5() {
        $this->load->view('post/add_5');
    }

    public function load_6() {
        $this->load->view('post/add_image');
    }

}
