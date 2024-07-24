<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $fillable = ['biens_id','url'];

    public function biens(){
        return $this->belongsTo(Biens::class);
    }
}
