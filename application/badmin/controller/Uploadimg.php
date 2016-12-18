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

use think\Session;

class Uploadimg extends Controller
{	

	public function uploadimg()
	{	
		
		return $this->fetch();
	}

	//定义批量上传的方法
	public function doupload()
	{	
		$files = request()->file('image');
/*		dump($files);
		exit;*/
		foreach($files as $file){
			// 移动到框架应用根目录/public/uploads/ 目录下
			$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
			if($info){
			// 成功上传后 获取上传信息
			// 输出 jpg
			//echo $info->getExtension();
			// 输出 42a79759f284b767dfcb2a0197904287.jpg
			 $data[] = $info->getSaveName();
			}else{
			// 上传失败获取错误信息
			echo $file->getError();
			}
		}

		
		$p = str_replace('\\','/',$data['0']);
		$p1 = str_replace('\\','/',$data['1']);
		$p2 = str_replace('\\','/',$data['2']);
		$p3 = str_replace('\\','/',$data['3']);
		$p4 = str_replace('\\','/',$data['4']);
		$pic = '__SITE__/'.'uploads/'.$p;
		$pic_1 = '__SITE__/'.'uploads/'.$p1;
		$pic_2 = '__SITE__/'.'uploads/'.$p2;
		$pic_3 = '__SITE__/'.'uploads/'.$p3;
		$pic_4 = '__SITE__/'.'uploads/'.$p4;
		//dump($pic);
		$goods = new Goods;
		// save方法第二个参数为更新条件
		$id = Session::get('id');

		$goods->data([
		'master_id' => $id,
		'pic' => $pic,
		'pic_1' => $pic_1,
		'pic_2' => $pic_2,
		'pic_3' => $pic_3,
		'pic_4' => $pic_4
		]);

		$rel = $goods->save();

		if($rel){
			$this->success('上传成功', '__SITE__/badmin/index/index');
		}

	}

	
}
