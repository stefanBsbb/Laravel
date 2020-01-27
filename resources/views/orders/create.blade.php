@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Order
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
      <form method="post" action="{{ route('orders.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">CustomerID:</label>
              <input type="integer" class="form-control" name="customer_id"/>
          </div>
          <div class="form-group">
              <label for="name">PaymentMethod :</label>
              <input type="text" class="form-control" name="PaymentMethod"/>
          </div>
          <div class="form-group">
              <label for="name">OrderTotal :</label>
              <input type="decimal" class="form-control" name="OrderTotal"/>
          </div>

          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection
