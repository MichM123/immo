<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;
    protected $fillable = ['biens_id', 'type'];

    public function biens(){
        return $this->belongsTo(Biens::class, 'biens_id');
    }

}
