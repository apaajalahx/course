<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseActive extends Model
{
    use HasFactory;
    
    public function member()
    {
        return $this->belongsTo('App\Models\Member', 'member_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course', 'course_id', 'id');
    }

    public function mentor()
    {
        return $this->belongsTo('App\Models\Mentor', 'mentor_id', 'id');
    }
}
