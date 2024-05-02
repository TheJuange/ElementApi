<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class elementos extends Model
{
    protected $fillable = [
        'num_atomico',
        'simbolo',
        'nombre',
        'grupo',
        'periodo',
        'densidad',
        'fusion',
        'ebullicion'
    ];
    use HasFactory;
}
