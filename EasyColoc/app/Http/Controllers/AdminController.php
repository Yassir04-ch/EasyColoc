<?php

namespace App\Http\Controllers;

use App\Models\Colocation;
use App\Models\Depense;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usersban = User::where('status_account','banni');
        $colocations = Colocation::where('status','active');
        $depensetotal = Depense::sum('price');
        $users = User::with('role')->where('id','!=',Auth::id())->get();
        return view('admin.dashboard',compact('users','usersban','depensetotal','colocations'));
    }

    public function colocations(){
        $usersban = User::where('status_account','banni');
        $depensetotal = Depense::sum('price');
        $users = User::with('role')->get();
        $colocations = Colocation::all();
        return view('admin.colocations',compact('colocations','usersban','users','depensetotal'));
    }

    public function bannir(User $user){
       $user->update(['status_account'=>'banni']);
        return redirect()->route('admin.index');
    }

    public function debannir(User $user){
        $user->update(['status_account' => 'actif']);
        return redirect()->route('admin.index');
    }
}
