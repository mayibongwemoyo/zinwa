<?php

namespace App\Http\Controllers;

use App\Models\Meter;
use App\Http\Requests\StoreMeterRequest;
use App\Http\Requests\UpdateMeterRequest;
use App\Http\Controllers\ParcelController;
use App\Models\Parcel;



class MeterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $meters = Meter::all();

        // return view('meter.view', compact('meters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(StoreMeterRequest $request)
    {
        return view('payment.pay');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMeterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMeterRequest $request)
    {

        dd($request->all());
        $parcel_id = $request->input('parcel_id');
        $parcel = Meter::where('parcel_id', $parcel_id)->first();
        if ($parcel->save()) {
            $meter = new Meter();
            $meter->previous_reading = $meter->current_reading;
            $meter->current_reading = $request->current_reading;
            $meter->consumption = $meter->current_reading - $meter->previous_reading;
            $meter->locationLatitude = $request->locationLatitude;
            $meter->locationLongitude = $request->locationLongitude;
            $meter->status = 'unpaid';
            if ($meter->save()) {
                return redirect()->route('payment.create')->with('success', 'Parcel added successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        }
        // } else {
        //     return redirect()->back()->with('error', 'Parcel not added');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meter  $meter
     * @return \Illuminate\Http\Response
     */
    public function show(Meter $meter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meter  $meter
     * @return \Illuminate\Http\Response
     */
    public function edit(Meter $meter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMeterRequest  $request
     * @param  \App\Models\Meter  $meter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMeterRequest $request, Meter $meter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meter  $meter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meter $meter)
    {
        //
    }
}
