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

class Recycle extends Controller

{

	public function recycle()
	{	
		$recycle = new Businessman();
		// 查询数据集
		$data = $recycle->onlyTrashed()->select();
		//dump($data);
		$this->assign('data', $data);
		return $this->fetch();
	}

	public function unrecycle()
	{
		//dump($_POST);
		$recycle = new Businessman();
		// 查询数据集
		$data = $recycle->onlyTrashed()->find();
		
		$a = $data->id;
	
		


		
		
		$a = Db::table('s_businessman')
		->where('id', $a)
		->update(['delete_time' => null]);

		if($a){
			$this->success('恢复成功');
		}
	}

	

	

	
}