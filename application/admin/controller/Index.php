<?php

namespace app\admin\controller;
use app\admin\model\User;
use app\admin\model\Businessman;
use think\Controller;
use think\View;
use think\Db;
class Index extends Controller
{
	public function index()
	{
		$bus = new Businessman;
		$user = new User;
		$userinfo = $user->where('user_type','=',1)->select();
		$admininfo = $user->where('user_type','=',-1)->select();
		$business = $bus->where('id','>',0)->select();
		$Vip = $user->where('cost','>',3000)->select();
		$vip_count = count($Vip);
		$user_count = count($userinfo);
		$admin_count = count($admininfo);
		$bus_count = count($business);
		$sum = Db::table('s_businessman')->field('SUM(deal_sum)')->select();
		$max = Db::table('s_businessman')->field('businessname,MAX(deal_sum)')->select();
		$min = Db::table('s_businessman')->field('businessname,MIN(deal_sum)')->select();
		$umax = Db::table('s_user')->field('username,MAX(cost)')->select();			
		//dump($min);
		$count = $admin_count + $user_count + $vip_count + $bus_count;
		//首页信息获取（相关用户信息）
		$this->assign('admin', $admin_count);
		$this->assign('user', $user_count);
		$this->assign('vip', $vip_count);
		$this->assign('bus', $bus_count);
		$this->assign('count', $count);
		$this->assign('sum', $sum);
		$this->assign('max', $max);
		$this->assign('umax', $umax);
		$this->assign('min', $min);
		return $this->fetch();
	}

}






















