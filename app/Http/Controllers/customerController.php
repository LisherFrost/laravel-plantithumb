<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\users;
use App\Models\reports;
use App\Models\categories;
use App\Models\messages;
use App\Models\order_tbls;
use Session;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(5);
    
        return view('products.index',compact('products'));
    }

    public function cart(order_tbls $order_tbls,users $users, Product $product)
    {
        
        $data = users::where('id','=',Session::get('loginId'))->first();

        $order_tbls = order_tbls::all()->where('order_status','cart');

        $checkouts = order_tbls::all()->where('order_status','checkout');
        
        $products = Product::all();

        return view('cart',compact('products','order_tbls','data','checkouts'));
    }

    public function updata_status(order_tbls $orders,users $users)
    {
        $data = users::where('id','=',Session::get('loginId'))->first();

        $orderss = order_tbls::all();

        foreach($orderss as $order){
            if($data->id == $order->buyer_id && $order->order_status == 'cart')
            {	
                $order->prod_id	 = $order->prod_id;
                $order->order_no = $order->order_no;
                $order->buyer_id	 = $order->buyer_id;
                $order->seller_id	 = $order->seller_id;
                $order->order_quantity	 = $order->order_quantity;
                $order->order_status	 = 'checkout';
                $order->payment_method	 = $order->payment_method;

                $order->update();

            }
        }

        $data = users::where('id','=',Session::get('loginId'))->first();
        $products = Product::all();

        $orders = order_tbls::select("*")->where('buyer_id',$data->id)->where('order_status','!=','cart')
        ->orderBy('order_status', 'asc')->get();

        return view('orders_c',compact('orders','data','products'));

    }


    public function order_c(order_tbls $order,users $users)
    {
        $data = users::where('id','=',Session::get('loginId'))->first();
        $products = Product::all();

        $orders = order_tbls::select("*")->where('buyer_id',$data->id)->where('order_status','!=','cart')
        ->orderBy('order_status', 'asc')->get();

        return view('orders_c',compact('orders','data','products'));

    }
    public function pending(order_tbls $order,users $users)
    {
        $data = users::where('id','=',Session::get('loginId'))->first();
        $products = Product::all();

        $orders = order_tbls::select("*")->where('buyer_id',$data->id)->where('order_status','=','checkout')
        ->orderBy('order_status', 'asc')->get();

        return view('orders_c',compact('orders','data','products'));

    }
    public function Sent(order_tbls $order,users $users)
    {
        $data = users::where('id','=',Session::get('loginId'))->first();
        $products = Product::all();

        $orders = order_tbls::select("*")->where('buyer_id',$data->id)->where('order_status','=','Sent')
        ->orderBy('order_status', 'asc')->get();

        return view('orders_c',compact('orders','data','products'));

    }
    public function Purchased(order_tbls $order,users $users)
    {
        $data = users::where('id','=',Session::get('loginId'))->first();
        $products = Product::all();

        $orders = order_tbls::select("*")->where('buyer_id',$data->id)->where('order_status','=','zdone')
        ->orderBy('order_status', 'asc')->get();

        return view('orders_c',compact('orders','data','products'));

    }
    public function confirmReceived(users $users,Request $request, order_tbls $order_tbls,reports $reports)
    {
        
        $data = users::where('id','=',Session::get('loginId'))->first();
   
        $order_tbls = order_tbls::find($request->id);

        $order_tbls->order_status = "zdone";

        $products = Product::find($order_tbls->prod_id);

        $today = date("Y-m");

        $reports = reports::all();
 
        $count = 0;
        foreach($reports as $report)
            {

              if($report->date_report == $today){
                if($products->id == $order_tbls->prod_id)
                    {
                      $count += 1;
                        $report->seller_id = $report->seller_id;
                        $report->date_report = $report->date_report;
                        $report->num_purchase = $report->num_purchase + $order_tbls->order_quantity;
                        $report->total_sales = $report->total_sales + ($products->plant_price * $order_tbls->order_quantity);
                        
                        $res = $report->update();
                        
                    }
                }
            }

        if($count == 0){
                    
                $reports = new reports();

                $reports->seller_id = $report->seller_id;
                $reports->date_report = $today;
                $reports->num_purchase = $order_tbls->order_quantity;
                $reports->total_sales = $products->plant_price * $order_tbls->order_quantity;
                
                $res = $reports->save();
        
        }

        $res = $order_tbls->update();

        if($res){
            return back()->with('Success','Item sent');
        }else{

         return back()->with('Failed','Something went wrong');
        }
    }

    public function destroy(request $request,order_tbls $order_tbls)
    {
        $order_tbls = order_tbls::find($request->id);
        $res = $order_tbls->delete();
        
        echo $request->id;
        echo $res;
        return back();
    }
   
    public function user_profile(users $users)
    {
        $data = users::where('id','=',Session::get('loginId'))->first();
        return view('user_profile',compact('data'));
    }

    public function category(request $request,users $users)
    {
        $categories = categories::select('*')->where('id','=',$request->id)->first();

        $product = Product::all();
        $products = [];
        foreach($product as $prod)
        {
            if($prod->plant_type == $categories->name)
            {
                $products = Product::select('*')->where('plant_type','=',$categories->name)->get();

            }
        }

        $categories = categories::all();
        $data = array();
        $data = users::where('id','=',Session::get('loginId'))->first();
        
        $checkmessage_received = messages::select('*')->where('receiver_id','=',$data->id)
                                                      ->where('con_stats','=','sent')->first();
        
        return view('main',compact('data','products','categories','checkmessage_received'));
        
    }

    
}
