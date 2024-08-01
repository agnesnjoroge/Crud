<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit Product</title>
    </head>
    <body>
      <h1>Edit A Product</h1>
      <div>
        @if($errors->any())
        <ul>
          @foreach($errors->all() as $error)
           <li>{{$error}}</li>
          
          @endforeach
        </ul>
        @endif
      </div>
      <div>
        <form method="post" action="{{route('product.update','product'=>$product)}}">
          @csrf
          @method('put')
          <div>
          <label>Name</label>
          <input type="text" name="name" placeholder="Enter name of Product" value="{{$product->name}}"/>
           </div>
           <div>
          <label>Qty</label>
          <input type="text" name="qty" placeholder="Enter quantity of Product" value='{{$product->qty}}'/>
           </div>
           <div>
          <label>Price</label>
          <input type="text" name="price" placeholder="Enter price of Product" value="{{$product->price}}" />
           </div>
           <div>
          <label>Description</label>
          <input type="text" name="description" placeholder="Enter description of Product" value="{{$product->description}}"/>
           </div>
           <div>
             <input type="submit" value="Update Product" />
           </div>
        </form>
      </div>
    </body>
    
</html>