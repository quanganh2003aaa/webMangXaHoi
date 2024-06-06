<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class friendrequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'idUser1',
        'idUser2',
        'status'
    ];
}
