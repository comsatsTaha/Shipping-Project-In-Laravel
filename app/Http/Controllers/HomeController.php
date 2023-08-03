<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\order;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data =[];
        $data[0] = order::where('status',0)->count();
        $data[1] = order::where('status',1)->count();
        $data[2] = order::where('status',2)->count();
        $data[3] = order::where('status',3)->count();
        $data[4] = order::where('status',4)->count();
        $data[5] = order::where('status',5)->count();
        $data[6] = order::where('status',6)->count();
        $data[7] = order::where('status',7)->count();
        $data[8] = order::where('status',8)->count();
        $data[9] = order::where('status',9)->count();
        $data[10] = order::where('status',10)->count();
        $data[11] = User::count();
        $data[12] = User::where('role',2)->where('status',1)->count();
        $data[13] = User::where('role',2)->where('status',0)->count();
        $data[14] = User::where('role',3)->where('status',1)->count();
        $data[15] = User::where('role',3)->where('status',0)->count();
        $data[16] = User::where('role',3)->where('status',null)->count();
        
     
        return view('home')->with('data',$data);
    }
    public function client()
    {
       $data =[];
       $data[0] = order::where('status',0)->where('user_id',Auth::user()->id)->count();
       $data[1] = order::where('status',1)->where('user_id',Auth::user()->id)->count();
       $data[2] = order::where('status',2)->where('user_id',Auth::user()->id)->count();
       $data[3] = order::where('status',3)->where('user_id',Auth::user()->id)->count();
       $data[4] = order::where('status',4)->where('user_id',Auth::user()->id)->count();
       $data[5] = order::where('status',5)->where('user_id',Auth::user()->id)->count();
       $data[6] = order::where('status',6)->where('user_id',Auth::user()->id)->count();
       $data[7] = order::where('status',7)->where('user_id',Auth::user()->id)->count();
       $data[8] = order::where('status',8)->where('user_id',Auth::user()->id)->count();
       $data[9] = order::where('status',9)->where('user_id',Auth::user()->id)->count();
       $data[10] = order::where('status',10)->where('user_id',Auth::user()->id)->count();
    
        return view('client')->with('data',$data);
    }
    public function shipper()
    {
        $data =[];
       $data[0] = order::where('status',0)->count();
       $data[1] = order::where('status',1)->where('shop_id',Auth::user()->id)->count();
       $data[2] = order::where('status',2)->where('shop_id',Auth::user()->id)->count();
       $data[3] = order::where('status',3)->where('shop_id',Auth::user()->id)->count();
       $data[4] = order::where('status',4)->where('shop_id',Auth::user()->id)->count();
       $data[5] = order::where('status',5)->where('shop_id',Auth::user()->id)->count();
       $data[6] = order::where('status',6)->where('shop_id',Auth::user()->id)->count();
       $data[7] = order::where('status',7)->where('shop_id',Auth::user()->id)->count();
       $data[8] = order::where('status',8)->where('shop_id',Auth::user()->id)->count();
       $data[9] = order::where('status',9)->where('shop_id',Auth::user()->id)->count();
       $data[10] = order::where('status',10)->where('shop_id',Auth::user()->id)->count();
    
        return view('shipper')->with('data',$data);
    }
}
