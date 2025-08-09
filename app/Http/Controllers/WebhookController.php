<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Order;

class WebhookController extends Controller
{
    public function handle(Request $request)
    {
        $eventData = $request->input('data');
        $transaction = $eventData['transaction'];

        $transactionId = $transaction['id'];
        $reference = $transaction['reference'];
        $status = $transaction['status'];

        Log::info("Webhook recibido para referencia: $reference con estado: $status");

        $order = Order::where('reference', $reference)->first();

        if ($order) {
            $order->status = $status;
            $order->wompi_transaction_id = $transactionId;

            $order->save();

            if ($status === 'APPROVED') {
                //preguntar a santi notificaciones
            }
        } else {
            Log::warning("No se encontró una orden para la referencia: $reference");
        }

        return response()->json(['status' => 'success']);
    }
}
