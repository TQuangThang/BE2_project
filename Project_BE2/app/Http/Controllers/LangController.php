<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class LangController extends Controller
{
    public function changeLanguage($language)
 
    {
        App::setLocale($language);
        session()->put('locale', $language);
        return redirect()->back();
    }
}
