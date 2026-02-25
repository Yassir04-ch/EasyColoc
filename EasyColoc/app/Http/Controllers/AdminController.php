<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('role')->get();
        return view('admin.dashboard',compact('users'));
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
