<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class StudentCourseEnrollment extends Model
{
    protected $fillable = ['student_id', 'course_id', 'time_spent'];

    public function student()
    {
        return $this->belongsTo('App\models\User');
    }
    public function course()
    {
        return $this->belongsTo('App\models\Course');
    }

    public function purchase()
    {
        return $this->hasMany('App\models\CoursePurchase');
    }
}
