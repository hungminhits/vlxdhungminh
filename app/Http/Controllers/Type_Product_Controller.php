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
<<<<<<< HEAD
   		$typro = DB::table('type_products')
=======
   		$typro = DB::table('category')
>>>>>>> 249546664894c6b84985cf6d31801c2d3339faed
   				->where('id',$id)
   				->select()
   				->get();
   	$product = Product::limit(25)->where('id_type',"=",$typro[0]->id)->orderBy('created_at','DESC')->paginate(6);
   

    return view('page.typeproduct',compact('product','typro'));
   }
}
