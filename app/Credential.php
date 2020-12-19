<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'created_at' => 'datetime:m-d-Y'
    ];
}
