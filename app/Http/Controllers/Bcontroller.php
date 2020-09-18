<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bcontroller extends Controller
{
    public function update2(request $request, $id){
		$data=array();
		$data['name']=$request->name;
		$data['email']=$request->email;
		$data['message']=$request->message;

		DB::table('users')->where('id',$id)->update($data);
		return redirect::to('/example');


		// return response()->json($data);

	}
	public function delete2($id){
		DB::table('users')->where('id',$id)->delete();
		return redirect::to('/example');
	}
	public function edit2($id){
		$otheredit=DB::table('users')->where('id',$id)->first();
		return view('frontend.examplesedit',compact('otheredit'));
	}
	public function submit2(request $request) {
		$data=array();
		$data['name']=$request->name;
		$data['email']=$request->email;
		$data['image']=$request->image;
		$data['message']=$request->message;


		DB::table('users')->insert($data);
		return redirect::to('/another');
	}

}
