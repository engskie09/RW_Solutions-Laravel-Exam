<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GuestController extends Controller
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

    public function Success()
    {
        return view('Success');
    }

    public function Registration()
    {
        return view('Registration');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Guest::create($request->all());

        $data = array('username'=> $request->input('username'), 'password'=> $request->input('password'), 'email'=> $request->input('email'), 'mobileno'=> $request->input('mobileno'), 'background'=> $request->input('background'));
        $emailaddress = env('MAIL_USERNAME', 'test@test.com');
        Mail::send('mail', $data, function($message) use ($request, $emailaddress)
        {
            $message->to($request->input('email'), 'Tutorials Point')->subject('RW Solutions');
            $message->from($emailaddress, 'Rafael');
        });
        echo "HTML Email Sent. Check your inbox.";

        return redirect('/Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function show(Guest $guest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function edit(Guest $guest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guest $guest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guest $guest)
    {
        //
    }
}
