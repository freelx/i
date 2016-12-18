<?php

namespace app\sadmin\controller;

use app\sadmin\model\User;

use app\sadmin\model\Goodscomment;

use app\sadmin\model\Businessman;

use think\Controller;

use think\Model;

use think\View;

use traits\model\SoftDelete;

use think\Request;

class Business extends Controller

{

	public function business()
	{	
		$business = new Businessman();
		// 查询数据集
		$data = $business->where('id', '>', 0)->select();
		//dump($data);
		$this->assign('data', $data);
		return $this->fetch();
	}

	public function soft()
	{
		
		$rel = Businessman::destroy($_POST['softdelete']);
		if($rel){
			$this->success('回收成功');
		}
	}


	

	
}