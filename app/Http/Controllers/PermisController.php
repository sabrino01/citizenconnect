<?php

namespace App\Http\Controllers;

use App\Models\Permis;
use App\Models\Register_permis;
use Illuminate\Http\Request;

class PermisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permis = Permis::all();
        return view('permis.index', compact('permis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('permis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required',
            'genre' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'naissance' => 'required|date',
            'lieu' => 'required',
            'adresse' => 'required',
            'phone' => 'required',
            'category' => 'required',
            'formation' => 'required',
            'date_obtention' => 'required|date',
            'lieu_obtention' => 'required',
            'date_expiration' => 'required|date',
        ]);

        Permis::create($request->all());
        return redirect()->route('permis.index')
                         ->with('success', 'Demande de permis bien créé.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Permis $permi)
    {
        return view('permis.show', compact('permi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permis $permi)
    {
        return view('permis.edit', compact('permi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permis $permi)
    {
        $request->validate([
            'numero' => 'required',
            'genre' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'naissance' => 'required|date',
            'lieu' => 'required',
            'adresse' => 'required',
            'phone' => 'required',
            'category' => 'required',
            'formation' => 'required',
            'date_obtention' => 'required|date',
            'lieu_obtention' => 'required',
            'date_expiration' => 'required|date',
        ]);

        $permi->update($request->all());
        return redirect()->route('permis.index')
                         ->with('success', 'Demande de permis a jour.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permis $permi)
    {
        $permi->delete();
        return redirect()->route('permis.index')
                         ->with('success', 'Permis supprimé avec succès.');
    }

    public function service_permis()
    {
        $add = Register_permis::all();
        return view('permis.permis', compact('add'));
    }

    public function permis()
    {
        $add = Register_permis::all();
        return view('permis.permi', compact('add'));
    }

    public function login_permis()
    {
        return view('permis.login_permis');
    }

    public function register_permis()
    {
        return view('permis.register_permis');
    }

    public function add_register_permis(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        Register_permis::create($request->all());
        return redirect()->route('service_permis')
                        ->with('success', 'Connexion réussi');
    }
}
