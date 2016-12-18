<?php

namespace app\sadmin\model;
use think\Model;
use traits\model\SoftDelete;
class Businessman extends Model
{
		use SoftDelete;
		protected static $deleteTime = 'delete_time';
		
}

