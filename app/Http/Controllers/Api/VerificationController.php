<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use GuzzleHttp\Client;
use App\Events\ApplicationCreatedEvent;


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
                'message' => 'Transaction already Paid for'
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
    public function  verifyPaymentRef(Payment $payment, $paymentRef, $type)
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
        if($type === 'training') {
            $applicant = $payment->applicant;
//            event(new ApplicationCreatedEvent($applicant->load('training')));
        }


        return response()->json([
            'data' => [
                'details'  => $payment,
            ]
        ]);
    }
}
