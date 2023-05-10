<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    use HasFactory;
    protected $fillable = [
        'lib',
        'description',
        'projet_id',
    ];
}
// php artisan make:migration create_emergencies_table --create=emergencies 
// php artisan make:controller IncidentController --resource --model=Incident      //  