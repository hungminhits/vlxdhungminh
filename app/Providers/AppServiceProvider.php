<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\TypeProduct;
use App\Product;
use Carbon\Carbon;

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
            $type =  TypeProduct::all();
            $view->with('type',$type);
        });
        view()->composer('section.sanphamnoibat',function($view)
        {
            $hotPro = Product::hotProduct()->get();
            $view->with('hotPro',$hotPro);
        });

         view()->composer('Admin.Admin',function($view){
            $dt = Carbon::now();
            $dt=$dt->toDateString();
            $firstPro=Product::Show_Product_All()->first();
            $firstPro=$firstPro->id;
            $type_product=TypeProduct::Show_Type_product()->get();
            $view->with(['type_product'=>$type_product,'today'=>$dt,'firstPro'=>$firstPro]);
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
