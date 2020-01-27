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
          <td>OrderID</td>
          <td>ProductID</td>
          <td>Price</td>
          <td>Quantity</td>
          <td>TotalPrice</td>
        </tr>
    </thead>
    <tbody>
        @foreach($orderdetails as $orderdetail)
        <tr>
            <td>{{$orderdetail->id}}</td>
            <td>{{$orderdetail->order_id}}</td>
            <td>{{$orderdetail->product_id}}</td>
            <td>{{$orderdetail->Price}}</td>
            <td>{{$orderdetail->Quantity}}</td>
            <td>{{$orderdetail->TotalPrice}}</td>

         <td>
                <form action="{{ route('orderdetails.edit', $orderdetail->id)}}" method="put">
                  <button class="btn btn-danger" type="submit">Edit</button>
                </form>
            </td>

            <td>
                <form action="{{ route('orderdetails.destroy', $orderdetail->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

            <form action="/orderdetails/create" method="put">
                  <button class="btn btn-danger" type="submit">Add OrderDetail</button>
                </form>
                <form action="http://laravel-sbb/">
                  <button type="submit">Return</button>
                </form>

    </tbody>
  </table>
<div>
@endsection
