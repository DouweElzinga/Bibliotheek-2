<?php

namespace App\Controllers;


class Blog extends BaseController
{
	public function index()
	{
		$data = [
			'meta_title' => 'Home',
			'title' => 'Our Blog',
		];

		$posts = ['Title 1', 'Title 2', 'Title 3'];
		$data['posts'] = $posts;

		echo view('templates/header', $data);
		return view('blog');
		echo view('templates/footer');
	}

	public function post()
	{
		$data = [
			'meta_title' => 'Post page',
			'title' => 'this is a Blog page',
		];
		
		echo view('templates/header', $data);
		return view('single_post');
		echo view('templates/footer');
	}

	
}
