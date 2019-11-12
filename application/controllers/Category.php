<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function vehicals()
	{
		$this->load->view('category/Vehical');
	}	
	
}
