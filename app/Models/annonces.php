<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class annonces extends Model
{
    use HasFactory;
    protected $fillable = ['type','biens_id'];

    public function biens(){
        return $this->belongsTo(biens::class);
    }

}
