@extends('products.layout')
 
@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add / Edit Products</h2>
            </div>
            <div class="pull-right" style="float:left;">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
                <div class="pull-right" style="float:right;margin-left:10px;padding:2px;">
                    <a class="btn btn-danger" href="{{ url('CheckStock') }}"> Out of Stock Product</a>
                    <a class="btn btn-success" href="{{ url('Available') }}">Available Product</a>
                    <a class="btn btn-primary" href="{{ url('products') }}">All Product</a>
                </div>
            <br><br> <!-- added -->
        </div>
    </div>
   <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th >No</th>
            <th>name</th>
            <th>type</th>
            <th>price</th>
            <th>stock</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td style="width:10%">{{ ++$i }}</td>
            <td style="width:10%">{{ $product->plant_name }}</td>
            <td style="width:10%">{{ $product->plant_type }}</td>
            <td style="width:10%">{{ $product->plant_price }}</td>
            <td style="width:10%">

            @if($product->stock != 0)
                {{ $product->stock }}
            @endif
            @if($product->stock == 0)
               <ion-text style="color:red;">Out of stock</ion-text>
               @endif
            </td> 
            
            <td style="width:10%">
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('details',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $products->links() !!}
  <br>
 
@endsection