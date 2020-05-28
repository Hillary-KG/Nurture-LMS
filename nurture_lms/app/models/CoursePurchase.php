<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class CoursePurchase extends Model
{
    protected $fillable = ['trans_id', 'course_id'];

    public function enrollment()
    {
        return $this->belongsTo('App\models\Course');
    }
}
