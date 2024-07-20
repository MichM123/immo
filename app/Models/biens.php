<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biens extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_id',
        'ville_id',
        'code_postal',
        'adresse',
        'description',
        'superficie',
        'nombre_pieces',
        'document',
        'statut',
        'prix',
        'user_id',
    ];

    public function image(){
        return $this->hasMany(image::class);
    }

    public function annonces(){
        return $this->hasMany(annonces::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function type_biens(){
        return $this->belongsTo(type_biens::class);
    }
    public function ville(){
        return $this->belongsTo(ville::class);
    }
}
