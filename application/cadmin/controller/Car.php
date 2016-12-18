<?php
namespace app\cadmin\controller;
use app\sadmin\model\User;
use app\sadmin\model\Goodscomment;
use app\cadmin\model\Goods;
use app\cadmin\model\Car as ca;
use think\Controller;
use think\Session;
use think\Model;
use think\Db;
use think\View;
use traits\model\SoftDelete;
use think\Request;
class Car extends Controller
{

	public function car()
	{  
		$car = new ca();
		// 查询数据集
		$data = $car->where('user_id', Session::get('user_id'))->select();
		/*foreach ($data as $value) {
			dump(count($value->goods_name));
		}*/
		//dump($data);
		$gata = $car->where('user_id', Session::get('user_id'))->select();
		$user = Db::table('s_user')
		->where('id','=',Session::get('user_id'))
		->select();
		$username = $user[0]['username'];
		//dump($username);
		$this->assign('username', $username);
		$this->assign('gata', $gata);
		$this->assign('data', $data);
		// 或者批量赋值
		
		
		return $this->fetch();
	}

	public function add()
	{

		
		//dump($_POST);
		$data = array();
		$count = count($_POST['data']['price']);
		for ($i=0; $i < $count; $i++) { 
		$goods = Db::table('s_goods')
		->where('id','=',$_POST['data']['goods_id'][$i])
		->select();
		$data[$i] = $goods[0]['master_id'];
		}
		//查询商户id
		//dump($data);
		for ($i=0; $i < $count; $i++) { 
		$businessman = Db::table('s_businessman')
		->where('id','=',$data[$i])
		->select();
		$business[$i] = $businessman[0];
		}
		//dump($business);
		//查询商户表相关数据
		for ($i=0; $i < $count; $i++) { 
		$goodsi = Db::table('s_goods')
		->where('id','=',$_POST['data']['goods_id'][$i])
		->select();
		$goods[$i] = $goodsi[0];
		}
		//dump($goods);
		//查询商品表相关数据

		$user = Db::table('s_user')
		->where('id','=',Session::get('user_id'))
		->select();
		//dump($user->userinfo['email']);
		//查询用户表相关数据	
		if ($user[0]['balance'] <= 0) {
			$this->error('请先充值');
		} 


		//查询user详细信息
		for ($i=0; $i < $count; $i++) { 
		$buy1 = Db::table('s_businessman')
		->where('id', $business[$i]['id'])
		->update([
			'balance' => $business[$i]['balance'] + $_POST['data']['price'][$i] * $_POST['data']['num'][$i],
			'deal_sum' => $business[$i]['deal_sum'] + $_POST['data']['price'][$i] * $_POST['data']['num'][$i],
			'count' => $business[$i]['count'] + 1 * $_POST['data']['num'][$i],
			'update_time' => time()
			]);

		}
				//商户表相关交易数据更新
		for ($i=0; $i < $count; $i++) { 
		$buy2 = Db::table('s_goods')
		->where('id', $_POST['data']['goods_id'][$i])
		->update([
			'num' => $goods[$i]['num'] + 1 * $_POST['data']['num'][$i],
			'stock' => $goods[$i]['stock'] - 1 * $_POST['data']['num'][$i],
			'update_time' => time()
			]);
		}
		//商品表相关交易数据更新
		for ($i=0; $i < $count; $i++) { 
		$buy3 = Db::table('s_user')
		->where('id', Session::get('user_id'))
		->update([
			'balance' => $user[0]['balance'] - array_sum($_POST['data']['price']),
			'frequency' => $user[0]['frequency'] + 1 * $_POST['data']['num'][$i],
			'cost' => $user[0]['cost'] + $_POST['data']['price'][$i],
			'update_time' => time()
			]);
		}
		//dump($buy3);
		//用户表交易信息更新
		for ($i=0; $i < $count; $i++) { 
		$buy4 = Db::table('s_indent')
		->insert([
			'businessman_id' => $business[$i]['id'],
			'businessman_name' => $business[$i]['businessname'],
			'shop_name' => $business[$i]['shop_name'],
			'goods_id' => $goods[$i]['id'],
			'pic' => $goods[$i]['pic'],
			'goods_name' => $goods[$i]['goods_name'],
			'user_id' => Session::get('user_id'),
			'user_name' => $user[0]['username'],
			'price' => $_POST['data']['price'][$i],
			'num' => $_POST['data']['num'][$i],
			'create_time' => time(),
			'feature_code' => md5(time())

		]);
		Db::table('s_indent')->where('num','=',0)->delete();
	}
		//生成订单信息
		//$car = new ca();
		for ($i=0; $i < $count; $i++) { 
			if ($_POST['data']['num'][$i] > 0) {
				//ca::destroy(,true);
				ca::where(['goods_id' => $_POST['data']['goods_id'][$i],'user_id' => Session::get('user_id')])->delete();
			}
		
		}
		 $userinfo =  Db::table('s_userinfo')
		->where('user_id','=',Session::get('user_id'))
		->select();
		//dump($userinfo);
		if($userinfo){
			$this->con($userinfo[0]['email']);		
		}else{
			$this->error('请先完善个人信息');
		}

		//软删除已购买商品
		if ($buy1 && $buy2 && $buy4 ) {
			$this->success('购买成功');

		} else {
			$this->error('购买失败');
		}

	}
	public function con($e)
	{
		$subject="购买回执";
		//dump($e);
		$email=$e;
		// $email="718041217@qq.com";

		$con = '感谢您对本网站的支持';
	$status = send($email,$subject,$con);
	//dump($status);
	if($status){
		echo 'success';
	}else{
		echo '邮件发送失败，请检查您的邮箱地址是否正确';
	}

	}
}
