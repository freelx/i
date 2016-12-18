<?php
namespace app\admin\model;

use think\Model;
use think\Db;
use traits\model\SoftDelete;
class Theme extends Model
{
		use SoftDelete;
		protected static $deleteTime = 'delete_time';
}
