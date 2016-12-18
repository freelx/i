<?php

namespace app\badmin\controller;

use app\sadmin\model\User;

use app\sadmin\model\Goodscomment;

use app\badmin\model\Businessman;

use think\Controller;

use think\Model;

use think\View;

use traits\model\SoftDelete;

use think\Request;

use think\Db;

use  think\Session; 

class Means extends Controller
{	
	
	public function means()
	{	

		return $this->fetch();
	}
	//完善商户信息方法
	public function improve()
	{
		//dump($_POST);
		$id = Session::get('id');
		dump($id);
		$shop_name = $_POST['shop_name'];
		$shop_address = $_POST['shop_address'];
		$tel = $_POST['tel'];
		$email = $_POST['email'];
		
		
		$user = new Businessman;
		$list = [
		['shop_name'=> $shop_name,'tel'=> $tel, 'email'=> $email, 'ship_address' => $shop_address, 'id'=> $id]
		
		];
		$user->saveAll($list);
		$this->redirect('badmin/index/index');

	}

	public function upload()
	{	//获取表单上传文件
		$file = request()->file('image');
		
		//移动到框架应用根目录/public/uploads/ 目录下
		//
		$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');

		if($info){
		// 成功上传后 获取上传信息
		// 输出 jpg
		$info->getExtension();
		// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
		$info->getSaveName();
		// 输出 42a79759f284b767dfcb2a0197904287.jpg
		$info->getFilename();
		}else{
		// 上传失败获取错误信息
		echo $file->getError();
		}

		$path = $info->getSaveName();
			
		$p = str_replace('\\','/',$path);
		$pic = '__SITE__/'.'uploads/'.$p;

		$businessman = new Businessman;
		// save方法第二个参数为更新条件
		$businessman_id = Session::get('id');
		$businessman->save([
		'pic' => $pic
		
		],['id' => $businessman_id]);

		$this->success('上传成功', '__SITE__/badmin/index/index');
	}


	public function load()
	{
		return $this->fetch();
	}


	//定义个人信息修改的方法
	public function change()
	{	//查询个人信息
		$business_id = Session::get('id');
		$bus = new Businessman;
		$info = $bus->where('id', $business_id)->select();
		
		$this->assign('info', $info);
		return $this->fetch();
	}

	//执行修改的方法
	public function dochange()
	{
		//dump($_POST);
		$email = $_POST['email'];
		$address = $_POST['ship_address'];
		$shop_name = $_POST['shop_name'];
		$tel = $_POST['tel'];
		$password = md5($_POST['password']);

		$business_id = Session::get('id');
		$bus = new Businessman;
		$info = $bus->where('id', $business_id)->find();
		$pass = $info->password;

		if($password == $pass) {
				$bus = new Businessman;
				// save方法第二个参数为更新条件
				$business_id = Session::get('id');
				$bus->save([
				'email' => $email,
				'ship_address' => $address,
				'tel' => $tel,
				'shop_name' => $shop_name

				
				],['id' => $business_id]);

				$this->success('修改成功', '__SITE__/badmin/index/index');

		}else{
			$this->error('修改失败，请输入密码');
		}

	}
	

}