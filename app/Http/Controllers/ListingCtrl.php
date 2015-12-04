<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Listing;

use Auth;

class ListingCtrl extends Controller
{
	public function upload(Request $request) {
		

		$listing = new Listing();

		$listing->fill($request->all());

		if($request->hasFile('file')) {
			$file = $request->file('file');

			$filename = date('U') . $file->getClientOriginalName();

			$file->move(public_path('uploads/'), $filename);

			$listing->image = $filename;
		}

		$listing->user_id = Auth::user()->id;




		// $user = Auth::user

		// $listing->fill


		
		$listing->save();

		return redirect('/');
	}
}
