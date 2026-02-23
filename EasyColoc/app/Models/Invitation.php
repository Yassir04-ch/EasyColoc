<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $fillable = ['email','status','user_id','colocation_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function colocation(){
        return $this->belongsTo(Colocation::class);
    }
}
