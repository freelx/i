<?php

namespace app\badmin\controller;

use app\sadmin\model\User;
use app\cadmin\model\Userinfo;

use app\badmin\model\Goods;

use app\sadmin\model\Goodscomment;

use think\Controller;

use think\Model;

use think\View;

use traits\model\SoftDelete;

use think\Request;

use think\Db;

use  think\Session;

class Mygoods extends Controller
{	

	public function mygoods()
	{	
		$goods = new Goods;
		$id = Session::get('id');
		$data = $goods->where('master_id', $id)->select();

		$this->assign('data', $data);

		return $this->fetch();
	}

	
}