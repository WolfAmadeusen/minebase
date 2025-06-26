<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    public $fillable = [
        'name',
        'online',
        'status_server'
    ];

    public $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];
}
