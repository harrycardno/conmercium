<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Hash;
use Auth;

class UserCtrl extends Controller
{

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('partials.register');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$user = new User($request->all());

		$user->password = Hash::make($request->get('password'));

		$user->save();

		Auth::login($user);

		return redirect('/user/'.$user->name);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::where('name', $id)->first();
		return view('user', [
			'user' => $user,
			'listings' => $user->listings
		]);
	}

	public function login() {
		return view('login');
	}

	public function authenticate(Request $request) {
		if(Auth::attempt($request->only('email', 'password'))) {
			return redirect('/user/'.Auth::user()->name);
		} else {
			return redirect('/login');
		}
	}

	public function logout() {
		Auth::logout();

		return redirect('/');
	}


}