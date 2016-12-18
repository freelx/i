<?php
namespace app\cadmin\controller;
use think\View;
use think\Controller;
use app\cadmin\model\User;
use think\Db;
use app\cadmin\model\Indent;
use app\cadmin\model\Userinfo;
use  think\Session;
use traits\model\SoftDelete;
Class Order extends Controller
{
	public function Order()
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
		//dump($path);
		$this->assign('path', $path);
		$indent = new Indent();
		$datai = $indent->where('user_id',Session::get('user_id'))->select();
		//dump($datai);
		foreach ($datai as  $v) {
			$v['data'] = date("Y-m-d",$v['create_time']);
			//$v['data_time'] = date("H-i-s",($v['create_time'] + 10*24*60*60 -time()));
			$day = ceil((($v['create_time']  -time() +10*3600*24))/24/3600);

			$v['data_time'] = $day.'天';
		}
		//$time = time();
		//$this->assign('time', $time);
		$this->assign('datai', $datai);
		//dump($datai);
		return $this->fetch();
	}
	public function affirm()
	{
		//dump($_GET['goods_id']);
		$indent = new Indent();
		//$a = $indent->destroy(['goods_id' => $_GET['goods_id'],'user_id' => Session::get('user_id')]);
		$a = Db::table('s_indent')
		->where('goods_id', $_GET['goods_id'])
		->where('user_id', Session::get('user_id'))	
		->update([
			'affirm' => 1,
			'update_time' => time()
			]);		
		if ($a) {
			$this->success('确认成功');

		} else {
			$this->error('确认失败');
		}
	}


}



















