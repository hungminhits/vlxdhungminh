<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\TypeProduct;
use App\Product;
use App\Partner;
use Carbon\Carbon;
use App\Cart;
use Session;
<<<<<<< HEAD
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Collection;
=======
use DB;
use App\News;
>>>>>>> 249546664894c6b84985cf6d31801c2d3339faed
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
            $product = Product::findProductPromotion() ->get();
            $view->with('products',$product);
          
            //dd($bestproduct);
        });

              view()->composer('section.thuonghieu',function($view)
        {
           $partners = Partner::limit(8)->get()->toArray();

           $currentPage = LengthAwarePaginator::resolveCurrentPage();

          //Create a new Laravel collection from the array data
          $collection = new Collection($partners);
          $perPage = 8;

        //Slice the collection to get the items to display in current page
          $currentPageSearchResults = $collection->slice(($currentPage-1) * $perPage, $perPage)->all();

          //Create our paginator and pass it to the view
          $new_partners= new LengthAwarePaginator($currentPageSearchResults, count($collection), $perPage);
           $new_partners->setPath(route('home'));

           $view->with('new_partners',$new_partners);
    
          
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
