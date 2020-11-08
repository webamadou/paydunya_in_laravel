<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Paydunya\Checkout\CheckoutInvoice;
use Paydunya\Checkout\Store;
use Paydunya\Setup;

Setup::setMasterKey(config('services.paydunya.master_key'));
Setup::setPublicKey(config('services.paydunya.test_public_key'));
Setup::setPrivateKey(config("services.paydunya.test_private_key"));
Setup::setToken(config("services.paydunya.test_token"));
Setup::setMode("services.paydunya.mode"); // Optionnel. Utilisez cette option pour les paiements tests.

Store::setName(config('services.paydunya.company_name'));

class FormulesController extends Controller
{
    public function purchase(Request $request){

        //dd($request->input());
        $data = $request->validate([
            'price' => 'required|min:3'
        ]);
        //dd($request->input());
        $price = $request->input('price');
        $details = $request->input('name').'-'.$request->input('storage').'-'.$request->input('nbr_user').'-'.$request->input('email_support');
        $invoice = new CheckoutInvoice();
        $invoice->setTotalAmount($price);
        $invoice->addItem($details, 1, $price, $price);

        //dd(route('success_payment'));
        $invoice->setReturnUrl(route('success_payment'));
        $invoice->setCancelUrl(route('cancel_payment'));
        if($invoice->create()) {
            echo "Je suis bien ici";
            return redirect($invoice->getInvoiceUrl());
        }else {
            echo $invoice->response_text;
            echo $invoice->response_code;
        }
    }

    /**
     * This method will handle the return url after payment
     *
     */
    public function successPayment(){
        $token  = $_GET['token'];
        $invoice = new CheckoutInvoice();
        if ($invoice->confirm($token)) {//we test if we have the right token before saving in the payment table
            $order_number = md5($token);
            $date_payment = date("Y-m-d H:i:s");
            $user_name = $invoice->getCustomerInfo('name');
            $user_email = $invoice->getCustomerInfo('email');
            $user_phone = $invoice->getCustomerInfo('phone');
            $payment = Payment::firstOrCreate(["order_number"  => $order_number,],[
                "order_number"  => $order_number,
                "date_payment"  => $date_payment,
                "state_payment" => 1,
                "user_name" => $user_name,
                "user_phone" => $user_phone,
                "user_email" => $user_email,
                "formule_id" => 2
                ]);

            return view("home.payment",compact('payment'));
        }
    }

    public function cancelPayment(){
        return view('home.canceled');
    }
}
