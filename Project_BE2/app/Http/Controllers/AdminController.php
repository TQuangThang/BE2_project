<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

session_start();

class AdminController extends Controller
{


    public function showDashboard()
    {
        if (!$this->userCan('view-dashboard')) {
            abort('403', __('Permission deny'));
        } else {
            return redirect('listproduct');
        }
    }
    public static function checkPermission()
    {
        if (Auth::user()) {
            if (Auth::user()->admin !== '1')
                abort('403', __('Permission deny'));
        } else {
            abort('403', __('Permission deny'));
        }
    }
}
