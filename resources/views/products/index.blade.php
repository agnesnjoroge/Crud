<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Product</title>
    </head>
    <body>
      <h1>Product</h1>
      <div>
        @if(session()->has('success'))
          <div>
            {{session('success')}}
          </div>
        @endif
      </div>
      <div>
        <a href="{{route('product.create')}}">Create a Product</a>
      </div>
      <div>
        <table border="1">
          <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Qty</td>
            <td>Price</td>
            <td>Desciption</td>
            <td>Edit</td>
            <td>Delete</td>
            @foreach($products as $product)
            <tr>
              <td>{{$product->id}}</td>
              <td>{{$product->name}}</td>
              <td>{{$product->qty}}</td>
              <td>{{$product->price}}</td>
              <td>{{$product->description}}</td>
              <td><a href="{{route('product.edit',['product'=>$product])}}">Edit</a></td>
              <td>
                <form method="post" action="{{route('product.delete', $product)}}">
                  @csrf
                  @method('delete')
                  <input type="submit" value="Delete"/>
                </form>
              </td>
            </tr>
            
            @endforeach
          </tr>
        </table>
      </div>
    </body>
    
</html>