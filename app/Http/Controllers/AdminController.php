<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\order_tbls;
use App\Models\reports;
use App\Models\users;
use App\Models\messages;
use Session;
use Hash;

class AdminController extends Controller
{
    public function adminPage()
    {
        $data = array();
        $data = users::where('id','=',Session::get('loginId'))->first();        
        $products = Product::all();

        return view('admin/admin',compact('products','data'));
    }
    public function profile()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = users::where('id','=',Session::get('loginId'))->first();
            return view('admin/profile',compact('data'));
        }else{
            echo 'aaaaaaa';
        }
    }
    public function Editprofile()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = users::where('id','=',Session::get('loginId'))->first();
            return view('input/edit_profile',compact('data'));
        }else{
            echo 'aaaaaaa';
        }
    }
    public function update_profile(Request $request, users $users)
    {

        $data = array();
        if(Session::has('loginId'))
        {
            $data = users::where('id','=',Session::get('loginId'))->first();
        }
   
        $User = users::find($data->id);

        $User->name = $request->name;
        $User->address = $request->address;
        $User->type = $request->type;
        $User->email = $request->email;
        $User->password = $request->password;
        
        if($User->password == null)
        {
            $User->password =  $data->password;
        }else{
            $User->password = Hash::make($request->password);
        }
        echo $User->password;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/users/', $filename);
            $User->image = $filename;
        }
        $User->update();
        return back()->with('Success','Profile Update Successfully');
    }

    public function orders(order_tbls $orders, users $user,Product $products)
    {
        $data = array();
        $products = Product::all();
        $data = users::where('id','=',Session::get('loginId'))->first();

        $orders = order_tbls::select("*")->where("seller_id", $data->id)->orderBy('created_at', 'desc')->get();
        return view('admin/orders', compact('orders','products','data'));
    }

    public function update_orders(Request $request, order_tbls $order_tbls,Product $products)
    {
   
        $order_tbls = order_tbls::find($request->id);

        $order_tbls->order_status = "sent";

        
        $products = Product::find($order_tbls->prod_id);
        
        $products->stock = $products->stock -  $order_tbls->order_quantity;
        $data = $products->created_at;
    
        $order_tbls->update();
        $products->update();

        return back();
        
    }

    public function details(Request $request,Product $products,users $users)
    {
        $product = Product::find($request->id);
        $users = Users::select("*")->where("id", $product->seller_id)->get();
           
        return view("admin/details",compact('product','users'));
    }

    public function sales_history(Product $products,users $users,reports $orders)
    {
    
        $date = array();
        $sale = array();
        $total = array();
        $data = users::where('id','=',Session::get('loginId'))->first();
        $products = Product::select("*")->where("seller_id", $data->id)->get();
        
        $orders = order_tbls::select("*")->where("seller_id", $data->id)->where("order_status",'=', 'zdone')->get();
        
        $reports = reports::select("*")->where("seller_id", $data->id)->get();
        $users = users::all();
        foreach($reports as $report)
        {
            $date[] = $report->date_report;
            $sale[] = $report->total_sales;
            $total[] = $report->num_purchase;
        }
        // dd($sale);
        // dd($date);
        return view('admin/sales_history',compact('users','orders','reports','products','date','sale','total'));
    }
    public function adminMessage(users $users)
    {
        $current_user = users::where('id','=',Session::get('loginId'))->first();
        $users = users::orderBy("name")->get();

        $sigleuser = users::all()->first();

        $checkmessage_received = messages::select('*')->where('receiver_id','=',$current_user->id)
                                                    ->where('sender_id','=',$sigleuser->id)->first();

        $checkmessage_send = messages::select('*')->where('sender_id','=',$current_user->id)
                                                      ->where('receiver_id','=',$sigleuser->id)->first();

        if($checkmessage_send != null )
        {
            $messages = messages::select('*')->where('convo_id','=',$checkmessage_send->convo_id)->get();
        }
        elseif($checkmessage_received != null)
        {
            $messages = messages::select('*')->where('convo_id','=',$checkmessage_received->convo_id)->get();
        }
        else
        {
            $messages = [];
        }
        $send = messages::select('*')->where('receiver_id','=',$current_user->id)->get();

        return view('admin/contacts',compact('send','current_user','sigleuser','users','messages'));

    }
    
    public function viewMessage(Request $request,messages $messages)
    {
        
        $current_user = users::where('id','=',Session::get('loginId'))->first();
        $users = users::orderBy("name")->get();
        $sigleuser = users::select('*')->where('id','=',$request->id)->first();

        $checkmessage_received = messages::select('*')->where('receiver_id','=',$current_user->id)
                                                    ->where('sender_id','=',$request->id)->first();

        $checkmessage_send = messages::select('*')->where('sender_id','=',$current_user->id)
                                                      ->where('receiver_id','=',$request->id)->first();

        if($checkmessage_send != null )
        {
            $messages = messages::select('*')->where('convo_id','=',$checkmessage_send->convo_id)->get();
        }
        elseif($checkmessage_received != null)
        {
            $messages = messages::select('*')->where('convo_id','=',$checkmessage_received->convo_id)->get();
        }
        else
        {
            $messages = [];
        }
        
        $send = messages::select('*')->where('receiver_id','=',$current_user->id)->orderBy('con_stats', 'DESC')->get();

        $read = messages::select('*')->where('receiver_id','=',$current_user->id)
                                     ->where('sender_id','=',$request->id)->get();
        
        foreach($read as $m)
        {
            $updateMessage = messages::find($m->id);
            $updateMessage->con_stats = 'read';
            
            $res = $updateMessage->update();
           
        }

        return view('admin/contacts',compact('send','current_user','sigleuser','users','messages'));
    }

    public function sendMessage(Request $request,messages $messages,users $users)
    {
        $request->validate(['newMsg' => 'required']);

        $current_user = users::where('id','=',Session::get('loginId'))->first();
        $users = users::orderBy("name")->get();

        $sigleuser = users::select('*')->where('id','=',$request->id)->first();

        $checkmessage_received = messages::select('*')->where('receiver_id','=',$current_user->id)
                                                    ->where('sender_id','=',$request->id)->first();

        $checkmessage_send = messages::select('*')->where('sender_id','=',$current_user->id)
                                                      ->where('receiver_id','=',$request->id)->first();

        if($checkmessage_send != null ){

            $message = new messages();
            $message->convo_id = $checkmessage_send->convo_id;
            $message->convo_content = $request->newMsg;	
            $message->sender_id = $current_user->id;	
            $message->receiver_id = $sigleuser->id;
            $message->sender_name = $current_user->name;
            $message->receiver_name = $sigleuser->name;
            $message->con_stats = 'sent';

            $res = $message->save();

            $messages = messages::select('*')->where('convo_id','=',$checkmessage_send->convo_id)->get();

        }elseif($checkmessage_received != null) {

            $message = new messages();
            $message->convo_id = $checkmessage_received->convo_id;
            $message->convo_content = $request->newMsg;	
            $message->sender_id = $current_user->id;	
            $message->receiver_id = $sigleuser->id;
            $message->sender_name = $current_user->name;
            $message->receiver_name = $sigleuser->name;
            $message->con_stats = 'sent';

            $messages = messages::select('*')->where('convo_id','=',$checkmessage_received->convo_id)->get();

            $res = $message->save();

        }else{

            $rand = rand(7,5000000);

            $message = new messages();
            $message->convo_id = $rand;	
            $message->convo_content = $request->newMsg;	
            $message->sender_id = $current_user->id;	
            $message->receiver_id = $sigleuser->id;
            $message->sender_name = $current_user->name;
            $message->receiver_name = $sigleuser->name;
            $message->con_stats = 'sent';

            $res = $message->save();

            $messages = [];
        }
        $send = messages::select('*')->where('receiver_id','=',$current_user->id)->get();
        
         return back();
    }
    public function search(Request $request,messages $messages)
    {
        $search = $_GET['search'];
        $users = users::where("name","LIKE",'%'.$search.'%')->get();

        $current_user = users::where('id','=',Session::get('loginId'))->first();
      
        $sigleuser = users::all()->first();

        $checkmessage_received = messages::select('*')->where('receiver_id','=',$current_user->id)
                                                    ->where('sender_id','=',$sigleuser->id)->first();

        $checkmessage_send = messages::select('*')->where('sender_id','=',$current_user->id)
                                                      ->where('receiver_id','=',$sigleuser->id)->first();

        if($checkmessage_send != null )
        {
            $messages = messages::select('*')->where('convo_id','=',$checkmessage_send->convo_id)->get();
        }
        elseif($checkmessage_received != null)
        {
            $messages = messages::select('*')->where('convo_id','=',$checkmessage_received->convo_id)->get();
        }
        else
        {
            $messages = [];
        }
        $send = messages::select('*')->where('receiver_id','=',$current_user->id)->get();

        return view('admin/contacts',compact('send','current_user','sigleuser','users','messages'));
    }

}