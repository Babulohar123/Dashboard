<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $table = 'site_settings';  // Your DB table name

    protected $fillable = ['key', 'value'];

    public $timestamps = true;
}
