<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function cart()
    {
        $cartItems = Cart::select('*')
            ->where('user_id', Auth::user()->id)
            ->where('numorder', Auth::user()->pendingorder)->get();

        $total = 0;
        foreach ($cartItems as $cartItem) {
            $cartItem->stockproduct = ($cartItem->quantity) + (Product::find($cartItem->product_id)->stock);
            $cartItem->titleproduct = Product::find($cartItem->product_id)->title;
            $cartItem->price = Product::find($cartItem->product_id)->price;
            $total += $cartItem->quantity * $cartItem->price;
        }
        return view('cart', ["cartItems" => $cartItems, "total" => $total]);
    }


    public function addtocart(Request $request)
    {
        $cart_product = json_decode($request['product']);
       
         $cart = [
            'user_id' => Auth::user()->id,
            'numorder' => Auth::user()->pendingorder,
            'product_id' => $request['product_id'],
            'quantity' => 1
        ];
        
        $product = Product::find($request['product_id']);
        $product->stock -= $product->{'id'};
        $product->save();

        Cart::create($cart);

    }

    public function updatecart(Request $request)
    {
        $carts = Cart::select('*')
            ->where('user_id', Auth::user()->id)
            ->where('product_id', $request['product_id'])
            ->where('numorder', Auth::user()->pendingorder)->get();

        foreach ($carts as $cart) {
            $product = Product::find($request->product_id);

            $product->stock += $request['oldquantity'] - $request['newquantity'];
            $product->save();
            if ($request['newquantity'] == 0) {
                Cart::where('user_id', Auth::user()->id)
                    ->where('product_id', $request['product_id'])
                    ->where('numorder', Auth::user()->pendingorder)->delete();
            } else {
                $cart->quantity = $request['newquantity'];
                $cart->save();
            }

            return redirect()->intended('cart');
        }
    }
    public function deletecart(Request $request)
    {
        $carts = Cart::select('*')
            ->where('user_id', Auth::user()->id)
            ->where('numorder', Auth::user()->pendingorder)->get();

        foreach ($carts as $cart) {
            $product = Product::find($request->product_id);
            $product->stock += $cart->quantity;
            $product->save();
        }

        Cart::where('id', $request['cart_id'])->delete();


        return redirect()->intended('cart');
    }
    public function emptycart()
    {
        $carts = Cart::select('*')
            ->where('user_id', Auth::user()->id)
            ->where('commande', Auth::user()->pendingorder)->get();

        foreach ($carts as $cart) {
            $produit = Cart::find($cart->product_id);
            $produit->stock += $cart->quantity;
            $produit->save();
        }

        foreach ($carts as $cart) {
            Cart::select('*')
                ->where('user_id', Auth::user()->id)
                ->where('numorder', Auth::user()->pendingorder)->delete();

            return redirect()->route('cart');
        }



        return redirect()->intended('cart');
    }

    public function validatecart(Request $request)
    {
        $carts = Cart::select('*')
            ->where('user_id', Auth::user()->id)
            ->where('numorder', Auth::user()->pendingorder)->get();

        foreach ($carts as $cart) {
            $user = Auth::user();
            $user->pendingorder += 1;
            $user->save();
        }
    }
}
