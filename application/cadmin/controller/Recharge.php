<?php

namespace app\cadmin\controller;

use app\cadmin\model\User;

use app\sadmin\model\Goodscomment;

use think\Controller;

use think\Model;

use think\View;

use traits\model\SoftDelete;

use think\Request;

use think\Db;

//use app\cadmin\model\User;

use app\cadmin\model\Userinfo;

use  think\Session; 

class recharge extends Controller
{
	public function recharge()
	{
		return $this->fetch();
	}
	

	public function dochange()
	{
		$money = $_POST['money'];
		
		$password = md5($_POST['password']);

		$user_id = Session::get('user_id');

		$user = new User;
		$info = $user->where('id', $user_id)->find();
		$pass = $info->password;

		if($password == $pass) {
			$a = Db::table('s_user')
		->where('id', Session::get('user_id'))
		->setInc('balance', $money);
			$this->success('充值成功', '__SITE__/cadmin/index/index');

		}
	}
}	