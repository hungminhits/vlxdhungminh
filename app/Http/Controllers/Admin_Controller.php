<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductEditRequest;
use DB;
use File;
use Illuminate\Support\Facades\Input;
use App\Product;
use App\TypeProduct;
use App\Bill_Detail;
use Carbon\Carbon;
use App\User;
use App\News;
use PDF;    
class Admin_Controller extends Controller
{
   public function ViewContent_Admin()
   {
      $MostViewProduct=Product::MostViewProduct();
      $Total_view= $MostViewProduct[1];
      $MostViewProduct=$MostViewProduct[0];
      $FindSumQuantity=Bill_Detail::FindSum_Quantity();
   	return view('Admin.Content_Admin',compact('MostViewProduct','Total_view','FindSumQuantity'));
   }
//Loại sản phẫm 


   public function downloadPDF(Request $req){
      if($req->type!=null){
          $title="Tất cả các sản phẩm";
         if($req->type==0){
         $product=Product::Show_Product_All()->get();
         $typepro=$req->type;
         $pdf = PDF::loadView('Admin.PDF',compact('product','title','typepro'))->setPaper('a4', 'landscape');//Load view
         }
         else{
            $product=Product::Find_Product_By_Type($req->type)->get();
            $typepro=$req->type;
            $pdf = PDF::loadView('Admin.PDF',compact('product','title','typepro'))->setPaper('a4', 'landscape');
         }
      }
        //Tạo file xem trước pdf
        return $pdf->stream();
   }

   public function Delete_TypeProduct($id){
      $type=TypeProduct::Delete_Type_product($id);
   }
   public function ChartById_Admin($id,$created_at_from,$created_at_to){
         $chart=Bill_Detail::FindSum_QuantityById($id,$created_at_from,$created_at_to);
         $pro=Product::Show_Product_All()->get();
         return view('Admin.ChartById_Admin',compact('chart','pro'));
   }

   // public function Pro_convert_vi_to_en(){
   //       $str=Product::all();
   //       foreach ($str as $str1) {
   //          $str=TypeProduct::vi_to_en($str1->name);
   //          $product=DB::table('products')->where('name','=',$str1->name)->update(['name_khong_dau'=>$str]);
   //       }
   // }
   //    public function TypePro_convert_vi_to_en(){
   //       $str=TypeProduct::all();
   //       foreach ($str as $str1) {
   //          $str=TypeProduct::vi_to_en($str1->name);
   //          $product=DB::table('products')->where('name','=',$str1->name)->update(['name_khong_dau'=>$str]);
   //       }
   // }


      public function View_TypeProduct(){
            $typeproduct=TypeProduct::ALL_Type_product()->paginate(10);
            return view('Admin.TypeProduct_Admin',compact('typeproduct'));
      }

      public function Select_Product(){
      $product=Product::Show_Product_All()->paginate(5);
      $typepro=0;
      return view('Admin.Product_Admin',compact('product','typepro'));
   }
   public function FindProductByType(Request $req){
         $product=Product::Find_Product_By_Type($req->id)->paginate(5);
         $typepro=1;
      return view('Admin.Product_Admin',compact('product','typepro'));
   }
      public function Edit_Product(Request $req){
      $filename="";
      $id = $req->input('id');
      $name = $req->input('edit_name');
      $type = $req->input('edit_type');
      $desc = $req->input('edit_des');
      $unit_price = $req->input('edit_unit_price');
      $pro_price = $req->input('edit_pro_price');
      $unit = $req->input('edit_unit');

      $filename= $req->file('edit_image')->getClientOriginalName();
      $req->file('edit_image')->move('images',$filename);
      $pro=Product::Edit_Product($id,$name,$type, $desc, $unit_price, $pro_price,$filename, $unit);
      // $request->session()->flash('status', 'Tạo bài viết thành công!');
      return $pro; 
   }
   public function Insert_Product(Request $req){
      $filename="";
      $name = $req->input('name');
      $type = $req->input('new_type');
      $desc = $req->input('new_des');
      $unit_price = $req->input('new_unit_price');
      $pro_price = $req->input('new_pro_price');
      $unit = $req->input('new_unit');
      $filename= $req->file('image')->getClientOriginalName();
      $req::file('image')->move('images',$filename);
      $getId=Product::Insert_Product($name, $type, $desc, $unit_price, $pro_price,$filename, $unit);
      return $getId;
   } 
   public function Delete_Product(Request $req){
      $id = $req->id;
      $image = $req->imageFile;
      File::delete('images/'.$image);
      $pro=Product::Delete_Product($id);
   }
      public function ViewProductbyDay(){
         $view=Product::ViewProductByDay();
      }




   //User
     public function Select_User(){
      $user=User::User_All()->paginate(8);
  
      return view('Admin.User_Admin',compact('user'));
   }
   public function Edit_User( $id, $group){
      $user=User::Edit_User($id,$group);
   }
   public function Insert_User( $name, $email, $group){
      $getId=User::Insert_User($name,$email,$group);
       // return view('Admin.User_Admin','getId');
      return $getId;
   } 
   public function Delete_User( $id){
      $user=User::Delete_User($id);
   }

 
   public function ShowAllNews(){
      $news=News::Load_ALL_News()->get();
      return view('Admin.News_Admin',compact('news'));
   }

}
