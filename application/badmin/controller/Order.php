<?php

namespace app\badmin\controller;

use app\sadmin\model\User;
use app\cadmin\model\Userinfo;
use app\badmin\model\Indent;

use app\badmin\model\Goods;

use app\sadmin\model\Goodscomment;

use think\Controller;

use think\Model;

use think\View;

use traits\model\SoftDelete;

use think\Request;

use think\Db;

use  think\Session;

class Order extends Controller
{	

	public function Order()
	{
		/*$time = time();
		$s = date('Y年m月', $time);
		$this->assign('s', $s);

		$user = new User();
		// 查询数据集
		$data = $user->where('id', Session::get('id'))->select();

		$this->assign('data', $data);

		$userinfo = new Userinfo;
		$user_id = Session::get('user_id');
		//查询图片路径
		$path = $userinfo->where('user_id', $user_id)->value('pic');
		//dump($path);
		$this->assign('path', $path);*/
		$indent = new Indent();
		$datai = $indent->where('businessman_id',Session::get('id'))->select();
		//dump($datai);
		foreach ($datai as  $v) {
			$v['data'] = date("Y-m-d",$v['create_time']);
			//$v['data_time'] = date("H-i-s",($v['create_time'] + 10*24*60*60 -time()));
			$day = ceil((($v['create_time']  -time() +10*3600*24))/24/3600);
			$hours = ((($v['create_time']  -time() +10*3600*24))/24/3600 - (($v['create_time']  -time() +10*3600*24))/24/3600)*24;
			$min = (((($v['create_time']  -time() +10*3600*24))/24/3600 - (($v['create_time']  -time() +10*3600*24))/24/3600)*24 -((($v['create_time']  -time() +10*3600*24))/24/3600 - (($v['create_time']  -time() +10*3600*24))/24/3600)*24)*60;
			$v['data_time'] = $day.'天'.$hours.'时'.$min.'分';
		}
		//$time = time();
		//$this->assign('time', $time);
		$this->assign('datai', $datai);
		//dump($datai);
		return $this->fetch();
	}

	public function change()
	{
		$id = Session::get('id');
		$indent = new Indent();
		//$a = $indent->destroy(['goods_id' => $_GET['goods_id'],'user_id' => Session::get('user_id')]);
		$a = Db::table('s_indent')
		->where('goods_id', $_GET['goods_id'])
		->where('businessman_id', $id)	
		->update([
			'send' => 1,
			'update_time' => time()
			]);		
		if ($a) {
			$this->redirect('__SITE__/badmin/order/order');

		} else {
			$this->error('确认失败');
		}
	}

	
}