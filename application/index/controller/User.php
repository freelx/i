<?php

namespace app\index\controller;
use think\Request;
use think\View;
class User
{
	public function profile()
	{
		return $this->fetch();
	}
}