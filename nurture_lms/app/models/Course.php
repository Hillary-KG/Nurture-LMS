<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'description', 'cost', 'user_id', 'duration', 'status'];

    public function tutor()
    {
        return $this->BelongsTo('App\models\User');
    }

    public function category()
    {
        return $this->BelongsTo('App\models\CourseCategory');
    }
}
