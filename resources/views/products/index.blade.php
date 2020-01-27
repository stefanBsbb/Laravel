@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>VendorID</td>
          <td>Etc</td>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->vendor_id}}</td>
            <td>{{$product->etc}}</td>

         <td>
                <form action="{{ route('products.edit', $product->id)}}" method="put">
                  <button class="btn btn-danger" type="submit">Edit</button>
                </form>
            </td>

            <td>
                <form action="{{ route('products.destroy', $product->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

            <form action="/products/create" method="put">
                  <button class="btn btn-danger" type="submit">Add Product</button>
                </form>
                <form action="http://laravel-sbb/">
                  <button type="submit">Return</button>
                </form>

    </tbody>
  </table>
<div>
@endsection
