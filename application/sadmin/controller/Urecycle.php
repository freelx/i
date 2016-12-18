<?php

namespace app\sadmin\controller;

use app\sadmin\model\User;

use app\sadmin\model\Goodscomment;

use app\sadmin\model\Businessman;

use think\Controller;

use think\Model;

use think\View;

use think\Db;

use traits\model\SoftDelete;

use think\Request;

class Urecycle extends Controller

{

	public function urecycle()
	{	
		$user = new User();
		// 查询数据集
		$data = $user->onlyTrashed()->select();
		//dump($data);
		$this->assign('data', $data);
		return $this->fetch();
	}

	public function unrecycle()
	{
		//dump($_POST);
		$user = new User();
		// 查询数据集
		$data = $user->onlyTrashed()->find();
		
		$a = $data->id;
		$a = Db::table('s_user')
		->where('id', $a)
		->update(['delete_time' => null]);

		if($a){
			$this->success('恢复成功');
		}
	}

	

	

	
}