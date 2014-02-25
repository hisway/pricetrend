<?php
class Datas extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function get_data($term) {
		if(isset($term['type'])) $this->db->where('type', $term['type']); 
		if(isset($term['size'])) $this->db->where('size', $term['size']);
		if(isset($term['color'])) $this->db->where('color', $term['color']);
		if(isset($term['time'])) $this->db->where('time', $term['time']);
		if(isset($term['ap'])) $this->db->where('ap', $term['ap']);
		if(isset($term['price'])) $this->db->where('price', $term['price']);
		$this->db->order_by("time", "DESC");
		$this->db->order_by("AP", "ASC");
		$this->db->limit(60);
		$query = $this->db->get('price');
		return $query->result();
	}

	public function add_data($data=array()) {
	 	return $this->db->insert('price',$data);
	}


	public function updata_data($id=0,$data=array()) {
		$this->db->where('id', $id);
	 	return $this->db->update('price',$data);
	}




}