<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    protected $fillable = ['category'];

    public function course()
    {
        $this->hasMany('App\models\Course');
    }
}
