<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Posts extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
	}

	function index()
	{
		$posts = $this->post_model->find_all();
		$this->load->view('posts_index', array('posts' => $posts));
	}
	
	function show($id = 0)
	{
		$post = $this->post_model->find_by_id($id);
		if (empty($post)) show_404();
		$this->load->view('posts_show', array('post' => $post));
	}

}
