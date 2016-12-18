<?php

namespace app\sadmin\controller;

use app\sadmin\model\User;

use app\sadmin\model\Topic;

use app\sadmin\model\Goodscomment;

use think\Controller;

use think\Model;

use think\View;

use traits\model\SoftDelete;

use think\Request;

class Topic extends Controller
{
	public function start()
	{	//dump($_POST);
		
		return $this->fetch();
	}

	public function vstart()
	{
		$title = $_POST['title'];
		$category_id = $_POST['category_id'];
		$content = $_POST['content'];
		$topic = new Topic;
		$topic->data([
		'title' => $title,
		'category_id' => $category_id,
		'content' => $content
		]);
		$rel = $topic->save();
		if($rel){
			$this->success('发表成功');
		}
	}
	
	public function focus()
	{
		return $this->fetch();
	}
	
	public function comment()
	{
		return $this->fetch();
	}
}