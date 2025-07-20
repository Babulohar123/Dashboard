<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name', 'description', 'code', 'teacher_id', 'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    public function studentMarks()
    {
        return $this->hasMany(StudentMark::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
}