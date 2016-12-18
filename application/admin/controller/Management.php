<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Db;
use think\Request;
use app\admin\model\Businessman;
use app\admin\model\User;
class Management extends Controller
{
	public function tables()
	{
		$data = Db::table('s_businessman')
		->where('id','>',0)
		->paginate(5);
		$page = $data->render();
		$this->assign('data', $data);
		$this->assign('page', $page);
		return $this->fetch();
		//商户信息的查询
	}
	public function jqgrid()
	{	

		$data = Db::table('s_user')
		->where('user_type','=',1)
		->where('cost','<',3000)
		->order('cost desc')
		->paginate(5);
		$da = Db::table('s_user')
		->where('user_type','=',1)
		->where('cost','<',3000)
		->select();		
		$page = $data->render();
		$count = count($da);		
		$this->assign('count', $count);
		$this->assign('data', $data);
		$this->assign('page', $page);
		return $this->fetch();
		//vip信息的查询
	}
	public function jmodify()
	{
		$data = Request::instance()->post();
		$d = count($_POST['jmodify']['balance']);
		for ($i=0; $i < $d; $i++) { 
			Db::table('s_user')
			->where('id', $_POST['jmodify']['id'][$i])
			->update(['balance' => $_POST['jmodify']['balance'][$i],'update_time' => time()]);
			}
			$this->redirect('__SITE__/admin/Management/jqgrid',302);
			//用户信息的修改
	}
	public function jmo()
	{
		$data_a = Request::instance()->get();
		//dump($data_a['id']);
		$user = Db::table('s_user')
		->where('id','=',$data_a['id'])
		->select();
		//dump($bus[0]['switch']);
		if ($user[0]['lockuser'] == 0) {
			Db::table('s_user')
			->where('id', $data_a['id'])
			->update(['lockuser' => 1]);
		} else {
			Db::table('s_user')
			->where('id', $data_a['id'])
			->update(['lockuser' => 0]);
		}
		$this->redirect('__SITE__/admin/Management/jqgrid',302);
	//锁定用户
	}

	public function mo()
	{
		$data_a = Request::instance()->get();
		//dump($data_a['id']);
		$bus = Db::table('s_businessman')
		->where('id','=',$data_a['id'])
		->select();
		//dump($bus[0]['switch']);
		if ($bus[0]['switch'] == 0) {
			Db::table('s_businessman')
			->where('id', $data_a['id'])
			->update(['switch' => 1]);
		} else {
			Db::table('s_businessman')
			->where('id', $data_a['id'])
			->update(['switch' => 0]);
		}
		$this->redirect('__SITE__/admin/Management/tables',302);
		//商户账号的封禁
	}
	public function Modify()
	{
		$data = Request::instance()->post();
		
		
		$d = count($_POST['modify']['id']);
		//dump($d);
		for ($i=0; $i < $d; $i++) { 
			Db::table('s_businessman')
			->where('id', $_POST['modify']['id'][$i])
			->update(['balance' => $_POST['modify']['balance'][$i],'deal_sum' => $_POST['modify']['deal_sum'][$i],'update_time' => time()]);
			}
			$this->redirect('__SITE__/admin/Management/tables',302);
			//商户信息的修改
	}
	public function user_vip()
	{
		$da = Db::table('s_user')
		->where('cost','>',3000)
		->select();
		$count = count($da);
		$data = Db::table('s_user')
		->where('cost','>',3000)
		->order('cost desc')
		->paginate(5);
		$page = $data->render();
		$this->assign('count', $count);
		$this->assign('data', $data);
		$this->assign('page', $page);
		return $this->fetch();
		//vip信息的查询
	}
	public function vmodify()
	{
		$data = Request::instance()->post();
		dump($data);
		$d = count($_POST['vmodify']['balance']);
		for ($i=0; $i < $d; $i++) { 
			Db::table('s_user')
			->where('id', $_POST['vmodify']['id'][$i])
			->update(['balance' => $_POST['vmodify']['balance'][$i],'update_time' => time()]);
			}
			$this->redirect('__SITE__/admin/Management/user_vip',302);

	}
	public function vmo()
	{
		$data_a = Request::instance()->get();
		//dump($data_a['id']);
		$user = Db::table('s_user')
		->where('id','=',$data_a['id'])
		->select();
		//dump($bus[0]['switch']);
		if ($user[0]['lockuser'] == 0) {
			Db::table('s_user')
			->where('id', $data_a['id'])
			->update(['lockuser' => 1]);
		} else {
			Db::table('s_user')
			->where('id', $data_a['id'])
			->update(['lockuser' => 0]);
		}
		$this->redirect('__SITE__/admin/Management/user_vip',302);
	
	}
	public function user_admin()
	{
		$user = new User();
		$da = 
		$user
		->where('user_type','=',-1)
		->select();
		$count = count($da);
		$data = 
		$user
		->where('user_type','=',-1)
		->paginate(5);
		$page = $data->render();
		$this->assign('count', $count);
		$this->assign('data', $data);
		$this->assign('page', $page);
		return $this->fetch();
	}
	public function admin_insert()
	{
		//dump(Request::instance()->post());
		$id = Request::instance()->post();
		$user = Db::table('s_user')
		->where('id','=',$id['id'])
		->update(['user_type' => -1,'update_time' => time()]);
		//dump($user);
		if ($user == 1) {
			$this->success('晋升成功');
		} else {
			$this->error('晋升失败或者晋升id为空');
		}
		
	}
	public function amo()
	{
		$data_a = Request::instance()->get();
		//dump($data_a['id']);
		$user = Db::table('s_user')
		->where('id','=',$data_a['id'])
		->select();
		//dump($bus[0]['switch']);
		if ($user[0]['lockuser'] == 0) {
			Db::table('s_user')
			->where('id', $data_a['id'])
			->update(['lockuser' => 1]);
		} else {
			Db::table('s_user')
			->where('id', $data_a['id'])
			->update(['lockuser' => 0]);
		}
		$this->redirect('__SITE__/admin/Management/user_admin',302);
	
	}
		public function admin_delete()
	{
		$user = new User();
		$data = Request::instance()->get();
		dump($data['id']);
		$a = $user->destroy($data['id']);
		if ($a) {
				$this->success('删除成功');
		} else {
				$this->error('删除失败');
		}
	
	}
	public function announcement()
	{

		return $this->fetch();
	}
	public function announcement_insert()
	{
		/*虽然能用，但是蠢的一批*/
		if (array_key_exists('user', $_POST) && array_key_exists('business', $_POST) && array_key_exists('admin', $_POST)) {
					$a = Db::table('s_notice')
					->insert(['content' => $_POST['content'],'user' => 2,'business' => 1]);
					if ($a) {
					$this->success('公告发送成功');
						} else {
					$this->error('公告发送失败');
						}
			} elseif (array_key_exists('user', $_POST) && array_key_exists('business', $_POST)) {
					$a = Db::table('s_notice')
					->insert(['content' => $_POST['content'],'user' => 1,'business' => 1]);
					if ($a) {
					$this->success('公告发送成功');
						} else {
					$this->error('公告发送失败');
						}
			} elseif (array_key_exists('business', $_POST) && array_key_exists('admin', $_POST)) {
					$a = Db::table('s_notice')
					->insert(['content' => $_POST['content'],'user' => -1,'business' => 1]);
					if ($a) {
					$this->success('公告发送成功');
						} else {
					$this->error('公告发送失败');
						}
			} elseif (array_key_exists('user', $_POST) && array_key_exists('admin', $_POST)){
					$a = Db::table('s_notice')
					->insert(['content' => $_POST['content'],'user' => 2]);
					if ($a) {
					$this->success('公告发送成功');
						} else {
					$this->error('公告发送失败');
						}
			} elseif (array_key_exists('user', $_POST)){
					$a = Db::table('s_notice')
					->insert(['content' => $_POST['content'],'user' => 1]);
					if ($a) {
					$this->success('公告发送成功');
						} else {
					$this->error('公告发送失败');
						}
			} elseif (array_key_exists('business', $_POST)){
					$a = Db::table('s_notice')
					->insert(['content' => $_POST['content'],'business' => 1]);
					if ($a) {
					$this->success('公告发送成功');
						} else {
					$this->error('公告发送失败');
						}
			} elseif (array_key_exists('admin', $_POST)){
					$a = Db::table('s_notice')
					->insert(['content' => $_POST['content'],'user' => -1]);
					if ($a) {
					$this->success('公告发送成功');
						} else {
					$this->error('公告发送失败');
						}
			} else{
					$this->error('请选择发送群体');
			}
		
	}
	

}
