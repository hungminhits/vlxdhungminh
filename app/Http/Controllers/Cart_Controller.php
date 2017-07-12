<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Session;
use Input;

class Cart_Controller extends Controller
{
    //
    public function buy(Request $req, $id) // add gio hang
    {
            $product = Product::find($id);
            $oldCart = Session('cart') ? Session('cart') : null;
            $cart = new Cart($oldCart);
            $cart->add($product, $product->id);
            $req->session()->put('cart', $cart);
            
        
    }

    public function delete_cart(Request $req)
    {
            $oldCart=Session('cart')?Session::get('cart'):null;
            $cart=new Cart($oldCart);
            $cart->removeItem($req->id);
            if(count($cart->items)<=0)
                Session::forget('cart');
            else
                Session::put('cart',$cart);
      return redirect()->back();
    }



    public function showCart()
    {
        return view('page.giohang');
    }
}
