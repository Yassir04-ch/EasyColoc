<?php

namespace App\Http\Controllers;

use App\Models\Colocation;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usersban = User::where('status_account','banni');
        $users = User::with('role')->get();
        return view('admin.dashboard',compact('users','usersban'));
    }

    public function colocations(){
        $usersban = User::where('status_account','banni');
        $users = User::with('role')->get();
        $colocations = Colocation::all();
        return view('admin.colocations',compact('colocations','usersban','users'));
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
