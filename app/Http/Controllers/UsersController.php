<?php

namespace App\Http\Controllers;

use App\Mail\MailVerification;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function verify($email)
    {
        $ver = decrypt($email);
        $query = DB::table('user')->where('email', $ver)
            ->update([
                'status' => 1,
            ]);

        if ($query){
            return redirect('/login')->with('success', 'Your Email has been Verified!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'age' => 'required',
            'password' => 'required|min:6',
            'repeatPassword' => 'required|min:6',
            'gender' => 'required',
        ],
        [
            'firstName.required'=>'First Name can not be empty.',
            'lastName.required'=>'Last Name can not be empty.',
            'email.required'=>'Email can not be empty.',
            'age.required'=>'Age can not be empty.',
            'password.required'=>'Password can not be empty.',
            'password.min'=>'Password must be at least 6 characters.',
            'repeatPassword.required'=>'Password can not be empty.',
            'repeatPassword.min'=>'Password must be at least 6 characters.',
            'gender.required'=>'Gender can not be empty.',
        ]);

        if ($request->input('password') != $request->input('repeatPassword')){
            return redirect('/registration')->with('error', 'Password and Repeat Password must be same');
        }else{
            $query = DB::table('user')->insert([
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'name' => $request->input('firstName'),
                'status' => 0,
                'gender' => $request->input('gender'),
                'umur' => $request->input('age'),
            ]);

            if ($query){
                Mail::to($request->input('email'))->send(new MailVerification($request->input('email')));
                return redirect('/registration')->with('success', 'Your registration is success. Check your email to verify your account!');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        return view('backOffice.editAkun');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {
        //
    }
}
