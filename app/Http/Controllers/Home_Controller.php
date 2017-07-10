<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductEditRequest;
use DB;
use File;
use Illuminate\Support\Facades\Input;
use App\TypeProduct;
use App\News;
class Home_Controller extends Controller
{
   public function getIndex()
   {
   	return view('page.trangchu');
   }
   public function info(){
   	return view('page.gioithieu');
   }
   public function news(){
      $news=News::Load_ALL_News()->orderBy('created_at','DESC')->paginate(5);
      $new=News::Load_ALL_News()->orderBy('created_at','DESC')->limit(5)->get();
      return view('page.tintuc',compact('news','new'));
   }
     public function contact(){
   	return view('page.lienhe');
   }

   public function getGiohang(){
      return view('page.giohang');
   }
}
