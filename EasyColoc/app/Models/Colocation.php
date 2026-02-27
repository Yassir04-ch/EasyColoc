<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colocation extends Model
{
    protected $fillable = ['colocation_name','description','status'];

    public function users(){
        return $this->belongsToMany(User::class,'user_colocation')->withPivot(['role', 'status']);
    }

     public function expenses(){
        return $this->hasMany(Depense::class);
    }

    public function categories(){
        return $this->hasMany(Categorie::class);
    }

    public function invitation(){
        return $this->hasMany(Invitation::class);
    }
}
