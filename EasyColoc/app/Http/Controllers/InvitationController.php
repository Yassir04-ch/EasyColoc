<?php

namespace App\Http\Controllers;

use App\Mail\InvitationMail;
use App\Models\Colocation;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class InvitationController extends Controller
{
   
    public function index()
    {
        //
    }

    public function store(Request $request,Colocation $colocation)
    {
        $request->validate([
            'email'=>'required|email',
        ]);
         $token = Str::random();
         Invitation::create([
        'colocation_id' => $colocation->id,
        'user_id'    => Auth::id(),
        'email'         => $request->email,
        'token'         =>$token,
        'status'        => 'pending',
        ]);

        Mail::to($request->email)->send(new InvitationMail($token));
        return back();

    }


    public function accept( $token)
    {
        $invitation = Invitation::where('token',$token)->first();

        if(!$invitation){
          return redirect('/')->with('error', 'Invitation Invalide.');
        }

        if($invitation->status == 'accepted'){
          return redirect('/')->with('error', 'Invitation déjà accepted.');
        }

        if (!Auth::check()) {
        return redirect('/login');
        }
         $colocation = Colocation::with('users')->whereHas('users',function ($query) {
         $query->where('users.id',Auth::id());
         })->where('status','active')->first();
        

         if ($colocation) {
              return redirect()->route('colocation.index')->with('error','you have arealy colocation active');
         }

        $invitation->update(['status'=>'accepted']);
        $invitation->colocation->users()->attach(Auth::id(),[
            'role'=>'member',
            'status'=>'active'
        ]);
         return redirect()->route('colocation.index')->with('success', 'Vous avez rejoint la colocation ');
    }

    
   
}
