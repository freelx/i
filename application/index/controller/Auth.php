<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use app\index\model\User;
use think\Db;
use think\Session;
//use think\View;

class Auth extends Controller
{	
	//先判断用户是否已经登录
	public function __construct(Request $request)
	{	
		parent::__construct();

		if(!$this->checkLogin() && $request->controller() != 'Auth'){
			$this->error('请登录');
		}

	}


	public function login()
	{   //$view = new View();
		return $this->fetch();
	}
	
	//登录验证
	public function loginCheck()
	{   
		if (!$this->authentication1($_POST['username'])) {
			echo json_encode(array('status'=>0, 'msg'=>'(╯°Д°)╯︵ ┻━┻“查无此号”！！！！','data'=>[]));die();
		}
		$user = new User();
		// 查询数据集
		$sel = $user->where('username', $_REQUEST['username'])->find();
		if ($sel['lockuser'] == 1) {
			$this->error('该账号已被锁定');
		} 
		
		if($sel['password'] == md5($_POST['password'])) {
			Session::set('username', $sel['username']);
			Session::set('user_id', $sel['id']);
			Session::set('user_type', $sel['user_type']);
			echo json_encode(array('status'=>1, 'msg'=>'┬─┬ ノ( \' - \'ノ)登录成功','data'=>[]));die();
		}else{
			echo json_encode(array('status'=>0, 'msg'=>'密码错误', 'data'=>[]));die();	
			}

	}

	//退出
	public function loginout()
	{
		session('username', null);
		session('user_id', null);
		session('user_type', null);
		return $this->success('退出成功','__SITE__/index/index/index');
	}

		
	//验证码验证
	public function verify()
	{
		if(!captcha_check($_POST['verify'])){
			//验证失败
			echo json_encode(array('status'=>0,'msg'=>'','data'=>[]));die();
		} else{
			echo json_encode(array('status'=>1,'msg'=>'','data'=>[]));die();
		}
	}


	//用于ajax返回的用户名验证
	public function authentication()
	{
		$sel = Db::name('user')->where('username',$_POST['username'])->find();
		if ($sel) {
			echo json_encode(array('status'=>1,'msg'=>'用户名正确','data'=>[]));
		} else{
			echo json_encode(array('status'=>0,'msg'=>'查无此人','data'=>[]));
		}
	}

	//用于在本页的用户名查重
	public function authentication1($username)
	{
		$sel = Db::name('user')->where('username',$username)->find();
		if ($sel) {
			//返回用户id
			return $sel['id'];
		} else {
			return false;
		}
	}
	//判断用户是否是已登录状态
	public function checkLogin()
	{
		return session('user')['uid'];
	}

	//手机号码验证
	public function checkPhone($mobile)
	{

        if(preg_match("/^1[3|4|5|8][0-9]\d{4,8}$/", $mobile)){
        	return $mobile;
        } else {
        	return null;
        }

	}
	//邮箱格式验证
	public function checkEmail($email)
	{
		if(preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/", $email)){
        	return $email;
        } else {
        	return null;
        }
	}


	public function register()
	{
		return $this->fetch();
	}

	//注册验证
	public function registerVerify()
	{

		if ($this->authentication1($_POST['username'])) {
			echo json_encode(array('status'=>0,'msg'=>'都说用户名已经注册了，你还点','data'=>[]));die();
		}

		if (empty($_POST['password']) || (strlen($_POST['password']) < 6)) {
			echo json_encode(array('status'=>0,'msg'=>'密码为空或者密码长度小于6','data'=>[]));die();
		}

		$data['username'] = $_POST['username'];
		$data['password'] = md5($_POST['password']);
		$data['create_time'] = time();
		$userId = Db::name('user')->insert($data);

		if ($userId) {
			/*
			$uid = $this->authentication1($_POST['username']);
			$profile = new Profile(['u_id'=>$uid]);
			$profile->save();*/

			echo json_encode(array('status'=>1,'msg'=>'注册成功','data'=>[]));die();
		} else {
			echo json_encode(array('status'=>0,'msg'=>'注册失败','data'=>[]));die();
		}
	}
	public function do()
	{

		
	}
	
}