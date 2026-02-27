<?php

namespace App\Http\Controllers;

use App\Models\Colocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ColocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $colocations = Colocation::with('users')->whereHas('users',function ($query) {
       $query->where('users.id',Auth::id());
      })->get();

        return view('colocation.index',compact("colocations"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('colocation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
  public function store(Request $request)
  {

       $colocation = Colocation::with('users')->whereHas('users',function ($query) {
       $query->where('users.id',Auth::id());
         })->where('status','active')->first();
        
         $user = Auth::user();
         if ($colocation && $user->role->name != 'admin') {
              return redirect()->route('colocation.index')->with('error','you have arealy colocation active');
         }


        $validation = $request->validate([
            'colocation_name' => 'required|string',
            'description' => 'required|string'
        ]);

        $validation['status'] = 'active';

        $colocation = Colocation::create($validation);

        $colocation->users()->attach(Auth::id(), [
            'role'      => 'owner',
            'status'    => 'active',
        ]);   

        return redirect()->route('colocation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Colocation $colocation)
    {

        $owner = $colocation->users->where('pivot.role', 'owner')->first();
        return view('colocation.detail',compact('colocation','owner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Colocation $colocation)
    {
        return view('colocation.edit',compact('colocation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Colocation $colocation)
    {
        $validation = $request->validate([
            'colocation_name' => 'required|string',
            'description' => 'required|string'
        ]);
        
        $colocation->update($validation);
        return redirect()->route('colocation.index');
        
    }

    public function exite(Colocation $colocation){
        $user = $colocation->users()->where('user_id',Auth::id())->first();
        if($user){
            $user->pivot->update(['status' => 'left']);
            $reput =  $user->reputation;
            $reput = $reput-1;
            $user->update(['reputation'=>$reput]);
        }
        return redirect()->route('colocation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Colocation $colocation)
    {
         $colocation->update(['status' => 'cancelled']);
          $colocation->users->pivot->update(['status' => 'left']);
         return redirect()->route('colocation.index');
    }
}
