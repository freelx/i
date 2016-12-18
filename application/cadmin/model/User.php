<?php

namespace app\cadmin\model;
use think\Model;
class User extends Model
{
	public function userinfo()
	{
	return $this->hasOne('userinfo')->field('email');
	}
}