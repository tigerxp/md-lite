<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MObject extends Model
{
	public function m_class() {
		return $this->belongsTo(MClass::class);
	}

    public function m_properties() {
        return $this->hasMany(MProperty::class);
    }
}
