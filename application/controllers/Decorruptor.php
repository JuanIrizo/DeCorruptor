<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Decorruptor extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
               
            $this->load->helper('imagenes_helper');
           
        }


	public function index()
	{

		 
		$this->load->view('Head_view');
		
		$this->load->view('intro_view');	

		$this->load->view('Footer_view');



	}

	


	
	

}
