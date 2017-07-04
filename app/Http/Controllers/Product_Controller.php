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
   public function allProducts(Request $req){
   		$allPro = DB::table('products')->select();
   		switch ($req->sortBy) {
   			case 'alpha-asc':
   				$allPro=$allPro->orderBy('name')->paginate(6);
   				break;
   			case 'alpha-desc':
   				$allPro=$allPro->orderBy('name','DESC')->paginate(6);
   				break;
   			case 'price-asc':
   				$allPro=$allPro->orderBy('unit_price')->paginate(6);
   				break;
   			case 'price-desc':
   				$allPro=$allPro->orderBy('unit_price','DESC')->paginate(6);
   				break;
   			case 'created-asc':
   				$allPro=$allPro->orderBy('created_at')->paginate(6);
   				break;
   			case 'created-desc':
   				$allPro=$allPro->orderBy('created_at','DESC')->paginate(6);
   				break;
   			default:
   				$allPro=$allPro->paginate(6);
   				break;
   		}
   		
   		return view('page.sanpham',compact('allPro'));
   }
}
