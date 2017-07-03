<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductEditRequest;
use DB;
use File;
use Illuminate\Support\Facades\Input;
use Hash;
use Auth;
use Socialite;
use App\User;
use Mail;

class LoginLogoutRegister_Controller extends Controller
{
   public function Login()
   {
   	return view('page.dangnhap');
   }

    public function postRegister(Request $req){
        $this->validate($req,['email'=>'required|email', 'full_name'=>'required', 'password'=>'required|min:6|max:10', 'phone'=>'numeric', 're_password'=>'required|same:password'
            ],['email.reuired'=>'Vui lòng nhập Email',
                'email.email'=>'Email không đúng định dạng',
                'Phone.numeric'=>'Điện thoại phải thuộc kiểu số',
                'password.redirect'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 ký tự',
                're_password.same'=>'Mật khẩu không khớp'
            ]);
        // DB::table('users')->insert([
        // 		'full_name'=>'lam'
        // 	]);
        $user = new User();
        $user->full_name = $req->full_name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->remember_token = $req->_token;

        $user->save();
        
        Mail::send('page.mail',['nguoidung'=>$user], function ($message) use($user)
    {
        $message->from('manam5211@gmail.com', 'vlxdHungMinh');
        $message->to($user['email'], $user['full_name']);
        $message->subject('Submit password');
    });

       return redirect()->back()->with('thongbao','Đăng ký thành công, Vui lòng kiểm tra Email');
    }

   public function Register()
   {
   		return view('page.dangky');
   }
   public function postLogin(Request $req){
        if(Auth::attempt(['email'=>$req->email,'password'=>$req->password])){
          echo $req->email;
                return redirect()->route('home');
        }
        else{
            return redirect()->back()->with('thatbai','Sai thông tin đăng nhập');
        }
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function getMyPage(){
      return view('page.myPage');
    }




    public function redirectToProvider($providers){
        return Socialite::driver($providers)->redirect();
    }
    public function handleProviderCallback($providers){
      try{
          $socialUser = Socialite::driver($providers)->user();
          //return $user->getEmail();
      }
      catch(\Exception $e){
          return redirect()->route('home')->with(['flash_level'=>'danger','flash_message'=>"Đăng nhập không thành công"]);
      }
      $socialProvider = SocialProvider::where('provider_id',$socialUser->getId())->first();
      if(!$socialProvider){
          //tạo mới
          $user = User::where('email',$socialUser->getEmail())->first();
          if($user){
            return redirect()->route('home')->with(['flash_level'=>'danger','flash_message'=>"Email đã có người sử dụng"]);
          }
          else{
            $user = new User();
            $user->email = $socialUser->getEmail();
            $user->full_name = $socialUser->getName();
            //if($providers == 'google'){
              $image = explode('?',$socialUser->getAvatar());
              $user->avatar = $image[0];
           // }
           // $user->avatar = $socialUser->getAvatar();
            $user->save();
          }
          $provider = new SocialProvider();
          $provider->provider_id = $socialUser->getId();
          $provider->provider = $providers;
          $provider->email = $socialUser->getEmail();
          $provider->save();
      }
      else{
          $user = User::where('email',$socialUser->getEmail())->first();
      }
      Auth()->login($user);
      return redirect()->route('home')->with(['flash_level'=>'success','flash_message'=>"Đăng nhập thành công"]);
    }

    public function activeUser(Request $req){
        $user = User::find($req->id);
        if($req->token == $user->remember_token){
            $user->active=1;
            $user->save();
           // return redirect()->route('home')->with(['thanhcong','Đã kích hoạt tài khoản']);
        }
    }
}
