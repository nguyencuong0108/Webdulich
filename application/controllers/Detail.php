<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Post_model');
        $this->load->model('Cate_model');
    }
	public function index()
	{
        $url = parse_url($_SERVER['REQUEST_URI']);
        $path = explode('/',$url['path']);
        $slug = end($path);
        $param = [
			'slug' => $slug,
        ];
        
        $post= $this->Post_model->gets($param);
        $data['post'] = $post[0];

        // bài viết liên quan 
        $pr = [
            'cate_id' => $post[0]['cate_id'],
            'limit' => '4',
            'id_other' =>  $post[0]['id'],
        ];
        
        $post_lq= $this->Post_model->gets($pr);
        $data['post_lq'] = $post_lq;


        $pr_cate = [
			'id' => $post[0]['cate_id'],
		];
        $cate= $this->Cate_model->gets($pr_cate);
        $data['cate'] = $cate[0];

        $ar_meta = [
			'title' => $post[0]['name'],
			'image' => 'http:assets/100/299/077/themes/642224/assets/logo.png',
			'description' => $post[0]['description'],   
			'site_name' => $post[0]['description'],
			'url' => 'https://ongkinhdulich.com/du-lich/'.$post[0]['slug'],
        ];
        $data['ar_meta'] = $ar_meta;

		$this->load->view('detail',$data);
	}
	


}
