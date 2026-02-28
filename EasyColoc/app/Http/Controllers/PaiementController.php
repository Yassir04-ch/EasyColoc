<?php

namespace App\Http\Controllers;

use App\Models\Depense;
use App\Models\Paiement;
use Illuminate\Support\Facades\Auth;

class PaiementController extends Controller
{
    
public function paye(Depense $depense){

   $paiement = $depense->paiement()->where('is_paid', 0)->where('from_user_id', Auth::id());
   
   $paiement->update([
       'is_paid' => 1
   ]);
    return redirect()->back();

}
}
