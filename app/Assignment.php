<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = [
        'title', 'description', 'subject_id', 'teacher_id', 'due_date', 'total_marks', 'status'
    ];

    protected $dates = [
        'due_date'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function studentMarks()
    {
        return $this->hasMany(StudentMark::class);
    }
}