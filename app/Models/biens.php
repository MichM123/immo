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
        'description',
        'code_postal',
        'superficie',
        'nombre_pieces',
        'prix',
        'type_id',
        'ville_id',
        'document',
        'statut',
        'user_id',
        'accept'
    ];

    public function images(){
        return $this->hasMany(Images::class);
    }

    public function annonces(){
        return $this->hasMany(Annonce::class, 'biens_id');
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function type_biens(){
        return $this->belongsTo(type_biens::class);
    }
    public function ville(){
        return $this->belongsTo(villes::class);
    }
}
