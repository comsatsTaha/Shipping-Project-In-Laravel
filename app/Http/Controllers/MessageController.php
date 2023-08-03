<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages= Message::with('from','to')->where('to_id',auth()->user()->id)->latest()->get();
        return view('messages.index',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->role == "2"){
            $users= User::where('role',3)->get();
        }
        else if(auth()->user()->role == "3"){
            $users= User::where('role',2)->get();
        }
        else{
            $users= User::all();
        }

        return view('messages.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['from_id'=>auth()->user()->id]);

        $data= $request->all();
        $file= $request->attachment;
        if($request->hasFile('attachment')){
            $requestImage = $file;
            $imageName = $request->title . '-' . $requestImage->getClientOriginalName();
            $request->attachment->move(public_path('Attachments'), $imageName);
            $image_name = 'Attachments/' . $imageName;
            $data['attachment']= $image_name;
        }
        $message= Message::create($data);
        toastr()->success('Message Created Successfully!');
        return redirect()->route('messages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        return view('messages.show',compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
