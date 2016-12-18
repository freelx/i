<?php

namespace app\sadmin\model;
use think\Model;
use traits\model\SoftDelete;
class User extends Model
{
	use SoftDelete;
	protected static $deleteTime = 'delete_time';
}