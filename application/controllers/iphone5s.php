<?php

class Iphone5s extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
	 	$this->load->view('iphone5s');
	 	$this->load->view('footer');
	}
 	
 }