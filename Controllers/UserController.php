<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(){
        return 'Hello from UserController';
    }


    public function login(){
        return view('user.login');
        // if(View::exists('user.login')){
        //     return view('user.login');
        // }else{
        //     return abort(404);
        // }
        
    } 


    public function process(Request $request){
        $validated = $request->validate([
            "email" => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Welcome back!');
        }

        return back()->withErrors(['email' => 'Login failed'])->onlyInput('email');

    }


    public function register(){
        return view('user.register');

    }


    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Logout Successful');

    }


    public function store(Request $request){
        $validated = $request->validate([
            'name' => ['required', 'min:4'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // $validated['password'] = Hash::make($validated['password']);

        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);

        // return $user;

        auth()->login($user);

        return view('user.login');
    }

    

    public function show($id){
        $data = ["data" => "data from database"];
        return view ('user')
                ->with('data', $data)
                ->with('name', 'PinoyFreeCoder')
                ->with('age', 22)
                ->with('email', 'pinoyfreecoder@gmail.com')
                ->with('id', $id);
    }



    public function home(){
        return view('pages.home');

    }

    public function company(){
        return view('pages.company');

    }

    public function properties(){
        return view('pages.properties');

    }


    public function feature01(){
        return view('pages.feature01');

    }

    public function feature02(){
        return view('pages.feature02');

    }

    public function feature03(){
        return view('pages.feature03');

    }

    public function bidding01(){
        return view('pages.bidding01');

    }

    public function bidding02(){
        return view('pages.bidding02');

    }

    public function agents(){
        return view('pages.agents');

    }

    public function terms(){
        return view('pages.terms');

    }

    public function contactus(){
        return view('pages.contactus');

    }

    public function userdb(){
        return view('pages.userdb');

    }

    public function admin(){
        return view('pages.admin');

    }

    
}


