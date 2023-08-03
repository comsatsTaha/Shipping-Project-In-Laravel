<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\tracking;
use App\Models\estimate;
use App\Models\Ship;
use App\Models\User;
use App\Mail\OrderCustomer;
use App\Mail\OrderShipper;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function packagelist()
    {
        $orders = order::where('user_id', Auth::user()->id)->where('wants_estimation', 0)->get();
        return view("admin.packageslist")->with('order', $orders);
    }

    public function estimationlist()
    {
        $orders = order::where('user_id', Auth::user()->id)->where('wants_estimation', 1)->get();
        return view("admin.estimationlist")->with('order', $orders);
    }
    public function packagedetail($id)
    {
        $package_details = order::select('orders.*', 'users.name as shipping')->join('users', 'users.id', '=', 'orders.shop_id')->where('orders.id', $id)->first();
        $track_record = tracking::where('order_id', $id)->orderBy('id', 'DESC')->get();
        return view("client.packagesdetails")->with(['package_details' => $package_details, 'track_record' => $track_record]);
    }
    public function estiamtiondetail($id)
    {
        $package_details = order::where('orders.id', $id)->first();
        $est_record = estimate::select('estimates.*', 'users.name as shipping')->join('users', 'users.id', '=', 'estimates.shop_id')->where('estimates.order_id', $id)->get();

        return view("client.estiamtiondetails")->with(['package_details' => $package_details, 'track_record' => $est_record]);
    }

    public function estiamtionqoute($id)
    {
        $package_details = order::where('orders.id', $id)->first();
        $est_record = estimate::select('estimates.*', 'users.name as shipping')->join('users', 'users.id', '=', 'estimates.shop_id')->where('estimates.order_id', $id)->where('estimates.shop_id', Auth::user()->id)->get();

        return view("client.estiamtiondetails")->with(['package_details' => $package_details, 'track_record' => $est_record]);
    }
    public function estimation()
    {
        $orders = order::where('wants_estimation', 1)->get();
        return view("admin.estimationlist")->with('order', $orders);
    }
    public function estimations()
    {
        $orders = order::where('wants_estimation', 1)->get();
        return view("admin.estimationlist")->with('order', $orders);
    }

    public function packgecreate(Request $request)
    {
        // dd($request->all());

        $data = new order;
        $data->sender_name = $request->sender_name;
        $data->sender_street = $request->sender_street;
        $data->sender_province = $request->sender_province;
        $data->sender_city = $request->sender_city;
        $data->sender_postcode = $request->sender_postcode;
        $data->sender_phone_no = $request->sender_phone_no;
        $data->reciver_name = $request->reciver_name;
        $data->reciver_street = $request->reciver_street;
        $data->reciver_province = $request->reciver_province;
        $data->reciver_city = $request->reciver_city;
        $data->reciver_postcode = $request->reciver_postcode;
        $data->reciver_phone_no = $request->reciver_phone_no;
        $data->status = 1;
        $data->content = $request->content;
        $data->height = $request->height;
        $data->width = $request->width;
        $data->length = $request->length;
        $data->wants_contact_before_delivery = $request->wants_contact_before_delivery ? true : false;
        $data->wants_estimation = $request->wants_estimation ? true : false;
        $data->shop_id = $request->shop_id;
        $data->ship_id = $request->ship_id;
        $data->user_id = Auth::user()->id;
        $data->save();


        $track_record = new tracking;

        $track_record->order_id = $data->id;
        $track_record->status = 1;
        $track_record->status_message = 'Placed';
        $track_record->save();

        $user= Auth::user();
        $shipper= User::find($request->shop_id);
       
        Mail::to($shipper->email)->send(new OrderShipper($user));

        Mail::to(auth()->user()->email)->send(new OrderCustomer($user));

        return redirect()->back()->withStatus(__('Package added successfully.'));
    }
    public function orderstatus(Request $request)
    {
        if (empty($request->status_id)) {
            return redirect()->back();
        }
        $array = array("", "Placed", "Accepted By Shipping Company", "Shipping", "In-Transit", "Arrived at Destination", "Out of Delivery", "Ready to Pick Up", "Delivered", "Picked-up", "Cancelled");
        $order = order::find($request->order_id);
        $order->status = $request->status_id;
        $order->update();

        $track_record = new tracking;

        $track_record->order_id = $request->order_id;
        $track_record->status = $request->status_id;
        $track_record->status_message = $array[$request->status_id];
        $track_record->save();
$data=order::select('orders.*', 'users.email as clientemail','users.name as username')->join('users', 'users.id', '=', 'orders.user_id')->where('orders.id', $request->order_id)->first();


        
        Mail::to($data->clientemail)->send(new \App\Mail\Orderupdate($data));

        return redirect()->back();
    }

    public function ordercost(Request $request)
    {
        if (empty($request->cost)) {
            return redirect()->back();
        }

        $order = order::find($request->order_id);
        $order->total_value = $request->cost;
        $order->update();
        return redirect()->back();
    }

    public function packgeestimationcreated(Request $request)
    {

        $data = new order;
        $data->sender_name = $request->sender_name;
        $data->sender_street = $request->sender_street;
        $data->sender_province = $request->sender_province;
        $data->sender_city = $request->sender_city;
        $data->sender_postcode = $request->sender_postcode;
        $data->sender_phone_no = $request->sender_phone_no;
        $data->reciver_name = $request->reciver_name;
        $data->reciver_street = $request->reciver_street;
        $data->reciver_province = $request->reciver_province;
        $data->reciver_city = $request->reciver_city;
        $data->reciver_postcode = $request->reciver_postcode;
        $data->reciver_phone_no = $request->reciver_phone_no;
        $data->status = 0;
        $data->content = $request->content;
        $data->height = $request->height;
        $data->width = $request->width;
        $data->length = $request->length;
        $data->wants_contact_before_delivery = $request->wants_contact_before_delivery ? true : false;
        $data->wants_estimation = true;
        $data->shop_id = 0;
        $data->user_id = Auth::user()->id;
        $data->save();


        $track_record = new tracking;




        return redirect()->back()->withStatus(__('Package added successfully.'));
    }
    public function placeorder($id)
    {


        $data = estimate::find($id);
        $order_details = order::find($data->order_id);
        $order_details->status = 1;
        $order_details->wants_estimation = 0;
        $order_details->total_value = $data->est_price;
        $order_details->shop_id = $data->shop_id;
        $order_details->update();

        $track_record = new tracking;

        $track_record->order_id = $data->order_id;
        $track_record->status = 1;
        $track_record->status_message = 'Placed';
        $track_record->save();

        return redirect('package-history');
    }

    public function packgesqoute(Request $request)
    {

        $estimate = new estimate;
        $estimate->order_id = $request->order_id;
        $estimate->shop_id = Auth::user()->id;
        $estimate->est_price = $request->estmiated;
        $estimate->remarks = $request->remarks;

        $estimate->save();

        return redirect()->back()->withStatus(__('Qoute added successfully.'));
    }
    public function reviewadd(Request $request)
    {


        $order = order::find($request->order_id);
        $order->rating_star = $request->star;
        $order->rating_review = $request->remarks;
        $order->update();
        return redirect()->back()->withStatus(__('Review added successfully.'));
    }

    public function ordercancelled($id)
    {
        $order = order::find($id);
        $order->status = 10;
        $order->update();
        $track_record = new tracking;
        $track_record->order_id = $id;
        $track_record->status = 10;
        $track_record->status_message = 'Cancelled';
        $track_record->save();
        return redirect()->back()->withStatus(__('Order Cancelled Successfully.'));
    }

    public function orderupdate(Request $request)
    {
        
        $order = order::find($request->id);
        $order->sender_name = $request->sender_name;
        $order->sender_phone_no = $request->sender_phone_no;
        $order->sender_street = $request->sender_street;
        $order->sender_city = $request->sender_city;
        $order->sender_province = $request->sender_province;
        $order->sender_postcode = $request->sender_postcode;
        $order->reciver_name = $request->reciver_name;
        $order->reciver_phone_no = $request->reciver_phone_no;
        $order->reciver_street = $request->reciver_street;
        $order->reciver_city = $request->reciver_city;
        $order->reciver_province = $request->reciver_province;
        $order->reciver_postcode = $request->reciver_postcode;
        $order->height = $request->height;
        $order->width = $request->width;
        $order->length = $request->length;
        $order->total_value = $request->total_value;
        $order->content = $request->content;
        $order->wants_contact_before_delivery = $request->wants_contact_before_delivery ? true : false;
        $order->update();
        return redirect()->back()->withStatus(__('Order Update Successfully.'));
    }


    public function packagedelete($id)
    {
        $user= order::find($id);
        $user->delete();
        return redirect()->back()->withStatus(__('Order Delete Successfully.'));
    }



    public function estimatesofships(Request $request){
        $ships = Ship::where('type', $request->type)
        ->whereHas('countries', function ($query) use ($request) {
            $query->where('countries.id', $request->country_id);
        })
        ->where('price_from', '<=', $request->price)
        ->where('price_to', '>=', $request->price)
        ->get();
        
        return view('ships.estimatesofships',compact('ships'));
    }


    public function orderwithestimate($id){
        $shipper= User::where('role', 3)->where('status', 1)->where('status',1)->get();
            return view('order.createorder',compact('id','shipper'));
    }



}
