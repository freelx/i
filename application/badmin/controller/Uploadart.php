<?php

namespace app\badmin\controller;

use app\sadmin\model\User;
use app\cadmin\model\Userinfo;
use app\badmin\model\Goods;
use app\badmin\model\Theme;

use app\sadmin\model\Goodscomment;

use think\Controller;

use think\Model;

use think\View;

use traits\model\SoftDelete;

use think\Request;

use think\Db;

use  think\Session;

class Uploadart extends Controller
{	

	public function uploadart()
	{	
		$theme = new Theme;
		$data = $theme->where('id', '>', 0)
		->select();

		
		$this->assign('data', $data);
		$goods = new Goods;
		$rel = $goods->where('id', '>', 0)
		->select();
		
		$this->assign('rel', $rel);
		return $this->fetch();
	}

	public function doupload()
	{	
		$id = Session::get('id');
		//dump($id);
		$goods_id = $_POST['goods_id'];

		$theme_id = $_POST['theme_id'];
		
		$goods_name = $_POST['goods_name'];

		$price = $_POST['price'];

		$stock = $_POST['stock'];
		
		$title = $_POST['title'];
		
		$content = $_POST['content'];
		$art = $content['0'];
		
		$art1 = $content['1'];
		
		$art2 = $content['2'];
		
		$goods = new Goods;
		
		$rel = $goods->save([
		'theme_id' => $theme_id,
		'goods_name' => $goods_name,
		'price' => $price,
		'stock' => $stock,
		'title' => $title,
		'article' => $art,
		'article_1' => $art1,
		'article_2' => $art2
		],['id' => $goods_id]);
		
		if($rel){
			$this->success('上传成功', '__SITE__/badmin/index/index');
		}


	}

	
}