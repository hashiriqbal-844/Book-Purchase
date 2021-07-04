<?php

namespace App\Http\Controllers;
use Stripe\Stripe;
use Stripe\Charge;
use Cart;
use Mail;
use Session;
use Illuminate\Http\Request;


class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }
    public function pay()
    {
        Stripe::setApiKey("sk_test_51J9R5kHP3bCNUrdSgON6IlkefOfasM4Jg9pW0ryCQVFVfnWYNfNkF2hUX6pPyCoG5MLxGJ1P43iNuSuNt92iP4j100xRHhWyvn");
        $charge = Charge::create([
            'amount' => Cart::total() * 100,
            'currency' => 'usd',
            'description' => 'Course Book',
            'source' => request()->stripeToken
        ]);
        session::flash('Purchase Successfully.Wait For Email');
        Cart::destroy();
        Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessfully);
        return redirect('/');
    }
}
