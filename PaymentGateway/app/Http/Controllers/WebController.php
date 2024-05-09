<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //SAMPLE REQUEST START HERE

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-t78vYsWpv9BDQxkKWLAWCgv-';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        // dd($convertInt);
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 18000,
            ),
            'item_details' => array(
                [
                    'id' => '001',
                    'price' => '58000',
                    'quantity' => 1,
                    'name' => 'Zanetta'
                ],[
                    'id' => '002',
                    'price' => '58000',
                    'quantity' => 1,
                    'name' => 'Struick'
                ]
            ),
            'customer_details' => array(
                'first_name' => 'Rama',
                'last_name' => 'Azaru',
                'email' => 'azarurama@gmail.com',
                'phone' => '08123456789',
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // return $snapToken;
        return view('payment', ['snap_token' => $snapToken]);
    }

    public function payment_post(Request $request) {
        $json = json_decode($request->get('json'));
        $order = new Order();
        $order->status = $json->transaction_status;
        $order->uname = "Arafie";
        $order->email = "ara";
        $order->number = "08989898";
        $order->transaction_id = $json->transaction_id;
        $order->order_id = $json->order_id;
        $order->payment_type = $json->payment_type;
        $order->pdf_url = 'test.pdf';
        if ($order->id == null) {
            $order->id = 0;
        }
        $order->payment_code = "CRS".$order->id;
        $order->gross_amount = $json->gross_amount;
        return $order->save() ? redirect(url('/'))->with('alert-success', 'Order berhasil') : redirect(url('/'))->with('alert-failed', 'Terjadi kesalahan');
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
        //
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
