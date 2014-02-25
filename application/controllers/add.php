<?php

class Add extends CI_Controller {
	function __construct()
 {
  parent::__construct();
  $this->load->model('datas');
  $this->load->helper('url');
 }

  public function index()
 {
 	$this->load->view('add');

 }

 public function handle($type='')
 {
	$data = array(
		'type' =>$type,
	    'color' => $this->input->get('color'),
	    'size' => $this->input->get('size'),
	    'time' => $this->input->get('time'),
	    'ap' => $this->input->get('ap')
  	);
  	if (in_array($data['color'], array('ME864','ME865','ME866','MD760','MD761'))) {
  		$data['size'] = 13;
  	}
  	if (in_array($data['color'], array('ME293','ME294'))) {
  		$data['size'] = 15;
  	}
    if (in_array($data['color'], array('MD711','MD712'))) {
      $data['size'] = 11;
    }
    if (in_array($data['color'], array('ME086','ME087'))) {
      $data['size'] = 21;
    }
    if (in_array($data['color'], array('ME088','ME089'))) {
      $data['size'] = 27;
    }


  	//print_r($data);exit;

	if ($id = $this->datas->get_data($data)) {
		$data['price'] = $this->input->get('price');
 		$this->datas->updata_data($id[0]->id,$data);
 	}else{
 		$data['price'] = $this->input->get('price');
 		$this->datas->add_data($data);
 	}
 	redirect(base_url()."add"); 
 }





}