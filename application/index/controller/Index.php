<?php 
namespace app\index\controller;

use think\Controller;
use think\View;
use think\Db;
use think\Request;
use think\Session;
use app\index\model\User;
use app\index\model\Theme;
use app\index\model\Goods;
use app\index\model\Notice;
use app\index\model\Goodscomment;
class Index extends Controller
{  
    

    public function index()
    {   
    	
    	$theme = new Theme();
    	$data = $theme
		->where('id','>',0)
		->select();

		$Goods = new Goods();
		$Goodscomment = new Goodscomment();
		$n = 0;
		foreach ($data as  $value) {
			$n++;
		}
		//dump($n);
		$bb = array();
		for ($i=0; $i < $n; $i++) { 
			$aa = $Goods
			->where('theme_id',($i+1))
			->where('state',1)
			->limit(4)
			->order('num desc')
			->select();
			$bb[$i] = $aa;

		}
		$site = Db::table('s_siteinfo')
		->where('attribution','=',0)
		->select();
		$si = Db::table('s_siteinfo')
		->where('attribution','=',1)
		->select();
		$this->assign('data', $data);
		//dump($site);
		$max = Goods::max('hits');
		$best = $Goods
		->order('hits desc')
		->select();
		$notice = Db::table('s_notice')
		->where('id','>',0)
		->select();
		$count = count($notice);
		$noti = Db::table('s_notice')
		->where('id','=',$count)
		->select();		
		$n = $noti[0]['content'];
		//dump($si);
		$count = count($best);
		$this->assign('n', $n);
		$this->assign('bb', $bb);
		$this->assign('user_id', Session::get('user_id'));
		$this->assign('username', Session::get('username'));
		$this->assign('user_type', Session::get('user_type'));
		$this->assign('count', $count);
		$this->assign('best', $best);
		$this->assign('site', $site);
		$this->assign('si', $si);
		$this->assign('data', $data);


		return $this->fetch();

       
    }



}
