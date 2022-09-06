<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;
use Validator;
use Hash;
use Session;

class LoginController extends Controller
{
    public function index()
    {
         $data = array();
         if (Session::has('loginId')) {
            $data = Person::where('id', '=', Session::get('loginId'))->first();
        }
        return view('home.dashboard', compact('data'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginView()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerView()
    {
         return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
            $request->validate([
            'firstname'=>'bail|required|min:3',
            'lastname'=>'required|min:3',
            'nida'=>'required|unique:people|max:20',
            'email'=>'required|unique:people|email',
            'phone'=>'required|numeric|digits:10',
            'password'=>'required|min:6',
        ]);
        
        $person = new Person();
        $person->first_name = $request->firstname;
        $person->last_name = $request->lastname;
        $person->nida = $request->nida;
        $person->email = $request->email;
        $person->phone = $request->phone;
        $person->password = Hash::make($request->password);
        $result = $person->save();

        if ($result) {
            return back()->with('success', 'You have Successfully Registered!');
        } else {
            return back()->with('fail', ' Something is Wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
            $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
         $user = Person::where('email', '=', $request->email)->first();
         if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('/dashboard/home');
            } else {
                return back()->with('fail', ' This Password is Incorrect!');
            }
        } else {
            return back()->with('fail', ' This email is not registered!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');

            return redirect('/');
        }
    }
}
