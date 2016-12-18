<?php

namespace app\badmin\controller;

use app\sadmin\model\User;
use app\cadmin\model\Userinfo;

use app\badmin\model\Goods;

use think\Controller;

use think\Model;

use think\View;

use traits\model\SoftDelete;

use think\Request;

use think\Db;

use  think\Session;

class Mine extends Controller
{	

	public function mine()
	{	
		$id = Session::get('id');
		$goods = new Goods;
		$data = $goods->where('master_id', '=', $id)->select();

		$this->assign('data',$data);
		
		return $this->fetch();
	}


	public function state(Request $request)
	{
		$r = Request::instance()->get('id');
		
		$goods = Goods::get($r);
		$goods->state = '0';
		$s = $goods->save();
		if($s) {
			$this->redirect('__SITE__/badmin/mine/mine');
		}
	}

	public function unstate(Request $request)
	{
		$r = Request::instance()->get('id');
		
		$goods = Goods::get($r);
		$goods->state = '1';
		$s = $goods->save();
		if($s) {
			$this->redirect('__SITE__/badmin/mine/mine');
		}
	}


	
}