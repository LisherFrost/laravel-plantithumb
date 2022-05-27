<?php
  
namespace App\Http\Controllers;
   
use App\Models\users;
use App\Models\reports;
use Session;
use App\Models\Product;
use App\Models\order_tbls;
use Illuminate\Http\Request;
  
class ProductController extends Controller
{
    public function index()
    {
        $data = users::where('id','=',Session::get('loginId'))->first();
        $products = Product::select('*')->where('seller_id','=',$data->id)->latest()->paginate(5);
    
        return view('products.index',compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    public function create()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = users::where('id','=',Session::get('loginId'))->first();
            return view('products.create',compact('data'));
        
        }else{
            echo 'aaaaaaa';
        }

    }
    
    public function store(Request $request, reports $reports)
    {
        // $request->validate([
        //     'image' => 'required',
        //     'seller_id' => 'required',
        //     'plant_name' => 'required',
        //     'plant_type' => 'required',
        //     'plant_price' => 'required',
        //     'stock' => 'required',
        //     'plant_location' => 'required',
        //     'plant_description' => 'required'
        // ]);

        $data = array();

        $data = users::where('id','=',Session::get('loginId'))->first();

        $Product = new Product();
        $Product->seller_id = $request->seller_id;
        $Product->plant_name = $request->plant_name;
        $Product->plant_type = $request->plant_type;
        $Product->plant_price = $request->plant_price;
        $Product->stock = $request->stock;
        $Product->plant_location = $request->plant_location;
        $Product->plant_description = $request->plant_description;
       
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/products/', $filename);
            $Product->image = $filename;

            
        }

        $res = $Product->save();

        // create sale report

        $today = date("Y-m");

        $reports = new reports();

        $reports->seller_id = $Product->id;
        $reports->date_report = $today;
        $reports->num_purchase = 0;
        $reports->total_sales = 0;
       
        $reports->save();
        
        
        if($res){
            return redirect()->route('products.index')
                            ->with('success','Product created successfully.');
        }else{

         return back()->with('Failed','Something went wrong');
        }

    }
     
  
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    } 
     
   
    public function edit(Product $product)
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = users::where('id','=',Session::get('loginId'))->first();
            return view('products.edit',compact('product','data'));
        }else{
            echo 'aaaaaaa';
        }

    }
    
   
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'seller_id' => 'required',
            'plant_name' => 'required',
            'plant_type' => 'required',
            'plant_price' => 'required',
            'stock' => 'required',
            'plant_location' => 'required',
            'plant_description' => 'required'
        ]);
        $Product = Product::find($product->id);
        $Product->seller_id = $request->seller_id;
        $Product->plant_name = $request->plant_name;
        $Product->plant_type = $request->plant_type;
        $Product->plant_price = $request->plant_price;
        $Product->stock = $request->stock;
        $Product->plant_location = $request->plant_location;
        $Product->plant_description = $request->plant_description;
       
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/products/', $filename);
            $Product->image = $filename;
        }
      
        $Product->update();
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');

        
    }
    
   
    public function destroy(Product $product)
    {
        $product->delete();
    
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
   
    public function viewproduct(Request $product)
    {
        
        $product = Product::find($product->id);
        return view('view_product',compact('product'));
    }
    
    public function addTocart(Request $request, order_tbls $order_tbls)
    {
            $data = array();
            
            $data = users::where('id','=',Session::get('loginId'))->first();

            $product = Product::find($request->id);

            $order_tbls->prod_id = $product->id;
            $order_tbls->buyer_id = $data->id;
            $order_tbls->order_no = 0;
            $order_tbls->seller_id = $product->seller_id;
            $order_tbls->order_quantity = $request->qty;
            $order_tbls->order_status = 'cart';
            $order_tbls->payment_method = $request->delivery;
    
            $res = $order_tbls->save();

            if($res){
                return redirect('/session');
            }else{
    
             return back()->with('Failed','Something went wrong');
            }
            
    }
    public function CheckStock()
    {
        $data = users::where('id','=',Session::get('loginId'))->first();
        $products = Product::select('*')->where('seller_id','=',$data->id)->where('stock','=',0)->latest()->paginate(5);
    
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function Available()
    {
        $data = users::where('id','=',Session::get('loginId'))->first();
        $products = Product::select('*')->where('seller_id','=',$data->id)->where('stock','!=',0)->latest()->paginate(5);
    
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        
    }
}