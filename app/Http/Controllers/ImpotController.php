<?php

namespace App\Http\Controllers;

use App\Models\Impot;
use App\Models\Register_impots;
use Illuminate\Http\Request;

class ImpotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $impots = Impot::all();
        return view('impots.index', compact('impots'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('impots.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'nom_complet' => 'required',
            'emplacement' => 'required',
            'hp' => 'required',
            'ht' => 'required',
            'aup' => 'required',
            'aut' => 'required',
            'valeur_venale' => 'required',
            'rom' => 'required'
        ]);

        Impot::create($request->all());
        return redirect()->route('impots.index')
                        ->with('success', 'Payement Impôts effectuer');
    }

    /**
     * Display the specified resource.
     */
    public function show(Impot $impot)
    {   
       return view('impots.show', compact('impot'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Impot $impot)
    {
        return view('impots.edit', compact('impot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Impot $impot)
    {
        $request->validate([
            'code' => 'required',
            'nom_complet' => 'required',
            'emplacement' => 'required',
            'hp' => 'required',
            'ht' => 'required',
            'aup' => 'required',
            'aut' => 'required',
            'valeur_venale' => 'required',
            'rom' => 'required'
        ]);

        $impot->update($request->all());
        return redirect()->route('impots.index')
                        ->with('success', 'Mise à jour effectuer avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Impot $impot)
    {
        $impot->delete();
        return redirect()->route('impots.index')
                        ->with('success', 'Impot supprimer.');
    }

    public function service_impots()
    {
        $add = Register_impots::all();
        return view('impots.impots', compact('add'));
    }

    public function impots()
    {
        $add = Register_impots::all();
        return view('impots.impot', compact('add'));
    }

    public function login_impots()
    {
        return view('impots.login_impots');
    }

    public function register_impots()
    {
        return view('impots.register_impots');
    }

    public function add_register(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        Register_impots::create($request->all());
        return redirect()->route('impots')
                        ->with('success', 'Connexion réussi');
    }
}
