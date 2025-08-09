<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wompi\Api\Wompi;

class PaymentController extends Controller
{
    public function createCharge(Request $request)
    {
        $wompi = new Wompi(
            env('WOMPI_PUBLIC_KEY'),
            env('WOMPI_SECRET_KEY')
        );
        $data = [
            'payment_token' => $request->input('payment_token'),
            'amount_in_cents' => (int) $request->input('amount_in_cents'),
            'customer_email' => $request->input('customer_email'),
            'reference' => 'ref_' . uniqid(),
            'currency' => 'COP',
            'payment_method' => [
                'type' => 'CARD',
                'installments' => 1,
            ]
        ];


        try {
            $transaction = $wompi->createTransaction($data);
            //preguntar a santi
            return response()->json($transaction);

        } catch (\Exception $e) {

            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
