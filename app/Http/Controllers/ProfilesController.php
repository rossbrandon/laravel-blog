<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.profile')->with('user', Auth::user());
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
        //
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'avatar' => 'image',
            'facebook' => 'url',
            'youtube' => 'url'
        ]);

        $user = Auth::user();

        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $avatarUniqueName = time() . $avatar->getClientOriginalName();
            $avatar->move('uploads/avatars', $avatarUniqueName);
            $user->profile->avatar = 'uploads/avatars/' . $avatarUniqueName;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->profile->about = $request->has('about') ? $request->about : null;
        $user->profile->facebook = $request->has('facebook') ? $request->facebook : null;
        $user->profile->youtube = $request->has('youtube') ? $request->youtube : null;

        if ($request->has('password') && $request->password != null && $request->password != '') {
            $user->password = bcrypt($request->password);
        }

        $user->save();
        $user->profile->save();

        Session::flash('success', 'Profile updated');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
