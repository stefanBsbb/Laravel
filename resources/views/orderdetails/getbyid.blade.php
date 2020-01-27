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
 
        <tr>
            <td>{{$orderdetails->id}}</td>
            <td>{{$orderdetails->order_id}}</td>
            <td>{{$orderdetails->product_id}}</td>
            <td>{{$orderdetails->Price}}</td>
            <td>{{$orderdetails->Quantity}}</td>
            <td>{{$orderdetails->TotalPrice}}</td>

         
        </tr>
    


    </tbody>
  </table>
<div>
@endsection
