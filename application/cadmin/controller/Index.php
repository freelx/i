<?php

namespace app\cadmin\controller;

use app\cadmin\model\User;
use app\cadmin\model\Userinfo;

use app\cadmin\model\Goodscomment;

use think\Controller;

use think\Model;

use think\View;

use traits\model\SoftDelete;

use think\Request;

use think\Db;

use  think\Session;

class Index extends Controller
{	

	public function index()
	{	
		$time = time();
		$s = date('Y年m月', $time);
		$this->assign('s', $s);

		$user = new User();
		// 查询数据集
		$data = $user->where('id', Session::get('user_id'))->select();

		$this->assign('data', $data);

		$userinfo = new Userinfo;
		$user_id = Session::get('user_id');
		//查询图片路径
		$path = $userinfo->where('user_id', $user_id)->value('pic');
		$notice = $data[0]['talk'];
		$this->assign('path', $path);
		$this->assign('notice', $notice);	
		return $this->fetch();


	}

	public function sign()
	{
		dump($_REQUEST);
		$a = Db::table('s_user')
		->where('id', Session::get('user_id'))
		->setInc('balance', 10);
		//$this->assign('a', $a);
		/*if($a){
			$this->redirect('cadmin/index/index');
		}
*/
	}
	
	

	


}