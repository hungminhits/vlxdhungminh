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
            $req->Session()->put('cart', $cart);
            return redirect()->back();


            
        
    }

     public function muahang(Request $req) // add gio hang
    {
            $product = Product::find($req->idmuahang);
            $oldCart = Session('cart') ? Session('cart') : null;
            $cart = new Cart($oldCart);
            $cart->add($product, $product->id);
            $req->Session()->put('cart', $cart);
            return redirect()->back();


            
        
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
      
    }

    public function delete_one_product(Request $req)
    {
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($req->id);

        if(count($cart->items)<=0)
            Session::forget('cart');
        else
            Session::put('cart',$cart);

    }



    public function showCart()
    {
        
        if(Session::has('cart'))
        {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);


            return view('page.giohang',['product_cart'=>$cart->items,'totalPrice'=> $cart->totalPrice,'totalQty'=>$cart->totalQty]);

         }
         else
            return view('page.giohangtrong');

    }

    public function delete_all_cart()
    {
          Session::forget('cart');
        return "<script> alert('Bạn đã xóa giỏ hàng !'); window.location = '".url('cart_product')."';</script>";
    }

    
}
