<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use App\Models\Product;
use App\Models\LineItem;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //セッション情報取得
        $cart_id = Session::get('cart');
        $cart = Cart::find($cart_id);

        $total_price = 0;

        foreach($cart->products as $product){
            $total_price += $product->price * $product->pivot->quantity;
        }

        return view('cart.index')
            ->with('line_items',$cart->products)
            ->with('total_price',$total_price);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
        //セッション情報取得
        $cart_id = Session::get('cart');
        $cart = Cart::find($cart_id);

        if(count($cart->products) <= 0){
            return redirect(route('cart.index'));
        }

        $line_items = [];

        foreach ($cart->products as $product){
            $line_item = [
                'price_data' => [
                    'currency' => 'jpy',
                    'unit_amount' => $product->price,
                    'product_data' =>[
                        'name' => $product->name,
                        'description' => $product->discription, 
                    ],
                ],
                'quantity' => $product->pivot->quantity,
            ];
            array_push($line_items,$line_item);
        }

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items'           => [$line_items],
            'success_url'          => route('cart.success'),
            'cancel_url'           => route('cart.index'),
            'mode'                 => 'payment',
        ]);

        return view('cart.checkout',[
            'session'   => $session,
            'publicKey' => env('STRIPE_PUBLIC_KEY')
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function success()
    {
        $cart_id = Session::get('cart');
        LineItem:: where('cart_id',$cart_id)->delete();

        session()->flash('success_message','購入が完了しました。ありがとうございます！');
        return redirect(route('product.index'));
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
