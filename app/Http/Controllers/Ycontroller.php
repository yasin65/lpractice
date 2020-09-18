<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ycontroller extends Controller {
	public function update1(request $request, $id) {
		return view('frontend.index');
		// $data = array();
		// $data['r_id'] = $request->r_id;
		// $data['email'] = $request->email;
		// $data['message'] = $request->message;

		// return response()->json($data);
	}
}
