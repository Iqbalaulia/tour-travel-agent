<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\TransactionDetail;
use App\TravelPackage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request , $id)
    {
        $item = Transaction::with(['details', 'travel_package', 'user'])->findOrFail($id);
        
        return view('pages.checkout', [
            'item' => $item,
        ]);

    }


    public function process(Request $request , $id)
    {
        $travel_package = TravelPackage::findOrFail($id);
        
        $transaction = Transaction::create([
            'travel_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'additional_visa' => 0,
            'transaction_total' => $travel_package->price,
            'transaction_status' => 'IN_CART',
        ]);

        TransactionDetail::create([
           
            'transactions_id' => $transaction->id,
            'username' => Auth::user()->username,
            'nationality' => 'ID',
            'is_visa' => false,
            'doe_passport' => Carbon::now()->addYears(5),

        ]);

        return redirect()->route('checkout', $transaction->id);

    }


    public function remove(Request $request , $detail_id)
    {
        $item = TransactionDetail::findOrFail($detail_id);

        $transaction = Transaction::with(['details','travel_package'])->findOrFail($item->transactions_id);

            if($item->is_visa){
                
                $transaction->transaction_total -= 190;
                
                $transaction->additional_visa -= 190;
            }

        $transaction->trasaction_total -= $transaction->travel_package->price;

        $transaction->save();

        $item->delete();

        return redirect()->route('checkout', $item->transaction_id);

    }

    public function create(Request $request , $id)
    {
        $request->validate([
            'username' => 'required|string|exists:users,username',
            'is_visa' => 'required|boolean',
            'doe_passport' => 'required',
        ]);

        $data = $request->all();
        
        $data['transaction_id'] = $id;

        TransactionDetail::create($data);
        
        $transaction = Transaction::with(['travel_package'])->find($id);

        if($request->is_visa){
            
            $transaction->transaction_total += 190;

            $transaction->additional_visa += 190;
        }

        $transaction->trasaction_total += $transaction->travel_package->price;

        $transaction->save();

        return redirect()->route('checkout', $id);
    }

    public function success(Request $request, $id)
    {
        $transaction =  Transaction::findOrFail($id);
   
        $transaction->transaction_status = 'PENDIND';

        $transaction->save();
        
        return view('pages.success');

    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
