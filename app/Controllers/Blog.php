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

		echo view('header', $data);
		return view('blog');
		echo view('footer');
	}

	public function post()
	{
		$data = [
			'meta_title' => 'Post page',
			'title' => 'this is a Blog page',
		];
		
		echo view('header', $data);
		return view('single_post');
		echo view('footer');
	}

	
}
