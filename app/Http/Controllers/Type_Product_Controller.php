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
   public function showType($id)
   {
   	$product = Product::limit(25)->where('id_type',$id)->orderBy('created_at','DESC')->paginate(6);
   	$typro = DB::table('type_products')
   				->where('id',$id)
   				->select()
   				->get();

    return view('page.typeproduct',compact('product','typro'));
   }
}
