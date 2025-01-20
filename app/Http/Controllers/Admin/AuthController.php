<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('dashboard.auth.login');
    }


    public function authenticated(Request $request){
        $credentials=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard.index')->with('success', 'تم تسجيل الدخول بنجاح');
        }else{
            return redirect()->route('auth.login')->with('error', 'تأكد من بيانات الدخول');
        }
    }

    public function register(){
        return view('dashboard.auth.register');
    }

    public function store(Request $request){
        $request->validate(
            [
                'name' => 'required|max:150',
                'email' => 'required|email|unique:users',
                'password' => 'required|same:confirm_password',
            ],
            [
                'name.required' => 'حقل الاسم مطلوب ',
                'email.required' => 'حقل الإيميل مطلوب ',
                'password.required' => 'حقل كلمة السر مطلوب ',
                'confirm_password.required' => 'حقل تأكيد كلمة السر مطلوب ',
                'email.email' => 'تحقق من الإيميل',
                'email.unique' => 'الإيميل مسجل سابقاً',
                'password.same' => 'تأكد من مطابقة كلمة السر',

            ]
        );
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('dashboard.index')->with('success', 'تم تسجيل الحساب بنجاح');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('auth.login')->with('success', 'تم تسجيل الخروج بنجاح');

    }
}
