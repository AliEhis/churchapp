<?php

namespace App\Http\Controllers;


use Auth;
use App\DailyDevotion;
use App\Order;
use App\WalletTransaction;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display all Cart Content.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart(){


        return view('market.cart');
    }


    /**
     * Add product to cart.
     *
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request, $id) {
        $product = DailyDevotion::find($id);
        $cart_item = Cart::add([
            'id' => $product->item_id,
            'name' => $product->name,
            'price' => $product->unit_price,
            'qty' => $request->query('q') ? $request->query('q') : 1,
            'picture' => $product->small1,
        ]);

        Cart::associate($cart_item->rowId, 'App\DailyDevotion');

        Session::flash('success', 'Added to Cart');

        return redirect()->back();
    }

    /**
     * Remove product from cart.
     *
     * @return \Illuminate\Http\Response
     */

     public function cartEdit($id) {
        $rowId = Cart::search(array('id' => $id));
        dd($rowId);
        $item = Cart::get($rowId[0]);

        // Cart::update($rowId[0], $item->qty + 1);
        return redirect()->back();
     }

     public function updateCart($id, $qty) {
        Cart::update($id, ['qty' => $qty]);
        // $cart = Cart::get($id);
        // $pid = $cart->id;
        // $product = \App\Product::find($pid);
        // if($product) {
        //     $price = $product->price;
        //     $nPrice = $price * $qty;
        //     return response()->json("done");
        // }
         return response()->json("done");
     }

    public function cartDelete($id){

        Cart::remove($id);

        Session::flash('success', 'Product Removed From Cart');

        return redirect()->back();

    }

    /**
     * Display Checkout Page.
     *
     * @return \Illuminate\Http\Response
     */

        public function Savecart(Request $request, $id){

        $product = Product::find($id);

        Cart::store('user_id');

     // To store a cart instance named 'wishlist'
       Cart::instance('wishlist')->store('user_id');

        Session::flash('success', 'Item Saved');

        return redirect()->back();

    }


        public function restoreCart($id){

            Cart::restore('user_id');

        // To restore a cart instance named 'wishlist'
        Cart::instance('wishlist')->restore('user_id');

        return redirect()->back();
        }

        public function Checkout()
        {

           return view('market.checkout');
        }



}
