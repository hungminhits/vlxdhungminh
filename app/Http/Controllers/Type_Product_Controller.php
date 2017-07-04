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
   public function showType( Request $req,$id)
   {
   		$typro = DB::table('type_products')
   				->where('id',$id)
   				->select()
   				->get();
   	$product = DB::table('products')->select()->where('id_type',$id);
   	
   		switch ($req->sortBy) {
   			case 'alpha-asc':
   				$product=$product->orderBy('name')->paginate(6);
   				break;
   			case 'alpha-desc':
   				$product=$product->orderBy('name','DESC')->paginate(6);
   				break;
   			case 'price-asc':
   				$product=$product->orderBy('unit_price')->paginate(6);
   				break;
   			case 'price-desc':
   				$product=$product->orderBy('unit_price','DESC')->paginate(6);
   				break;
   			case 'created-asc':
   				$product=$product->orderBy('created_at')->paginate(6);
   				break;
   			case 'created-desc':
   				$product=$product->orderBy('created_at','DESC')->paginate(6);
   				break;
   			default:
   				$product=$product->paginate(6);
   				break;
   		}
   

    return view('page.typeproduct',compact('product','typro'));
   }
}
