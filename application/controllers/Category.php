<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('post_model');
        $this->load->model('cate_model');
    }
	public function index()
	{
        $url = parse_url($_SERVER['REQUEST_URI']);
        $path = explode('/',$url['path']);
        $category = end($path);
        $param = [
			'slug' => $category,
		];
        $cate= $this->cate_model->gets($param);
        if($cate[0]['id']){
            $data = [
                'cate_id' => $cate[0]['id'],
                // 'limit' => 5,
            ];
            $post= $this->post_model->gets($data);
            $data['post'] = $post;
        }


        $ar_meta = [
			'title' => $cate[0]['description'],
			'image' => 'http:assets/100/299/077/themes/642224/assets/logo.png',
			'description' => $cate[0]['description'],
			'site_name' => $cate[0]['description'],
			'url' => 'https://ongkinhdulich.com/danh-muc/'.$cate[0]['slug'],
		];

		$data['ar_meta'] = $ar_meta;

        $data['path'] = $category;
        $data['cate'] = $cate;
        $this->load->view('category',$data);

	}
}
