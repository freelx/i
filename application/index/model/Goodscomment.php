<?php
namespace app\index\model;
use think\Model;
class Goodscomment extends Model
{
			public function Goods ()
	{
		return $this->belongsTo('Goods', 'goods_id', 'id');

	}
			public function User ()
	{
		return $this->belongsTo('User', 'user_id', 'id');

	}
				public function Userinfo ()
	{
		return $this->belongsTo('Userinfo', 'user_id', 'user_id');

	}
}