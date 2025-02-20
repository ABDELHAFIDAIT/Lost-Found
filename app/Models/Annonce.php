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


    public function user()
    {
        return $this->belongsTo(User::class,'id_user');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class,'id_annonce');
    }
}
