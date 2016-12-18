<?php 
namespace app\index\controller;

use think\Controller;
use think\View;
use think\Db;
use think\Request;
use think\Session;
use app\index\model\User;
use app\index\model\Theme as the;
use app\index\model\Goods;
use app\index\model\Goodscomment;
use app\index\model\Businessman;
class Theme extends Controller
{  
	public function theme()
	{

		$theme = new the();
		$Goods = new Goods();
		/*
			商品信息查询，初次进入时整体查询排序，选定版块后，版块内查询排序
		*/
		if (!($_GET)) {
		$data = $Goods
		->order('num desc')
		->paginate(6);
		} else {
		$data = $Goods
		->where('theme_id',$_GET['theme_id'])
		->order('num desc')
		->select();
		}
		

		/*
			查询本站信息
		*/
		$site = Db::table('s_siteinfo')
		->where('attribution','=',0)
		->select();

		//$page = $data->render();
		$data_theme = $theme
		->where('id','>',0)
		->select();

		//dump($_GET);
		$this->assign('data_theme', $data_theme);
		$this->assign('user_id', Session::get('user_id'));
		$this->assign('username', Session::get('username'));
		$this->assign('user_type', Session::get('user_type'));
		$this->assign('data', $data);
		//$this->assign('page', $page);
		$this->assign('site', $site);
		return $this->fetch();
	}
	public function goodsdetails()
	{
		$Goods = new Goods();
		$theme = new the();
		$goodscomment = new Goodscomment();
		/*
			获取当前页面的goodsid
		*/
		$data = $Goods
		->where('id',$_GET['goods'])
		->select();
		foreach ($data as  $value) {
			$hits = $value['hits'];
		}
		/*
			当前商品点击量hits+1	
		*/
		Db::table('s_goods')
			->where('id', $_GET['goods'])
			->update(['hits' => $hits + 1]);
		/*
			页面主要内容查询，
		*/
		$dat = $Goods
		->where('id', $_GET['goods'])
		->select();
		/*
			获取当前商品主题名
		*/
		$data_theme = $theme
		->where('id','=',$dat[0]['theme_id'])
		->select();
		$theme = $data_theme[0]['theme_name'];
/*		foreach ($dat as $value) {
			dump($value->Goodscomment->content);
		}*/
		/*
			获取商品当前相关信息 以goodscomment为基准belongsto  关联user   goods
		*/
		$goodsinfo = $goodscomment
		->where('goods_id',$_GET['goods'])
		->order('create_time desc')
		->limit(5)
		->select();
		//dump($goodsinfo);
/*	foreach ($data as  $value) {
			dump($value->businessman->pic) ;
		}*/
		//dump($data);
		$time = time();
		/*
			获取本类最热商品，限5个
		*/
		$goods = $Goods
		->order('num desc')
		->where('theme_id',$dat[0]['theme_id'])
		->paginate(5);
		//
		$details = Db::table('s_userinfo')
		->where('user_id',Session::get('user_id'))
		->select();
		$price = $data[0]['price'];
		$user_id = Session::get('user_id');
		//dump($user_id);
		//dump($details);
		if (Session::get('user_id')) {
		$indent = Db::table('s_indent')
		->where('goods_id','=',$_GET['goods'])
		->where('user_id','=',Session::get('user_id'))
		->select();

		} else {
			$indent = 1;
		}

		$this->assign('indent', $indent);

		$this->assign('user_id', Session::get('user_id'));
		$this->assign('username', Session::get('username'));
		$this->assign('user_type', Session::get('user_type'));
		$this->assign('goods_id', $_GET['goods']);
		$this->assign('details', $details);
		$this->assign('data', $dat);
		$this->assign('price', $price);
		$this->assign('user_id', $user_id);
		$this->assign('goods', $goods);
		$this->assign('time', $time);
		$this->assign('goodsinfo', $goodsinfo);
		$this->assign('theme', $theme);	
		return $this->fetch();
	}
	public function add_comment()
	{
		//dump($_POST);
		/*
			获取最新评论相关参数，并插入评论表
		*/
		/*
			测试，没什么屌用
		*/

			
		$user = Db::table('s_goodscomment')
		->insert(['goods_id' => $_POST['goods_id'],
			'user_id' => $_POST['user_id']?$_POST['user_id']:1,
			'content' => $_POST['content'],
			'create_time' => time()]);
		$data = $_POST['goods_id'];
			if($user){
			//设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
			$this->success('发表成功');
			} else {
			//错误页面的默认跳转页面是返回前一页，通常不需要设置
			$this->error('发表失败');
			}
	}
	public function add_car()
	{
		if ($_GET['user_id']) {
			$user_id = $_GET['user_id'];
		} else {
			$this->error('请先登录/注册','__SITE__/index/auth/login');
		}
		$userinfo =  Db::table('s_userinfo')
		->where('user_id','=',Session::get('user_id'))
		->select();
		if($userinfo){
		$user = Db::table('s_user')
		->where('id','=',$user_id)
		->select();
		$user_name = $user[0]['username'];
		$goods = Db::table('s_goods')
		->where('id','=',$_GET['goods_id'])
		->select();
		//dump($_GET['goods_id']);
		$goods_id = $_GET['goods_id'];
		$goods_name = $goods[0]['goods_name'];

			$add_select = Db::table('s_car')
			->where(['user_id' => $user_id,'goods_id' => $goods_id])
			->select();
			if ($add_select) {
				$this->error('请不要重复加入购物车');
			}else{
			$add_car = Db::table('s_car')
			->insert(['user_id' => $user_id,
			'user_name' => $user[0]['username'],
			'goods_id' => $goods_id,
			'goods_name' => $goods_name,
			'price' => $_GET['price'],
			'create_time' => time()]);
			}
			if($add_car){
			//设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
			$this->success('加入购物车成功');
			} else {
			//错误页面的默认跳转页面是返回前一页，通常不需要设置
			$this->error('加入购物车失败');
			}	
		}else{
			$this->error('请先完善个人信息');
		}

	}
	public function purchase()
	{
		//dump($_GET);
		$businessman = Db::table('s_businessman')
		->where('id','=',$_GET['business_id'])
		->select();
		$goods = Db::table('s_goods')
		->where('id','=',$_GET['goods_id'])
		->select();	
		$user = Db::table('s_user')
		->where('id','=',$_GET['user_id'])
		->select();		
		 $userinfo =  Db::table('s_userinfo')
		->where('user_id','=',Session::get('user_id'))
		->select();

		//查询user详细信息
		//dump($user[0]);
		//商户表相关交易数据更新
		$buy1 = Db::table('s_businessman')
		->where('id', $_GET['business_id'])
		->update([
			'balance' => $businessman[0]['balance'] + $_GET['price'],
			'deal_sum' => $businessman[0]['deal_sum'] + $_GET['price'],
			'count' => $businessman[0]['count'] + 1,
			'update_time' => time()
			]);
		//商品表相关交易数据更新
		$buy2 = Db::table('s_goods')
		->where('id', $_GET['goods_id'])
		->update([
			'num' => $goods[0]['num'] + 1,
			'stock' => $goods[0]['stock'] - 1,
			'update_time' => time()
			]);
		//用户表交易信息更新
		$buy3 = Db::table('s_user')
		->where('id', $_GET['user_id'])
		->update([
			'balance' => $user[0]['balance'] - $_GET['price'],
			'frequency' => $user[0]['frequency'] + 1,
			'cost' => $user[0]['cost'] + $_GET['price'],
			'update_time' => time()
			]);
		$buy4 = Db::table('s_indent')
		->insert([
			'businessman_id' => $_GET['business_id'],
			'businessman_name' => $businessman[0]['businessname'],
			'shop_name' => $businessman[0]['shop_name'],
			'goods_id' => $goods[0]['id'],
			'pic' => $goods[0]['pic'],
			'goods_name' => $goods[0]['goods_name'],
			'user_id' => Session::get('user_id'),
			'user_name' => $user[0]['username'],
			'price' => $_GET['price'],
			'num' => 1,
			'create_time' => time(),
			'feature_code' => md5(time())

		]);
		$this->con($userinfo[0]['email']);
		Db::table('s_indent')->where('num','=',0)->delete();
		if ($buy1 && $buy2 && $buy3 && $buy4) {
			$this->success('购买成功');
		} else {
			$this->error('购买失败');
		}
		

	}
		public function con($e)
	{
		$subject="购买回执";
		
		$email=$e;
		// $email="718041217@qq.com";

		$con = '感谢您对本网站的支持';
	$status = send($email,$subject,$con);
	if($status){
		echo 'success';
	}else{
		echo 'error';
	}

	}


}