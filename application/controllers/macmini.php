<?php

class Macmini extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
	 	$this->load->view('macmini');
	 	$this->load->view('footer');
	}
 	
 }