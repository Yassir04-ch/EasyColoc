<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Colocation;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Colocation $colocation)
    {
       return view("categorie.create",compact("colocation"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , Colocation $colocation)
    {

        $validation = $request->validate([
            'categorie_name'=>'required|string',
        ]);
        $validation['colocation_id'] = $colocation->id;
         
        Categorie::create($validation);
        return redirect()->route('colocation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        return view("categorie.edit",compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        
       $validation = $request->validate([
        'categorie_name'=>'required|string',
       ]);

       $categorie->update($validation);

       return redirect()->route('colocation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return back();
    }
}
