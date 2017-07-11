<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductEditRequest;
use DB;
use File;
use Illuminate\Support\Facades\Input;
use App\Product;
use App\TypeProduct;

class Detail_Controller extends Controller
{
   public function getDetail($id)
   {
   	$product = Product::all()->where('id',$id);
    return view('page.chitiet',compact('product'));
    
   }
}
