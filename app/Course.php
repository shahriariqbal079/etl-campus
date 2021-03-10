<?php

namespace App;

use App\CourseCategory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(CourseCategory::class);
    }

}
