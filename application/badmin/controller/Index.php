<?php
namespace app\badmin\controller;

use app\sadmin\model\User;
use app\cadmin\model\Userinfo;

use app\sadmin\model\Goodscomment;

use think\Controller;

use think\Model;

use think\View;

use traits\model\SoftDelete;

use think\Request;

use think\Db;

use  think\Session;

use app\badmin\model\Businessman;
class Index extends Controller
{	
	//定义方法获取商户信息
	public function index()
	{	
		$user = new Businessman;
		$data = $user->where('id',$id = Session::get('id'))->select();
		
		$time = date('Y年m月d', time());
		$this->assign('data', $data);
		$this->assign('time', $time);
		return $this->fetch();
	}

	
}