<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Depense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->filter || $request->filter != "All Depenses" ){

        $depenses = Depense::with(['user','colocation','categorie'])->where('date',$request->filter)->get();
            
        }
        else{

        $depenses = Depense::with(['user','colocation','categorie'])->get();

        }
      
        return view('depense.index',compact($depenses));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Depense $depense , Categorie $categorie)
    {
        return view("depense.create",compact('depense','categorie'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'titre' => 'required|string',
            'price' => 'required',
            'date' => 'required',
            'colocation_id'=> 'required',
            'categorie_id'=> 'required',
        ]);
        
        $validation['user_id'] = Auth::id();

        Depense::create($validation);
        return redirect()->route('depense.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Depense $depense)
    {
        return view('depense.show',compact('depense'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Depense $depense)
    {
        return view('depense.edit',compact('depence'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Depense $depense)
    {
        $validation = $request->validate([
            'titre' => 'required|string',
            'price' => 'required',
            'date' => 'required',
        ]);

        $depense->update($validation);
        return redirect()->route('depense.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Depense $depense)
    {
        $depense->delete();
        return redirect()->route('depense.index');

    }
}
