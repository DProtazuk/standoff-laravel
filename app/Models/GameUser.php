<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'idUsers', 
        'img',
        'login'
    ];
    public $timestamps=false;
}