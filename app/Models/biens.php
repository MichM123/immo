<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biens extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'adresse',
        'type_id',
        'superficie',
        'statut',
        'description',
        'nombre_pieces',
        'prix',
        'salle_bains',
        'ville_id',
        'piscine',
        'garage',
        'meuble',
        'document',
        'user_id',
        'accept'
    ];

    public function images(){
        return $this->hasMany(Images::class);
    }

    public function annonces(){
        return $this->hasMany(Annonce::class, 'biens_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function type_biens(){
        return $this->belongsTo(type_biens::class);
    }
    public function ville(){
        return $this->belongsTo(villes::class);
    }
}
