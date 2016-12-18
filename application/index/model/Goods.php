<?php
namespace app\index\model;
use think\Model;
class Goods extends Model
{
	public function Businessman ()
	{
		return $this->belongsTo('Businessman', 'master_id', 'id');

	}

}