<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentModel extends Model
{

    protected $fillable = ['name', 'email', 'phone', 'address'];
}
