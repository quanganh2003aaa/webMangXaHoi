<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignUpStoreRequest;
use App\Http\Requests\SignInRequest;
use App\Http\Requests\CheckOTPRequest;
use App\Models\User;
use \Hash;
use Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getSignIn()
    {
        return view('login2');
    }

    public function postSignUp(SignUpStoreRequest $request)
    {
        $user = $request->only('username', 'email');
        $user['password'] = Hash::make($request->password);
        $testEmail = User::where('email',$user['email'])->exists();

        if ($testEmail) {
            return redirect()->back()->with('error', 'Email đã tồn tại!!');
        }
        else {
            $user['otp'] = '';
            for($i=0; $i<6; $i++) {
                $user['otp'] .= random_int(0, 9);
            }
            Mail::send('layouts.email', compact('user'), function ($message) use ($user){
                $message->from('imjohnwick2003@gmail.com', 'Website HopeSo');
                $message->sender('imjohnwick2003@gmail.com', 'Website HopeSo');
                $message->to($user['email']);
                $message->subject('Email mã xác nhận đăng ký tài khoản');
            });
            session(['user' => $user]);
            return redirect()->route('getCheckOTP')->with(['success'=> 'Mã OTP đã được gửi tới email đăng ký']);
        }
    }


    public function postSignIn(SignInRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->route('home')->with('success','Đăng nhập thành công.');
        }
        else{
            return redirect()->back()->with('error','Tài khoản hoặc mật khẩu không chính xác!');
        }
    }

    function deleteExpiredOTP($otp) {

        $createdAt = //lấy thời gian tạo OTP từ CSDL

        $expiredAt = date('Y-m-d H:i:s', strtotime('+60 seconds', strtotime($createdAt)));

        if(date('Y-m-d H:i:s') > $expiredAt) {
          //xóa bản ghi OTP khỏi CSDL
          User::where('id', $otp)->delete();
        }

      }

    public function getCheckOTP()
    {
        return view('OTP.otpSignUp');
    }

    public function postCheckOTP(CheckOTPRequest $request)
    {
        $user = session('user');
        session()->forget('user');
        $imagePath = '/assets/img/avatar-default.jpg';
        $imageUrl = asset($imagePath);
        $user['avatar'] = $imageUrl;
        if ($user['otp']==$request->otp) {
            if (User::create($user)) {
                return redirect('', 301)->with('success','Đăng ký tài khoản thành công.');
            }
            else {
                return redirect('',301)->with('error','Xin lỗi bạn chúng tôi không thể đăng ký tài khoản này.');
            }
        }
        else {
            return redirect()->back()->with('error', 'OTP đã sai vul lòng nhập lại.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success','Đăng xuất thành công');
    }

}
