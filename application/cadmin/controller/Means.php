<?php

namespace app\cadmin\controller;

use app\sadmin\model\User;

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

class Means extends Controller
{	
	public function means()
	{	

		return $this->fetch();
	}

	public function improve()
	{	
		// 查询单个数据
		$user = new Userinfo;
		$user_id = Session::get('user_id');
		$data = $user->where('user_id', $user_id)
		->find();
		//dump($_POST);
		
		$username = $_POST['username'];
		$tel = $_POST['tel'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$birthday = $_POST['birthday'];

		

		
		if($data == null){
			$user = new Userinfo;
			$list = [
			['real_name'=> $username,'tel'=> $tel, 'email'=> $email, 'address' => $address, 'birthday' => $birthday, 'user_id'=> $user_id]
			
			];
			$user->saveAll($list);
			$this->redirect('cadmin/index/index');
		}else {
			$this->error('您已经完善过了', '__SITE__/cadmin/index/index');
		}

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

		$user = new Userinfo;
		// save方法第二个参数为更新条件
		$user_id = Session::get('user_id');
		$user->save([
		'pic' => $pic
		
		],['user_id' => $user_id]);

		$this->success('修改成功', '__SITE__/cadmin/index/index');
	}


	public function load()
	{
		return $this->fetch();
	}


	//定义个人信息修改的方法
	public function change()
	{	//查询个人信息
		$user_id = Session::get('user_id');
		$userinfo = new Userinfo;
		$info = $userinfo->where('user_id', $user_id)->select();
		//dump($user_id);
		//dump($info);
		$this->assign('info', $info);
		return $this->fetch();
	}

	//执行修改的方法
	public function dochange()
	{
		$email = $_POST['email'];
		$address = $_POST['address'];
		$tel = $_POST['tel'];
		$password = md5($_POST['password']);

		$user_id = Session::get('user_id');

		$userinfo = new User;
		$info = $userinfo->where('id', $user_id)->find();
		
		$pass = $info['password'];
		
		if($password == $pass) {
				$user = new Userinfo;
				// save方法第二个参数为更新条件
				$user_id = Session::get('user_id');
				$user->save([
				'email' => $email,
				'address' => $address,
				'tel' => $tel

				
				],['user_id' => $user_id]);

				$this->success('修改成功', '__SITE__/cadmin/index/index');

		}

	}
	

}