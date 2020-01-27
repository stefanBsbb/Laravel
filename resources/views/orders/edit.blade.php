@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Order
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('orders.update', $order->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">PaymentMethod:</label>
          <input type="text" class="form-control" name="PaymentMethod" value={{ $order->PaymentMethod }} />
        </div>
       
                <div class="form-group">
          <label for="vid">OrderTotal :</label>
          <input type="text" class="form-control" name="OrderTotal" value={{ $order->OrderTotal }} />
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection
