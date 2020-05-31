<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class CoursePurchase extends Model
{
    protected $fillable = ['trans_id', 'course_id', 'user_id', 'status'];

    public function course()
    {
        return $this->belongsTo('App\models\Course');
    }

    public function user()
    {
        return $this->belongsTo('App\models\User');
    }
}
