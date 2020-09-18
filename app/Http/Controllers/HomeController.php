<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller {
	public function index() {

		return view('frontend.index');

	}
	public function contact() {
		return view('frontend.contact');
	}
	public function another() {
		return view('frontend.another_page');
	}

	public function page() {
		$chol = DB::table('yasins')->get();
		return view('frontend.page', compact('chol'));
	}

	public function information() {
		$boss = DB::table('rimi')->get();
		return view('frontend.contact_information', compact('boss'));
	}
	public function example() {
		$another=DB::table('users')->get();
		return view('frontend.examples',compact('another'));
	}
	public function examplesedit() {
		return view('frontend.examplesedit');
	}
	public function contactedit() {

		return view('frontend.contactedit');
	}
	public function contact1() {
		return view('frontend.contact1');
	}

	public function submit(request $request) {
		$data = array();
		$data['day'] = $request->day;
		$data['location'] = $request->location;

		DB::table('yasins')->insert($data);
		return redirect::to('/contact1');
	}
	public function delete($id) {
		$del = DB::table('yasins')->where('id', $id)->delete();
		return redirect::to('/page');
	}

	public function edit($id) {
		$choledit = DB::table('yasins')->where('id', $id)->first();
		// return response()->json($choledit);
		return view('frontend.contactedit1', compact('choledit'));

	}

	public function update(request $request, $id) {
		$data = array();
		$data['day'] = $request->day;
		$data['location'] = $request->location;

		DB::table('yasins')->where('id', $id)->update($data);
		return redirect::to('/page');
		// return response()->json($data);
	}

	

	public function submit1(request $request) {

		$data = array();
		$data['r_id'] = $request->r_id;
		$data['email'] = $request->email;
		$data['message'] = $request->message;

		DB::table('rimi')->insert($data);
		return redirect::to('/contact');
	}

	
	



	public function delete1($id) {
		DB::table('rimi')->where('id', $id)->delete();
		return redirect::to('/information');
	}


	public function edit1($id) {
		$choledit1 = DB::table('rimi')->where('id', $id)->first();
		// return response()->json($choledit);
		return view('frontend.contactedit', compact('choledit1'));

	}

	

	public function examples() {
		$post = DB::table('rimi')->join('yasins', 'yasins.id', 'r_id')->get();
		return response()->json($post);
		// return view('frontend.examples', compact('post'));

	}

	// public function submit(Request $request) {
	// 	$data = array();
	// 	$data['name'] = $request->name;
	// 	$data['email'] = $request->email;
	// 	$data['message'] = $request->message;
	// 	$image = $request->file('image');
	// 	if ($image) {
	// 		$image_name = hexdec(uniqid()); //str_random(5);
	// 		$ext = strtolower($image->getClientOriginalExtension());
	// 		$image_full_name = $image_name . '.' . $ext;
	// 		$upload_path = 'public/frontend/image/';
	// 		$image_url = $upload_path . $image_full_name;
	// 		$succes = $image->move($upload_path, $image_full_name);
	// 		$data['image'] = $image_url;
	// 		DB::table('users')->insert($data);
	// 		return redirect::to('/contact');

	// 	} else {
	// 		DB::table('users')->insert($data);
	// 		return redirect::to('/about');
	// 	}

	// }

	// public function about() {
	// 	// return view('frontend.about');
	// 	$category = DB::table('users')->get();

	// 	return view('frontend.contact_information', compact('category'));
	// }

	// public function edit($id) {
	// 	$boss = DB::table('users')->where('id', $id)->first();

	// 	// return response()->json($boss);

	// 	return view('frontend.contactedit')->with('chol', $boss);
	// }

	// public function update(request $request, $id) {
	// 	$data = array();
	// 	$data['name'] = $request->name;
	// 	$data['email'] = $request->email;
	// 	$data['message'] = $request->message;

	// 	DB::table('users')->where('id', $id)->update($data);
	// 	return redirect::to('/about');
	// }

	// public function delete($id) {
	// 	$delete = DB::table('users')
	// 		->where('id', $id)
	// 		->delete();
	// 	return redirect::to('/about');
	// }

}
