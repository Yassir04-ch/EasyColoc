<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['categorie_name','colocation_id'];

    public function colocation(){
        return $this->belongsTo(Colocation::class);
    }

    public function depense(){
        return $this->hasMany(Depense::class);
    }
}

