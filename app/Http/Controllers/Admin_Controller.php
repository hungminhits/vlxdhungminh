<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductEditRequest;
use DB;
use File;
use Illuminate\Support\Facades\Input;
use Auth;   
use App\Product;
use App\TypeProduct;
use App\Bill_Detail;
use Carbon\Carbon;
use App\User;
use App\News;
use PDF;    
use Hash;
use App\Bill;
use Session;
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
   public function Login_Admin()
   {
      return view('Admin.Login_Admin');
   }
//Loại sản phẫm 
   public function PostLogin_Admin(Request $req){
        if(Auth::attempt(['email'=>$req->email,'password'=>$req->password,'active'=>1])){
            if(Auth::User()->group>=1){
               Session::put('group',Auth::User()->group);
               // $_SESSION['group']=;
               return redirect()->route('ViewContentAdmin');}
             else
               return redirect()->back()->with('thatbai','Bạn không có quyền truy cập vào trang này');
        }
        else{
            return redirect()->back()->with('thatbai','Sai thông tin đăng nhập');
        }
    }
    public function PostForgetPassword(Request $req){
      $user=User::User_All()->where('email',$req->email)->get();
      if(isset($user[0])){
            $characters ='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i <5 ; $i++) {
                 $randomString .= $characters[rand(0, $charactersLength - 1)];
             }

             DB::table('users')->where('email','=',$req->email)->update(['password'=>Hash::make($randomString)]);
             return redirect()->back()->with('thatbai',$randomString);  
      }
      else
            return redirect()->back()->with('thatbai','Nhập Không Đúng Email hoặc Email Bạn Không Tồn Tại');
    }
   public function ForgetPassword() {
   return view('Admin.ForgetPassWord');
   }
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

    public function Edit_Category(Request $req){
      $filename="";
      $id = $req->input('id');
      $name = $req->input('edit_name');
      $desc = $req->input('edit_des');
      $type = $req->input('edit_type');
       if ($req->hasFile('edit_image')) {
         $filename= $req->file('edit_image')->getClientOriginalName();
      $req->file('edit_image')->move('images/category',$filename);
      }else{
         $filename=null;
      }
      $pro=TypeProduct::Edit_Category($id, $name, $desc, $filename, $type);
   }
   public function Insert_Category(Request $req){
      $filename="";
      $name = $req->input('new_name');
      $desc = $req->input('new_des');
      $type = $req->input('new_type');
       if ($req->hasFile('edit_image')) {
         $filename= $req->file('new_image')->getClientOriginalName();
      $req->file('new_image')->move('images/category',$filename);
      }else{
         $filename=null;
      }
      $getId=TypeProduct::Insert_Category($name, $desc, $filename, $type);
      return $getId;
   }
   public function Delete_Category(Request $req){
      $image = $req->imageFile;
      File::delete('images/category/'.$image);
      $type=TypeProduct::Delete_Category($req->id);
   }



   public function ChartById_Admin($id,$created_at_from,$created_at_to){
         $chart=Bill_Detail::FindSum_QuantityById($id,$created_at_from,$created_at_to);
         $pro=Product::Show_Product_All()->get();
         return view('Admin.ChartById_Admin',compact('chart','pro'));
   }

      public function ViewAllNews(){
         $news=News::Load_ALL_News()->get();
         $typeNews =  TypeProduct::all()->where('type',2);
         return view('Admin.News_Admin',compact('news','typeNews'));
      }
      public function UpdateNews(Request $req){
         $id=$req->id;
         $id_user=Auth::User()->id;
         $title=$req->title;
         $description=$req->description;
         $description=$description;
         $content=$req->content;
         $category_id_news=$req->category_id_news;
         if ($req->hasFile('image')) 
         {
            $image= $req->file('image')->getClientOriginalName();
            $req->file('image')->move('images/news',$image);
            $suaanh=1;
            $news=News::UpdateNews($suaanh,$id,$id_user,$title,$image,$description,$content,$category_id_news);
         }
         else
         {
            $image=null;
            $suaanh=0;
            $news=News::UpdateNews($suaanh,$id,$id_user,$title,$image,$description,$content,$category_id_news);
         }
         
          return redirect()->route('ViewNews');
      }
      public function ViewPageInsertNews(Request $req){
         $id=$req->id;
         if($id!=null){
            $news=News::UpdateNewById($req->id)->get();
            return view('Admin.Insert_Update_News.Insert_News',compact('id','news'));
         }
         else{
            $id=0;
            return view('Admin.Insert_Update_News.Insert_News',compact('id'));
         }
         
      }
      public function InsertNews(Request $req){
         //Chưa kiểm tra đươc image và description
         $id_user=Auth::User()->id;
         $title=$req->title;
         if ($req->hasFile('image')) 
         {
            $image= $req->file('image')->getClientOriginalName();
            $req->file('image')->move('images/news',$image);
         }
         else
         {
            $image=null;
         }
         $description=mysql_real_escape_string($req->description);
         $content=mysql_real_escape_string($req->content);
         $category_id_news=$req->category_id_news;
          $news=News::InsertNews($id_user,$title,$image,$description,$content,$category_id_news);
         return redirect()->route('ViewNews');
      }
      public function DeleteNews(Request $req){
         $id=$req->id;
         $news=News::DeleteNews($id);
         return $news;
      }
      public function ShowBill(){
         $bill=Bill::bill()->get();
         return view('Admin.bill',compact('bill'));
      }
        public function ShowBill_Detail($id_bill){
         $bill_detail=Bill_Detail::FIndBill_DetailById_Bill($id_bill)->get();
         return $bill_detail;
      }






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
      if ($req->hasFile('edit_image')) {
         $filename= $req->file('edit_image')->getClientOriginalName();
      $req->file('edit_image')->move('images/product',$filename);
      }else{
         $filename=null;
      }
      $pro=Product::Edit_Product($id,$name,$type, $desc, $unit_price, $pro_price,$filename, $unit);
      return $pro; 
   }
   public function Insert_Product(Request $req){
      $filename="";
      $name = $req->input('new_name');
      $type = $req->input('new_type');
      $desc = $req->input('new_des');
      $unit_price = $req->input('new_unit_price');
      $pro_price = $req->input('new_pro_price');
      $unit = $req->input('new_unit');
       if ($req->hasFile('new_image')) {
         $filename= $req->file('new_image')->getClientOriginalName();
      $req->file('new_image')->move('images/product',$filename);
      }else{
         $filename=null;
      }
      $getId=Product::Insert_Product($name, $type, $desc, $unit_price, $pro_price,$filename, $unit);
      return $getId;
   } 
   public function Delete_Product(Request $req){
      $id = $req->id;
      $image = $req->imageFile;
      File::delete('images/product/'.$image);
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
   public function Edit_User(Request $req){
      $id = $req->input('id');
      $name = $req->input('edit_name');
      $phone = $req->input('edit_phone');
      $address = $req->input('edit_address');
      $group = $req->input('edit_group');
      $user=User::Edit_User($id, $name, $phone, $address, $group);
   }
   public function Insert_User(Request $req){
      $name = $req->input('new_name');
      $email = $req->input('new_email');
      $password = Hash::make($req->input('new_password'));
      $phone = $req->input('new_phone');
      $address = $req->input('new_address');
      $group = $req->input('new_group');
      $token=$req->input('_token');
      $getId=User::Insert_User($name, $email, $password, $phone, $address, $group, $token);
      return $getId;
   } 
   public function Delete_User(Request $req){
      $id = $req->id;
      $user=User::Delete_User($id);
   }

 


}
