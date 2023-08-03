<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use App\Models\order;
use App\Models\Ship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index(string $page)
    {
        if (view()->exists("pages.{$page}")) {
            return view("pages.{$page}");
        }
        return abort(404);
    }

    public function packages(){

       $shipper= User::where('role', 3)->where('status', 1)->get();
       $ships= Ship::all();

        return view("client.pakages",compact('shipper','ships'));


    }
    public function packagelist(){

        $order = order::where('wants_estimation', 0 )->get();

        return view("admin.packageslist")->with('order',$order);


    }
    public function recivedlist(){
        $order = order::where('shop_id',Auth::user()->id)->get();
        return view("admin.packageslist")->with('order',$order);


    }
    
    public function packagesestimation(){
        $countries= Country::all();
         return view("client.packagesestimation",compact('countries'));
 
 
     }


     public function frontestimatesofships(Request $request){
        $ships = Ship::where('type', $request->type)
        ->whereHas('countries', function ($query) use ($request) {
            $query->where('countries.id', $request->country_id);
        })
        ->where('price_from', '<=', $request->price)
        ->where('price_to', '>=', $request->price)
        ->get();

        return view('front.estimatesofships',compact('ships'));
     }

     public function frontorderwithestimate($id){
        $shipper= User::where('role', 3)->where('status', 1)->where('status',1)->get();
            return view('front.createorder',compact('id','shipper'));
    }
    
    
}
