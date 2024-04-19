<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Mollie\Laravel\Facades\Mollie;


class PaymentController extends Controller
{
    public function payment()
    {
        return view('stripe');
    }


    public function mollie(Request $request)
    {
        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "USD",
                "value" => $request->amount
            ],
            "description" => $request->product_name,
            "redirectUrl" => route('success'),
            //"webhookUrl" => route('webhooks.mollie'),
            "metadata" => [
                "order_id" => time(),
            ],
        ]);


        session()->put('paymentId', $payment->id);
        session()->put('productId', $request->productId);
        session()->put('bidID', $request->BidID);

        return redirect($payment->getCheckoutUrl(), 303);
   }


    public function success()
    {
        $paymentId = session()->get('paymentId');
        $bidId = session()->get('bidID');
        $payment = Mollie::api()->payments->get($paymentId);
        if ($payment->isPaid()) {
            $obj = new Payment();
            $obj->payment_id = $paymentId;
            $obj->product_name = $payment->description;
            $obj->quantity = 1;
            $obj->productId = session()->get('productId');
            $obj->amount = $payment->amount->value;
            $obj->currency = $payment->amount->currency;
            $obj->payment_status = "Completed";
            $obj->payment_method = "Mollie";
            $obj->save();


            $bid = Bid::find($bidId);
            $bid->status = 'completed';
            $bid->save();


            session()->forget(['paymentId', 'bidID']);
            return redirect()->to('Mybids')->with('success','Product has been paid and status updated.');
        } else {
            return redirect()->to('cancel');
        }
    }

    public function cancel()
    {
        echo "Payment is cancelled.";
   }
}
