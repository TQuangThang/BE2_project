<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class FacebookController extends Controller
{
    public function redirect(){ 
        return Socialite::driver('facebook')->redirect();
    }

    public function callBackFaceBook(){
        try{
            $facebook_user = Socialite::driver('facebook')->user();
            $user = User::Where('facebook_id', $facebook_user->getId())->first();
            if(!$user){
                $newUser = User::create([
                    'name' => $facebook_user->getName(),
                    'facebook_id' => $facebook_user->getId(),
                ]);
                Auth::login($newUser);
                return redirect()->intended('home');
            }
            else{
                Auth::login($user);
                return redirect()->intended('home');
            }
        }
        catch (\Throwable $th){
            dd('some thing wrong' . $th->getMessage()); 
        }
    }
}

