<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\TypeProduct;
use App\Product;
use Carbon\Carbon;
use Session;
use DB;
use App\News;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
          view()->composer(['header','page.typeproduct','page.sanpham','section.sanphamnoibat','Admin.Product_Admin'],function($view){
              $type =  TypeProduct::all()->where('type',1);
              $view->with('type',$type);
          });
        view()->composer('section.sanphamnoibat',function($view)
        {
            $hotPro = Product::hotProduct()->get();
            $view->with('hotPro',$hotPro);
        });
        view()->composer(['page.tintuc','page.ChitietTintuc'],function($view){
            $typenews=TypeProduct::all()->where('type',2);
             $newNoiBat=News::Load_ALL_News()->orderBy('created_at','DESC')->limit(5)->get();
            $view->with(['typenews'=>$typenews,'newNoiBat'=>$newNoiBat]);
        });
         view()->composer('Admin.Admin',function($view){
            $dt = Carbon::now();
            $dt=$dt->toDateString();
            $firstPro=Product::Show_Product_All()->first();
            $firstPro=$firstPro->id;
            $type_product=TypeProduct::Show_Type_product()->get();
            $view->with(['type_product'=>$type_product,'today'=>$dt,'firstPro'=>$firstPro]);
        });
         view()->composer('Admin.Product_Admin',function($view){
                $type_product=TypeProduct::Show_Type_product()->get();
                $view->with('type_product',$type_product);
        });

          view()->composer('section.sanphambanchay',function($view)
        {
            $product = Product::findProductBestSale()->get();
            $view->with('products',$product);
           

            

            //dd($bestproduct);
        });

            view()->composer(['header','section.sanphambanchay'],function($view)
        {
          if(Session::has('cart'))
          {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=> $cart->totalPrice,'totalQty'=>$cart->totalQty]);
            

          }


        });
              view()->composer('section.sanphamkhuyenmai',function($view)
        {
            $product = Product::findProductPromotion()->get();
            $view->with('products',$product);
            //dd($bestproduct);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
