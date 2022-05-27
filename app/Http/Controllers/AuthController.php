<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\users;
use Hash;
use App\Models\Product;
use App\Models\categories;
use App\Models\messages;
use Session;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = users::where('email','=',$request->email)->where('type','=','buyer')->first();

         if($user){
             if(Hash::check($request->password,$user->password)){
                   $request->session()->put('loginId',$user->id);
                   return redirect('session');
                //  echo 'success';
             }else{
                //  echo 'echo 2';
                 return back()->with('Failed','Wrong Password');
             }
         }else{
            //  echo 'error 1';
             return back()->with('Failed','Wrong Email');
         }
    }

    public function adminlogin(Request $request)
    {
        $user = users::where('email','=',$request->email)->where('type','=','seller')->first();

         if($user){
             if(Hash::check($request->password,$user->password)){
                   $request->session()->put('loginId',$user->id);
                   return redirect('admin');
                //  echo 'success';
             }else{
                //  echo 'echo 2';
                 return back()->with('Failed','Wrong Password');
             }
         }else{
            //  echo 'error 1';
             return back()->with('Failed','Wrong Email');
         }
    }

    public function session()
    {
        

        $products = Product::latest()->paginate(5);
        $categories = categories::all();
      $data = array();
      if(Session::has('loginId')){
            $data = users::where('id','=',Session::get('loginId'))->first();
            
        $checkmessage_received = messages::select('*')->where('receiver_id','=',$data->id)
                                                      ->where('con_stats','=','sent')->first();
            return view('main',compact('data','products','categories','checkmessage_received'));
        }
    }

//fixing 17/05/2022    
    public function logout()
    {
        if(Session::has('loginId')){
            Session::pull('loginId');
        }
        return view('form');
            
    }

    public function adminlogout()
    {
        if(Session::has('loginId')){
            Session::pull('loginId');
        }
        return view('admin/login');
      
    }

    public function register(Request $request)
    {
        $type = 'buyer';
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:12',
        ]);

        $user = new users();
        $user->name = $request->name;
        $user->address = $request->address;
        $user->type = $type;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/users/', $filename);
            $user->image = $filename;
        }else{
             echo 'aaaaaaaaaaa';
        }
        $res = $user->save();
        
        if($res){
            // echo 'success';
            return back()->with('Success','you have registered');
        }else{
        //  echo 'Fail';
         return back()->with('Failed','Something went wrong');
        }

    }


    public function registeradmin(Request $request)
    {
        $type = 'seller';
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:12',
        ]);

        $user = new users();
        $user->name = $request->name;
        $user->address = $request->address;
        $user->type = $type;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/users/', $filename);
            $user->image = $filename;
        }else{
             echo 'aaaaaaaaaaa';
        }
        $res = $user->save();
        
        if($res){
            // echo 'success';
            return back()->with('Success','you have registered');
        }else{
        //  echo 'Fail';
         return back()->with('Failed','Something went wrong');
        }

    }
}
