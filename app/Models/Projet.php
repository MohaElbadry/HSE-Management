<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'user_id', //TODO:need to be removed
        'site_id',
        'proj_start'
    ];
}
