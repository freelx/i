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

class Letter extends Controller
{
	public function letter()
	{	
		$user = new User();
		$data = $user->where('id', '>', 0)->select();
		$this->assign('data', $data);
		return $this->fetch();
	}
	
	public function post()
	{
		$id = $_POST['id'];
		$message = $_POST['message'];
		$user = new User;
		$list = [
		['id'=>$id, 'talk'=>$message],

		];
		$rel = $user->saveAll($list);
		if($rel){
			$this->success('发送成功');
		}
	}
}