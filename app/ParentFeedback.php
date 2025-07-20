<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentFeedback extends Model
{
    protected $table = 'parents'; // aapka table name 'parents' hi rahega
    protected $fillable = ['name', 'student_name', 'feedback_date', 'feedback', 'status'];
}
