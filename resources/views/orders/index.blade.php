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
          <td>CustomerID</td>
          <td>PaymentMethod</td>
          <td>OrderTotal</td>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->customer_id}}</td>
            <td>{{$order->PaymentMethod}}</td>
            <td>{{$order->OrderTotal}}</td>
            <td>
                <form action="{{ route('orderdetails.show', $order->id)}}" method="get">
                  <button class="btn btn-danger" type="submit">Details</button>
                </form>
            </td>
         <td>
                <form action="{{ route('orders.edit', $order->id)}}" method="put">
                  <button class="btn btn-danger" type="submit">Edit</button>
                </form>
            </td>

            <td>
                <form action="{{ route('orders.destroy', $order->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

            <form action="/orders/create" method="put">
                  <button class="btn btn-danger" type="submit">Add Order</button>
                </form>
                <form action="http://laravel-sbb/">
                  <button type="submit">Return</button>
                </form>

    </tbody>
  </table>
<div>
@endsection
