<?php

namespace App\Http\Controllers;

use App\Models\PasswordReset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Mockery\Generator\StringManipulation\Pass\Pass;


class AuthController extends Controller
{

    public function login(Request $request)
    {
        if(Auth::check()) return ['status' => 'You are already logged in'];

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->rememberme)) {
//            return redirect()->route('home');
            return ['status' => 'success', 'role'=>Auth::user()->role];
        } else {
            return ['status' => 'Wrong credentials'];
        }
    }

    public function register(Request $request){
        if(Auth::check()) return ['status' => 'You are already logged in'];

        $validator =  Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
//            'phone' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if($validator->fails()){
            return ['status'=>'Wrong data!'];
//            return redirect()->route('registerPage');
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
//        $user->phone = $request->phone;
        $user->save();
        Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        return ['status' => 'success', 'role'=>Auth::user()->role];
//        return redirect()->route('home');
    }

    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('login');
        }
        else{
            return redirect()->route('login');
        }
    }

    public function forgetPass(Request $request){
        if(Auth::check()) return ['status' => 'error', 'text' => 'You are already logged in'];
        if(isset($request->email)){
            $forgetuser = User::where('email','=',$request->email)->first();
            if($forgetuser == null) return ['status' => 'error', 'text' => 'No user with this email registered'];
            if($forgetuser->status == 'blocked') return ['status' => 'error', 'text' => 'This account is blocked'];
            $reset = PasswordReset::where('email','=',$request->email)->first();
            if($reset == null) {
                $newreset = new PasswordReset;
                $newreset->email = $request->email;
                $newreset->token = Str::random(20);
                $newreset->save();
                $data = array(
//                    'name'=>$forgetuser->name,
                    'email'=>$newreset->email,
                    'token'=>$newreset->token);
                Mail::send('resetMail', $data, function($message) use($request) {
                    $message->to($request->email, 'Reset Password')->subject('Password reset');
                });
            }
            else{
                $reset->token =  Str::random(20);
                $reset->save();
                $data = array(
//                    'name'=>$forgetuser->name,
                    'email'=>$reset->email,
                    'token'=>$reset->token);

                Mail::send('resetMail', $data, function($message) use($request) {
                    $message->to($request->email, 'Reset Password')->subject('Password reset');
                });
            }
            return ['status' => 'success', 'text' => 'Success!'];
        }
        else{
            return ['status' => 'error', 'text' => 'Email is empty'];
        }
    }

    public function recoverPass(Request $request){
        if(Auth::check()) return ['status' => 'error', 'text' => 'You are already logged in'];
        if(!isset($request->token) or !isset($request->email) or !isset($request->password)) return ['status' => 'error', 'text' => 'Wrong data'];
        $reset = PasswordReset::where('email','=',$request->email)->where('token','=',$request->token)->first();
        if($reset == null) return ['status' => 'error', 'text' => 'Wrong data'];
        $user = User::where('email','=',$request->email)->first();
        if($user == null) return ['status' => 'error', 'text' => 'No user with this email is registered'];
        if($user->status == 'blocked')  return ['status' => 'error', 'text' => 'User with this email is blocked'];
        $user->password = Hash::make($request->password);
        $user->save();
        $reset->token = Str::random(20);
        $reset->save();
        return ['status' => 'success', 'text' => 'Success!'];
    }


}
