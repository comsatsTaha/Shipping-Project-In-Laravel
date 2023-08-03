<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Ship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ships= Ship::with('user')->where('user_id',auth()->user()->id)->orWhere('user_id',1)->get();
        return view('ships.index',compact('ships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries= Country::all();
        return view('ships.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['user_id'=>Auth()->user()->id]);
        $data= $request->all();
        if($request->hasFile('image')){
            $requestdocument = $request->image;
            $documentName = $request->title . '-' . $requestdocument->getClientOriginalName();
            $requestdocument->move(public_path('shipimages/'), $documentName);
            $savePath = 'shipimages/' . $documentName;
            $data['image']= $savePath;
        }
        
        $ship = Ship::create($data);
        $ship->countries()->attach($request->country_id);
        toastr()->success('Ship Created Successfully!');
        return redirect()->route('ships.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ship  $ship
     * @return \Illuminate\Http\Response
     */
    public function show(Ship $ship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ship  $ship
     * @return \Illuminate\Http\Response
     */
    public function edit(Ship $ship)
    {
        $ship->countries;
        $countries= Country::all();
        return view('ships.edit',compact('ship','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ship  $ship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ship $ship)
    {
        $ship->countries()->sync($request->country_id);
        $ship->update($request->all());
        toastr()->warning('Updated Successfully');
        return redirect()->route('ships.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ship  $ship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ship $ship)
    {
        $ship->countries()->detach();
        $ship->delete();
        toastr()->warning('Deleted Ship');
        return redirect()->back();
    }
}
