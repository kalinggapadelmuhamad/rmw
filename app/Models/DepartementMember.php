<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartementMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'departementid',
        'userid',
    ];
}
