<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BrandRequest;
use App\Account;
use Auth;
use Session;
use Hash;

class BrandController extends Controller
{
    //
    public function index(){
        $airports = DB::table('airports')->get();
        $news = DB::table('news')->get();
        return view('airfpt.index', ['news'=>$news,'airports'=>$airports]);
    }

}

