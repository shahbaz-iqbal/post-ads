<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}	
	public function about()
	{
		$this->load->view('about');
	}	
	public function blog()
	{
		$this->load->view('blog');
	}	
	public function contact()
	{
		$this->load->view('contact');
	}	
	public function listings()
	{
		$this->load->view('listings');
	}	
	public function login()
	{
		$this->load->view('login');
	}	
	public function register()
	{
		$this->load->view('register');
	}	
	
}
