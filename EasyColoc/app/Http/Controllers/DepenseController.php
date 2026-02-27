<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Colocation;
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
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create( Colocation $colocation)
    {
        return view("depense.create",compact('colocation'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Colocation $colocation)
    {
        $validation = $request->validate([
            'titre' => 'required|string',
            'price' => 'required',
            'date' => 'required|date',
            'categorie_id'=> 'required',
        ]);
        
        $validation['user_id'] = Auth::id();
        $validation['colocation_id'] = $colocation->id;

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
