<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use GuzzleHttp\Client;


class VerificationController extends Controller
{
    /**
     * Handle transaction and payment verification
     *
     */
    public function verifyTrxRef($ref)
    {
        $payment = Payment::where('trxn_ref', $ref)->first();

        if(!$payment) {
            return response()->json([
                'message' => 'Invalid Transaction Reference'
            ], 500);
        }


        if($payment->status === 'PAID') {
            return response()->json([
                'message' => 'Already Paid'
            ], 500);
        }



        return response()->json([
            'data' => [
                'amount' => ($payment->amount * 100),
                'id'     => $payment->id
            ]
        ]);
    }

    /**
     * @param $paymentRef
     * verify payment from paystack
     * @return \Illuminate\Http\JsonResponse
     */
    public function  verifyPaymentRef(Payment $payment, $paymentRef)
    {
        $client = new Client();

        $response = $client->request('GET', "https://api.paystack.co/transaction/verify/{$paymentRef}",  [
            'headers' => [
                'Authorization' => 'Bearer '.config('site.site.keys.paystack_sk'),
                'Accept' => 'application/json'
            ],
        ]);

        $res = json_decode($response->getBody()->getContents(), true);

        if( $res['data']['status'] === 'success') {
            $payment->update([
                'payment_ref' => $res['data']['reference'],
                'meta'        => json_encode($res['data']),
                'status'      => 'PAID'
            ]);
        }

        //send email here


        return response()->json([
            'data' => [
                'name'  => $payment->order->name,
                'email' => $payment->order->email
            ]
        ]);
    }
}
