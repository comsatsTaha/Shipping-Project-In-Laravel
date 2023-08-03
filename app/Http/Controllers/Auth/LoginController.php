<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {  
        $inputVal = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);


        $user = User::where('email', '=', $inputVal['email'])->first();
   
   if( $user != null) 
   {
    
        if($user->status != null){

            if($user->status != 0){

        if(auth()->attempt(array('email' => $inputVal['email'], 'password' => $inputVal['password']))){
            
            if (auth()->user()->role == 1) {
                return redirect()->route('home');
            }if(auth()->user()->role == 2){
                return redirect()->route('client');
            }if(auth()->user()->role == 3){
                return redirect()->route('shipper');
            }
           
        }else{

            Alert::toast('Incorrect Username or password', 'error');
            return redirect()->back();
        }  

    }else{
        Alert::toast('You Account is Blocked', 'error');
        return redirect()->back();
    }

    }else{
        Alert::toast('You Account is Under Review', 'error');
        return redirect()->back();
    }
    } else{
        Alert::toast('Incorrect Username or password', 'error');
            return redirect()->back();

    }  
    }
}
