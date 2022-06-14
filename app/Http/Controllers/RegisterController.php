<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:8', 'max:20', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
         //   'password' =>  ['required', \Illuminate\Validation\Rules\Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()],
            'password' => ['required' ,'min:6', 'max:64']
         ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return redirect('/login')->with('success', 'Next Step Login Please');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
