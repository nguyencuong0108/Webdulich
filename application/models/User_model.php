<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function gets($filters = array(),$count = false, $order_total = false){
		if (isset($filters['select'])){
			$select = $filters['select'];
		}
		else{
			$select = 'c.*';
		}
		$this->db->select($select)->from('user as c');
		if (isset($filters['id'])){
			$this->db->where('c.id',$filters['id']);
		}
		if (isset($filters['name'])){
			$this->db->where('c.name',$filters['name']);
		}
		if (isset($filters['email_phone'])){
			$this->db->where('c.email_phone',$filters['email_phone']);
		}
		if (isset($filters['password'])){
			$this->db->where('c.password',$filters['password']);
		}
        
		if (isset($filters['order']))
			$this->db->order_by('c.'.$filters['order'],$filters['by']);
		else
			$this->db->order_by('c.id','DESC');
		if (isset($filters['limit'])) {
			$offset = (isset($filters['page'])) ? $filters['page'] : 0;
			$this->db->limit($filters['limit'], $offset);
		}

		$result = $this->db->get();
		if($count){
			$rows = $result->num_rows();
			$result->free_result();
			return $rows;
		}
		$user = $result->result_array();
		$result->free_result();
		return $user;
	}
	public function insert($data){
		$this->db->insert('user', $data);
		return $this->db->insert_id();
	}
	public function update($id, $data){
		return $this->db->update('user', $data, array('id'=>$id));
	}
	public function delete($id){
		return $this->db->delete('user', array('id' => $id));
	}
}

?>