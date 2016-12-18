<?php 
namespace app\index\controller;

use think\Controller;
use app\index\model\User;
use app\index\model\Article;

class Close extends Controller
{  
    
   

    public function close()
	{
		return $this->fetch();
	}
	protected function _initialize(Request $request = null)
	{

	}
}
