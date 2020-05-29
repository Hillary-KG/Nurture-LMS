<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $fillable = ['rating', 'comment', 'reviewable_id', 'reviewable_type'];

    public function revieable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo('App\models\User');
    }
}
