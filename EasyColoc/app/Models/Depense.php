<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    protected $fillable = ['titre','price','date'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function colocation(){
        return $this->belongsTo(Colocation::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function paiement(){
        return $this->hasMany(Paiement::class);
    }
}
