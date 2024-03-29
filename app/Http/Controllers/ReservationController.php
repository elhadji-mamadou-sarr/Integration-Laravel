<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::where('user_id', auth()->user()->id);
        return view('index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (auth()->user()) {

            $validatedData = $request->validate([
                'evenement_id' => 'required|string',
            ]);

            $user_id = auth()->user()->id;
            $reservation =  new Reservation();
            $reservation->user_id  = $user_id;
            $reservation->evenement_id  = $validatedData['evenement_id'];
            $reservation->save();

            return redirect()->route('reservation.index');

        }else
            return redirect()->route('login');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
