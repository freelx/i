<?php

namespace app\cadmin\model;
use think\Model;
use traits\model\SoftDelete;
class Indent extends Model
{
				use SoftDelete;
		protected static $deleteTime = 'delete_time';
}