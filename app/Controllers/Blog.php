<?php

namespace App\Controllers;

use App\Models\BlogModel;

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

		
		return view('blog', $data);
		
	}

	public function post($id)
	{
		$model = new BlogModel();
		$post = $model->find($id);
		if($post)
		{
			$data = [
				'meta_title' => $post['post_title'],
				'title' => $post['post_title'],
			];
		}else{
			$data = [
				'meta_title' => 'Post not found',
				'title' => 'Post not found',
			];
		}
			
		return view('single_post', $data);
	}

	public function new()
	{
		$data = [
			'meta_title' => 'New Post',
			'title' => 'Create New Post',
		];

		if($this->request->getMethod() == 'post'){
			$model = new BlogModel();
			$model->save($_POST);
		}
		return view('new_post', $data);
	}
	
}
