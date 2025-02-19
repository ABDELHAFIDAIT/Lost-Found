<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;


    protected $fillable = [
        'titre',
        'description',
        'photo',
        'date',
        'status',
        'type',
        'user_id',
        'categorie_id',
    ];
}
