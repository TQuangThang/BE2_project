<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callBackGoogle(){
        try{
            $google_user = Socialite::driver('google')->user();
            $user = User::Where('google_id', $google_user->getId())->first();
            if(!$user){
                $newUser = User::create([
                    'name' => $google_user->getName(),
                    'google_id' => $google_user->getId(),
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

