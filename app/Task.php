<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $attributes = [
        'status' => 0,
    ];
}
