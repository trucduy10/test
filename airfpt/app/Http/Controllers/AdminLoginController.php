<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BrandRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;



class AdminLoginController extends Controller
{
    public function admin_login()
    {
        return view('airfpt.admin_login');
    }

    public function admin_postLogin(Request $request)
    {
        $Adminlogin = [
            'username' => $request->mem_username,
            'password' => $request->mem_password,
        ];
        if (Auth::guard('guard_admin')->attempt($Adminlogin)) {

            return redirect()->action([BrandController::class, 'index']);
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }
}
