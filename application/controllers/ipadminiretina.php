<?php

class Ipadminiretina extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
	 	$this->load->view('ipadminiretina');
	 	$this->load->view('footer');
	}
 	
 }
