<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('post_model');
        $this->load->helper('helper');
    }
	public function index()
	{
		
	}

	public function post_edit($id = false){
		$data = $this->input->post();
		if($data){
			if ($_FILES['img_av']['name'] != NULL) {
				// Nếu là ảnh tiến hành code upload
				$path = "assets/image/"; // Ảnh sẽ lưu vào thư mục images
				$target_file   = $path . basename($_FILES["img_av"]["name"]);
				$tmp_name = $_FILES['img_av']['tmp_name'];
				$name = $_FILES['img_av']['name'];
			 
				// Upload ảnh vào thư mục images
				if (!file_exists($target_file)){
					move_uploaded_file($tmp_name, $path . $name);
				}
				$param['img_av'] = 'assets/image/'.$name;
				}
		// update 
		$param['name'] = $data['name'];
		$param['description'] = $data['description'];
		$param['content'] = $data['content'];
		$param['hot'] = $data['hot'];
		$param['cate_id'] = $data['cate_id'];
		$param['created_at'] = date('Y-m-d');



		$slug = strtolower(trim(preg_replace('/[\s-]+/', '-', preg_replace('/[^A-Za-z0-9-]+/', '-', preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $data['name']))))), '-'));
		$param['slug'] = create_slug($data['name']);
		if($data['id']){
			$up = $this->post_model->update($data['id'],$param);
			$ins = $data['id'];
		} else {
			$ins = $this->post_model->insert($param);
		}
		
			if($ins){
				header('Location: /admin/post_edit/'.$ins);
				exit;
			}
		}
		

		if($id){
			$dt = [
				'id' => $id,
			];
			
			$post= $this->post_model->gets($dt);
			$data['post'] = $post[0];			
		}

		$this->load->view('admin_post_edit',$data);
	}




}
