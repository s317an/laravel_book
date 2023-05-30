<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\LineItem;

class LineItemController extends Controller
{
    public function create(Request $request){
        $cart_id = Session::get('cart');
        $line_item = LineItem::
            where('cart_id',$cart_id)
            ->where('product_id',$request->input('id'))
            ->first();
        if($line_item){
            $line_item->quantity += $request->input('quantity');
            $line_item->save();
        }else{
            LineItem::create([
                'product_id' => $request->input('id'),
                'cart_id'    => $cart_id,
                'quantity'   => $request->input('quantity'),
            ]);
        }

        session()->flash('success_message','カートに追加しました!');
        return redirect(route('product.index'));
    }

    public function delete(Request $request){
        LineItem::destroy($request->input('id'));

        session()->flash('danger_message','商品を削除しました');
        return redirect(route('cart.index'));
    }
}
