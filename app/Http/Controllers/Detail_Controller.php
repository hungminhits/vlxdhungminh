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
   public function getDetail($name_khong_dau)
   {
   	$product = Product::all()->where('name_khong_dau',$name_khong_dau);
    return view('page.chitiet',compact('product'));
    
   }
}
