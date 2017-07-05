<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductEditRequest;
use DB;
use File;
use App\Product;
use Illuminate\Support\Facades\Input;

class Product_Controller extends Controller
{
   public function ShowDetail()
   {
   	return view('page.chitiet');
   }
   public function allProducts(){
   		$allPro = Product::limit(25)->orderBy('created_at','DESC')->paginate(9);
   		return view('page.sanpham',compact('allPro'));
   }
}
