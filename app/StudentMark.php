<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentMark extends Model
{
    protected $fillable = [
        'student_id', 'subject_id', 'assignment_id', 'marks_obtained', 'total_marks', 'exam_type', 'exam_date'
    ];

    protected $dates = [
        'exam_date'
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }

    public function getPercentageAttribute()
    {
        return ($this->marks_obtained / $this->total_marks) * 100;
    }
}