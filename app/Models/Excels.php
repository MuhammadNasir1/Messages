<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excels extends Model
{
    use HasFactory;

    protected $table = "excels";
    protected $fillable = [
        'name',
        'phone',
        'message',

    ];
}
