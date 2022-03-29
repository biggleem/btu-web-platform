<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getUserData(){
        if(!Auth::check()) return 'error';
        return ['email' => Auth::user()->email, 'name' => Auth::user()->name, 'isAvatar' => Auth::user()->isAvatar, 'avatarext' => Auth::user()->avatarext, 'status'=>Auth::user()->status, 'id' => Auth::user()->id];
    }
    public function editProfile(Request $request){
        if(!Auth::check()) return 'error';
        if(!isset($request->name) and !isset($request->email)) return 'Wrong data';
        if(isset($request->name)){
            if(strlen($request->name) > 30 or strlen($request->name) == 0) return 'Incorrect name';
        }
        if(isset($request->email)){
            if(strlen($request->email) == 0) return 'Wrong data';
            if($request->email == Auth::user()->email) return 'Same email';
            $isemailunique = User::where('email','=',$request->email)->first();
            if($isemailunique != null) return 'email already exists';
        }

        $user = User::find(Auth::user()->id);
        if(isset($request->name)) {
            $user->name = $request->name;
        }
        if(isset($request->email)) {
            $user->email = $request->email;
        }
        if($user->save()) return 'success';
        return 'error';
    }

    public function changePassword(Request $request){
        if(!Auth::check()) return 'error';
        if(!isset($request->oldpass) or !isset($request->newpass)) return 'Wrong data';
        if(strlen($request->newpass) < 8) return 'New pass should be longer than 7 symbols';
        $user = User::find(Auth::user()->id);
        if(!Hash::check($request->oldpass, $user->password)) return 'Incorrect old password';

        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($request->newpass);
        if($user->save()) return 'success';
        return 'error';
    }

    public function changeavatar(Request $request){
        if(!Auth::check()) return 'error';
        if(!$request->hasFile('newavatar')) return 'wrong data';
        $newavatar = $request->newavatar;
        if(!in_array($newavatar->extension(),['png','jpg','jpeg','gif','svg'])){
            return 'error';
        }
        $user = User::find(Auth::user()->id);
        $user->isAvatar = true;
        $user->avatarext = $newavatar->extension();
        if($user->save() && $newavatar->move(public_path('images/userAvatars'),Auth::user()->id.'_avatar.'.$newavatar->extension())){
            return 'success';
        }
        return 'error';
    }
}
