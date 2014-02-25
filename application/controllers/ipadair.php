<?php

class Ipadair extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
	 	$this->load->view('ipadair');
	 	$this->load->view('footer');
	}
 	
 }
