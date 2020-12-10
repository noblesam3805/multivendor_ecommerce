<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use DB;
use App\User;
use App\About;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function signout()
    {
        Auth::logout();
        return redirect('/');
    }
    
     public function ePages()
    {
        $about = About::all();
        return view('ePages', compact('about'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= user::orderBy('created_at', 'desc')->paginate(5);
        $products = DB::table('posts')->where('user_id', Auth::id())->get();
        $a_products = DB::table('posts')->where('approved', 0)->get();
        return view('home', compact('products', 'users', 'a_products'));
    }

    public function update(Request $request, $id)
    {
          $user= user::find($id);
          $this->validate($request,[
              'user'=>'required',
              'email'=>'required',
              'phone'=>'required',
          ]);
          $user->name = $request->user;
          $user->email = $request->email;
          $user->phone = $request->phone;
          $user->save();
          session()->flash('message', 'Account Details Updated Successfully');
          return redirect()->back();
    }

}
