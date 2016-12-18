<?php
namespace app\sadmin\controller;

use app\sadmin\model\User;

use app\sadmin\model\Goodscomment;

use think\Controller;

use think\Model;

use think\View;

use traits\model\SoftDelete;

use think\Request;

use think\Db;
class Index extends Controller
{
	public function index()
	{	
		$data = User::where('id','>',0)->where('delete_time', null)->select();
		

		foreach ($data as $value) {
			$value['ss'] = date('Y-m-d', $value['create_time']);
		    //return $time;
		}

		$this->assign('data', $data);
		
			$comment = Goodscomment::where('id', '>', 0)->select();
		foreach ($comment as $value) {
			$value['tt'] = date('Y-m-d', $value['create_time']);
		}
		
		$this->assign('comment', $comment);
		
		return $this->fetch();
	}

	public function soft()
	{
		//dump($_POST['softdelete']);
		$rel = User::destroy($_POST['softdelete']);
		if($rel){
			$this->success('回收成功');
		}


	}

	public function change()
	{
		
		$id = $_POST['data']['id'];
		$username = $_POST['data']['username'];
		$account = $_POST['data']['account'];
		$count = count($id);
		
		for($i=0; $i<$count; $i++) {
			$user = new User;
			$list = [
			['id'=>$id[$i], 'username'=>$username[$i], 'account'=>$account[$i]]
			];
			$rel = $user->saveAll($list);

		}

		$this->success('修改成功');



		
	}

	public function lock(Request $request)
	{
		$r = Request::instance()->get('id');
		//dump($r);
		$user = User::get($r);
		$user->lockuser = '1';
		$s = $user->save();
		if($s) {
			$this->success('锁定成功');
		}
	}

	public function unlock(Request $request)
	{
		$r = Request::instance()->get('id');
		//dump($r);
		$user = User::get($r);
		$user->lockuser = '0';
		$s = $user->save();
		if($s) {
			$this->success('解锁成功');
		}

	}


	public function softr()
	{
		//dump($_POST);
		$rel = Goodscomment::destroy($_POST['tt']);
		if($rel){
			$this->success('回收成功');
		}


	}


} 