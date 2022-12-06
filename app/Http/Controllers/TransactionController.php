<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Meter;
use App\Models\Parcel;
use App\Models\Transaction;
use Illuminate\Http\Response;
use App\Http\Controllers\ParcelController;
use App\Http\Controllers\MeterController;



class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        return view('payment.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(StoreTransactionRequest $request)
    {
        $id = $request->input('parcel_id');
        $parcel = Parcel::where('parcel_id', $id)->first();
        if ($parcel) {
            return view('payment.create')
                ->with('parcel', $parcel);
        } else {
            return redirect()->back()->with('error', 'Meter number was not found');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTransactionRequest $request
     * @return Response
     */
    public function store(StoreTransactionRequest $request)
    {
        $parcel_id = $request->input('meter_number');
        $meter = Meter::where('parcel_id', $parcel_id)->first();
        if ($meter) {
            return view('payment.create')
                ->with('meter', $meter);
            if ($meter->save()) {
                $transaction = new Transaction();
                $transaction->transaction_id = $request->transaction_id;
                $transaction->amount_previous = $transaction->amount_due;
                $transaction->amount_due = ($meter->consumption * 0.13) + $transaction->amount_previous;
                $transaction->amount_paid = $request->amount_paid;
                if($transaction->amount_paid < $transaction->amount_due){
                    $transaction->amount_due=$transaction->amount_due - $transaction->amount_paid;
                    $meter->status= 'unpaid';
                }
                else{
                    $meter->status = 'paid';
                }
            }
            else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
    }
    }
    /**
     * Display the specified resource.
     *
     * @param Transaction $transaction
     * @return Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Transaction $transaction
     * @return Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTransactionRequest $request
     * @param Transaction $transaction
     * @return Response
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Transaction $transaction
     * @return Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
