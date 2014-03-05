<?php

class Data extends CI_Controller {
	function __construct()
 {
  parent::__construct();
  $this->load->model('datas');
 }

 public function index($type='',$size=0,$color='')
 {
 	$term = array(
 		'type' =>$type,
	    'size' => $size,

 		);

	$term['color'] = $color = 'white';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}



 	$term['color'] = $color = 'gray';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}


 	$term['color'] = $color = 'gold';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}


 	$term['color'] = $color = 'blue';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}


 	$term['color'] = $color = 'green';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}


 	$term['color'] = $color = 'yellow';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}


 	$term['color'] = $color = 'red';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}

 	$term['color'] = $color = 'black';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}

 	$term['color'] = $color = 'ME864';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}

 	$term['color'] = $color = 'ME865';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}

 	$term['color'] = $color = 'ME866';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}

 	$term['color'] = $color = 'ME293';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}

 	$term['color'] = $color = 'ME294';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}

 	$term['color'] = $color = 'MD711';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}

 	$term['color'] = $color = 'MD712';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}

 	$term['color'] = $color = 'MD760';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}

 	$term['color'] = $color = 'MD761';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}

 	$term['color'] = $color = 'ME086';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}

 	$term['color'] = $color = 'ME087';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}

 	$term['color'] = $color = 'ME088';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}

 	$term['color'] = $color = 'ME089';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}

 	$term['color'] = $color = 'MD387';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}

 	$term['color'] = $color = 'MD388';
 	$data = $this->datas->get_data($term);
 	foreach ($data as $key => $v) {
		$time = strtotime($v->time) ;
		if ($v->ap) {		
			$res[$color][$key]->x = ($time+3600*10)*1000;//早价
		}else{
			$res[$color][$key]->x = ($time+3600*17)*1000;//晚价
		}
		$res[$color][$key]->y = intval($v->price);
 	}


	
	//print_r($res);exit;

 	echo json_encode($res);
 	
 }





}