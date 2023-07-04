<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
    { 
        parent::__construct();
        $this->load->model('Post_model');
    }
	public function index()
	{

		// bắc
		$data_north = [
			'cate_id' => 1,
			'limit' => 5,
		];
		$post_north = $this->Post_model->gets($data_north);

		// trung
		$data_center = [
			'cate_id' => 2,
			'limit' => 5,
		];
		$post_center = $this->Post_model->gets($data_center);
		// nam
		$data_southerm = [
			'cate_id' => 3,
			'limit' => 5,
		];
		$post_southerm = $this->Post_model->gets($data_southerm);
		// mon an
		$data_monan = [
			'cate_id' => 4,
			'limit' => 1,
		];
		$post_monan = $this->Post_model->gets($data_monan);

		// cam nang
		$data_camnang = [
			'cate_id' => 5,
			'limit' => 4,
		];
		$post_camnang = $this->Post_model->gets($data_camnang);

		// điểm đến ưa thích
		$data_hot = [
			'hot' => 1,
			'limit' => 5,
		];
		$post_hot = $this->Post_model->gets($data_hot);
		// var_dump($post_hot);die;


		$ar_meta = [
			'title' => 'Tổng hợp các địa điểm hot nhất 2023 mà bạn không nên bỏ lỡ: Hà Nội,Sài Gòn, Huế,Hội An, Đà Nẵng... Cùng du lịch Khám phá từng địa điểm tại đây!',
			'image' => 'http:assets/100/299/077/themes/642224/assets/logo.png',
			'description' => 'Du lịch Việt Nam hot nhất năm 2023 - Thông tin về các địa điểm du lịch | Tổng hợp các địa điểm hot nhất 2023 mà bạn không nên bỏ lỡ: Hà Nội,Sài Gòn, Huế,Hội An, Đà Nẵng... | Ongkinhdulich',
			'site_name' => 'Ongkinhdulich | Tổng hợp về các điểm đến du lịch khắp ba miền Việt Nam',
			'url' => 'https://ongkinhdulich.com',
		];

		$data['ar_meta'] = $ar_meta;

		$data['post_north'] = $post_north;
		$data['post_center'] = $post_center;
		$data['post_southerm'] = $post_southerm;
		$data['post_southerm'] = $post_southerm;
		$data['post_monan'] = $post_monan;
		$data['post_camnang'] = $post_camnang;
		$data['post_hot'] = $post_hot;
		$this->load->view('home',$data);
	}
}
