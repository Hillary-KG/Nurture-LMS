<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['course_name', 'description', 'cost', 'tutor_id', 'duration', 'status'];

    public function tutor()
    {
        return $this->BelongsTo('App\models\User');
    }

    public function category()
    {
        return $this->BelongsTo('App\models\CourseCategory');
    }

    public function enrollment()
    {
       return $this->hasMany('App\models\StudentCourseEnrollment');
    }

    public function reviews()
    {
        return $this->morphMany('App\models\Reviews', 'reviewable');
    }
}
