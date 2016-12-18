<?php

namespace app\sadmin\model;
use think\Model;
class Goodscomment extends Model
{
	public function user()
	{
		return $this->belongsTo('User', 'user_id', 'id');
	}
	
	public function goods()
	{
		return $this->belongsTo('Goods', 'goods_id', 'id');
	}
}