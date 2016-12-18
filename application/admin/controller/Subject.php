<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Db;
use think\Request;
use app\admin\model\Category;
use app\admin\model\Theme;
class Subject extends Controller
{
	public function elements()
	{
		$Theme = new Theme;
		$Theme = $Theme->where('id','>',0)->select();
		///dump($Category);

		foreach($Theme as $t){
			$data[] = $t;
		}
		$this->assign('data', $data);
		return $this->fetch();
	}
	public function Modify()
	{
		//dump($_POST);
			$d = count($_POST['theme']['theme_name']);
			for ($i=0; $i < $d; $i++) { 
				$a = Db::table('s_theme')
				->where('id', $_POST['theme']['id'][$i])
				->update(['theme_name' => $_POST['theme']['theme_name'][$i],'update_time' => time()]);
			}
			if ($a) {
				$this->success('更新成功');
			} else {
				$this->error('更新失败');
			}


	}
	public function buttons()
	{
		return $this->fetch();
	}
	public function Added()
	{
		//dump($_POST);
		$data = Request::instance()->post();
		//echo $data['theme_name'];
		if ($data['theme_name']) {
		$a = Db::table('s_theme')
		->insert(['theme_name' => $data['theme_name'],'create_time' => time()]);
		if ($a) {
				$this->success('新增成功');
		} else {
				$this->error('新增失败');
		}
		} else {
			$this->error('新增主题站不能为空');
		}
		


	}
	public function treeview()
	{
		$theme = new Theme;
		$theme = $theme->where('id','>',0)->select();
		///dump($Category);
		$d = count($theme);
		//dump($d);
		foreach($theme as $cate){
			$data[] = $cate;
		}
		$this->assign('data', $data);
		$this->assign('d', $d);
		return $this->fetch();
	}
	public function delete()
	{
		$theme = new Theme();
		$data = Request::instance()->post();
		//dump($data['theme']['id']);
		foreach ($data['theme']['id'] as $value) {
			$a = $theme->destroy($value,true);
		}
		if ($a) {
				$this->success('删除成功');
		} else {
				$this->error('删除失败');
		}

	}
	

}









