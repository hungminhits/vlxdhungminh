<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductEditRequest;
use DB;
use File;
use Illuminate\Support\Facades\Input;
use App\Product;
use App\TypeProduct;

class Type_Product_Controller extends Controller
{
   public function showType($name_khong_dau)
   {
   		$typro = DB::table('type_products')
   				->where('name_khong_dau',$name_khong_dau)
   				->select()
   				->get();
   	$product = Product::limit(25)->where('id_type',"=",$typro[0]->id)->orderBy('created_at','DESC')->paginate(6);
   

    return view('page.typeproduct',compact('product','typro'));
   }
}
