<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MClass extends Model
{
    protected $table = 'classes';

	public function m_objects() {
		return $this->hasMany(MObject::class);
	}

    static public function add($class_name, $parent_class = '') {
        $parent_id = ($parent_class != '')? self::add($parent_class) : 0;
        $existing_class = MClass::where('title', '=', $class_name)->first();

    }
}
