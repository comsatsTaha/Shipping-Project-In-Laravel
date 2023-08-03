<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user=User::paginate(5);
        return view('users.index', ['users' => $user]);
    }

    public function shipperlist()
{
$user=User::where('role',3)->paginate(5);
return view('users.index')->with('users',$user);

}
    public function changeStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
  
        return response()->withStatus(__('User Status Change Successfully.'));
    }
}
