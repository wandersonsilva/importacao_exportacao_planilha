<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bulk extends Model
{
    //
    protected $table = 'bulk';
    protected $fillable = [
        'name', 'email'
    ];
}
