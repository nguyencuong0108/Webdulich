<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Post_model extends CI_Model{

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
		$this->db->select($select)->from('post as c');
		if (isset($filters['id'])){
			$this->db->where('c.id',$filters['id']);
		}
		if (isset($filters['id_other'])){
			$this->db->where('c.id !=',$filters['id_other']);
		}

		if (isset($filters['name'])){
			$this->db->where('c.name',$filters['name']);
		}
        if (isset($filters['keyword'])){
            $this->db->where("(c.name like '%".addslashes($filters['keyword'])."%')");
		}
		if (isset($filters['slug'])){
			$this->db->where('c.slug',$filters['slug']);
		}
		if (isset($filters['cate_id'])){
			$this->db->where('c.cate_id',$filters['cate_id']);
		}
		if (isset($filters['hot'])){
			$this->db->where('c.hot',$filters['hot']);
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
		$post = $result->result_array();
		$result->free_result();
		return $post;
	}
	public function update($id, $data){
		return $this->db->update('post', $data, array('id'=>$id));
	}
	public function insert($data){
		$this->db->insert('post', $data);
		return $this->db->insert_id();
	}
	public function delete($id){
		return $this->db->delete('cartoon', array('id' => $id));
	}
}

?>