<?php

namespace app\cadmin\model;
use think\Model;
use traits\model\SoftDelete;
class Car extends Model
{
		public function Goods ()
	{
		return $this->belongsTo('Goods', 'goods_id', 'id');

	}
			use SoftDelete;
		protected static $deleteTime = 'delete_time';
}