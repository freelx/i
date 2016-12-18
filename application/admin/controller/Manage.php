<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Db;
use think\Request;
use app\admin\model\Siteinfo;
class Manage extends Controller
{
	public function blogroll()
	{	

		$site = new Siteinfo();
		$data =
		$site
		->where('id','>',0)
		->where('attribution','=',1)
		->paginate(5);
		$page = $data->render();
		//网站信息查询，并对数据进行分页
		$this->assign('data', $data);
		$this->assign('page', $page);
		return $this->fetch();
	}
	public function modify()
	{
		$data = Request::instance()->post();
		$d = count($_POST['modify']['id']);
		//dump($d);
		//dump($data['modify']);
		for ($i=0; $i < $d; $i++) { 
			Db::table('s_siteinfo')
			->where('id', $_POST['modify']['id'][$i])
			->update(['site_name' => $_POST['modify']['name'][$i],'blogroll' => $_POST['modify']['blogroll'][$i],'update_time' => time()]);
			}
		//网站信息更新
		$this->redirect('__SITE__/admin/Manage/blogroll',302);
	}
	public function close()
	{
		$data = Request::instance()->get();
		
		$user = Db::table('s_siteinfo')
		->where('id','=',$data['id'])
		->select();
		if ($user[0]['switch'] == 0) {
			Db::table('s_siteinfo')
			->where('id', $data['id'])
			->update(['switch' => 1]);
		} else {
			Db::table('s_siteinfo')
			->where('id', $data['id'])
			->update(['switch' => 0]);
		}
		//网站关闭，状态切换。本质为字段的更新，可惜实现的不完整。
		$this->redirect('__SITE__/admin/Manage/blogroll',302);		
	}
	public function blogroll_delete()
	{
		$site = new Siteinfo();
		$data = Request::instance()->get();
		//友情链接信息删除（软删除）
		$a = $site->destroy($data['id']);
		if ($a) {
				$this->success('删除成功');
		} else {
				$this->error('删除失败');
		}		
	}
	public function site_insert()
	{
		$data = Request::instance()->post();
		if ($data['name'] && $data['url']) {
		$user = Db::table('s_siteinfo')
		->insert(['site_name' => $data['name'],'blogroll' => $data['url'],'create_time' => time()]);
			$this->success('添加成功');
		} else {

			$this->error('添加失败或者为空');
		}
		//友情链接的添加
	}
		public function information()
	{	

		$data = Db::table('s_siteinfo')
		->where('attribution','=',0)
		->select();
		$this->assign('data', $data);
		//本站信息的查询
		return $this->fetch();
	}
	public function imodify()
	{
		$data = Request::instance()->post();
		$a = Db::table('s_siteinfo')
		->where('id', $data['modify'][3])
		->update(['site_name' => $data['modify'][0],'blogroll' => $data['modify'][1],'record' => $data['modify'][2],'create_time' => time()]);
		if ($a) {
				$this->success('修改成功');
		} else {
				$this->error('修改失败');
		}
				//本站信息的修改
	}
	public function jMo()
	{
		$data = Request::instance()->get();

		$user = Db::table('s_siteinfo')
		->where('id','=',$data['id'])
		->select();

		if ($user[0]['close'] == 1) {
			Db::table('s_siteinfo')
			->where('id', $data['id'])
			->update(['close' => 0]);
		} else {
			Db::table('s_siteinfo')
			->where('id', $data['id'])
			->update(['close' => 1]);
		}
		$this->redirect('__SITE__/admin/Manage/information',302);	
	}

}