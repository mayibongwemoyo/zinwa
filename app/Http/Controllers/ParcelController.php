<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreParcelRequest;
use App\Http\Requests\UpdateParcelRequest;
use App\Models\Meter;
use App\Models\Parcel;
use Illuminate\Http\Response;

class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('parcel.add_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreParcelRequest $request
     * @return Response
     */
    public function store(StoreParcelRequest $request)
    {
        $parcel = new Parcel();
        $parcel->stand_owner = $request->first_name . ' ' . $request->last_name;
        $parcel->stand_number = $request->stand_number;
        $parcel->parcel_type = $request->parcel_type;
        if ($parcel->save()) {
            $meter = new Meter();
            $meter->parcel_id = $parcel->id;
            $meter->meter_number = $request->meter_number;
            $meter->previous_reading = '0';
            $meter->current_reading = '0';
            $meter->consumption = '0';
            $meter->coordinates = $request->coordinates;
            $meter->status = 'paid';
            if ($meter->save()) {
                return redirect()->route('view')->with('success', 'Parcel added successfully');
            }
            else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        } else {
            return redirect()->back()->with('error', 'Parcel not added');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Parcel $parcel
     * @return Response
     */
    public function show(Parcel $parcel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Parcel $parcel
     * @return Response
     */
    public function edit(Parcel $parcel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateParcelRequest $request
     * @param Parcel $parcel
     * @return Response
     */
    public function update(UpdateParcelRequest $request, Parcel $parcel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Parcel $parcel
     * @return Response
     */
    public function destroy(Parcel $parcel)
    {
        //
    }
}
