<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MProperty extends Model
{
    protected $fillable = ['title', 'description', 'keep_history', 'onchange'];

    public function m_class() {
        $this->belongsTo(MClass::class);
    }

    public function m_object() {
        $this->belongsTo(MObject::class);
    }
}
