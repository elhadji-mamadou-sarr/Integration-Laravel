<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evenements = Evenement::all();
        $reservations = Reservation::all();
        return view('admin.index', compact('evenements', 'reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $evenement = new Evenement();
        return view('admin.form', compact('evenement'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'lieu' => 'required|string',
            'date' => 'required|date',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('photos', 'public');
        }

        $evenement =  Evenement::create($validatedData);


        return redirect()->route('admin.evenement.index')->with('success', 'L\'evenement a été ajouter avec succès !');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $evenement =  Evenement::findOrfail($id);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $evenement =  Evenement::findOrfail($id);
        return view('admin.form', compact('evenement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $evenement =  Evenement::findOrfail($id);
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'lieu' => 'required|string',
            'date' => 'required|date',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $evenement->update($validatedData);
        return redirect()->route('admin.evenement.index')->with('success', 'L\'evenement a été modifier avec succès !');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $evenement =  Evenement::findOrfail($id);
        $evenement->delete();
        return redirect()->route('admin.evenement.index')->with('success', 'L\'evenement a été supprimer avec succès !');

    }
}
