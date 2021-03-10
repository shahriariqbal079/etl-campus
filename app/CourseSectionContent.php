<?php

namespace App;

use App\CourseSection;
use Illuminate\Database\Eloquent\Model;

class CourseSectionContent extends Model
{
    protected $guarded = [];

    public function courseSection()
    {
        return $this->belongsTo(CourseSection::class);
    }
}
