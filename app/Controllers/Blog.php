<?php

namespace App\Controllers;

use App\Models\BlogModel;
use CodeIgniter\Database\Query;

class Blog extends BaseController
{
	public function index()
	{

		return view('blog');
		
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
				'content' => $post['post_content'],
				'post' => $post
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
			return redirect()->to('/blog');
		}

		return view('new_post', $data);

		
	}

	public function delete($id){
		$model = new BlogModel();
		$post = $model->find($id);
		if($post)
		{
			$model->delete($id);
			return redirect()->to('/blog');
		}
	}

	public function edit($id)
	{

		$model = new BlogModel();
		$post = $model->find($id);

		$data = [
			'meta_title' => $post['post_title'],
			'title' => $post['post_title'],
		];

		if($this->request->getMethod() == 'post'){
			$model = new BlogModel();
			$_POST['post_id'] = $id;
			$model->save($_POST);
			$post = $model->find($id);
		}

		$data['post'] = $post;
		$data['title'] = $post['post_title'];
		return view('edit_post', $data);
	}
	
}

