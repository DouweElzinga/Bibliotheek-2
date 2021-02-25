<?php

namespace App\Controllers;

use App\Models\BlogModel;
use CodeIgniter\Database\Query;

class Blog extends BaseController
{
	// zuja: waar komt de route hiervoor vandaan?

	public function index()
	{

		return view('blog');
		
	}

	

	public function post($id)
	{
		// zuja: hieruit blijkt dat new en edit in principe met dezelfde functie kunnen.
		// immers als er geen $id is, dan is het een lege of te wel nieuwe record. Nog niet volledig aangepast in de view, maar
		// dat vertrouw ik jouw wel toe ;-)
		$model = new BlogModel();
		$post = $model->find($id);
		if($post)
		{
			// zuja: ik zou de postdata alleen in een aparte $data element zetten en niet dubbelen.
			$data = [
				'meta_title' => 'Add Post',
				// 'title' => $post['post_title'],
				// 'content' => $post['post_content'],
				'post' => $post
			];
		}else{
			$data = [
				'meta_title' => 'New Post',
				// 'meta_title' => 'Post not found',
				// 'title' => 'Post not found',
			];
		}
			
		return view('single_post', $data);
	}

	public function new()
	{
		// zuja: deze zou kunnen vervallen.
		$data = [
			'meta_title' => 'New Post',
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
		// zuja: of deze vervalt, of post vervalt, dit is in elk geval wat dubbel op.
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

