<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $fillable = ['amount','date','user_id','depense_id'];


    public function depense()
    {
        return $this->belongsTo(Depense::class);
    }

    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }

    public function touser(){
        return $this->belongsTo(User::class,'to_user_id');
    }
}
