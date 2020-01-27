@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add OrderDetail
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
      <form method="post" action="{{ route('orderdetails.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">OrderID:</label>
              <input type="integer" class="form-control" name="order_id"/>
          </div>
          <div class="form-group">
              <label for="name">ProductID :</label>
              <input type="integer" class="form-control" name="product_id"/>
          </div>
          <div class="form-group">
              <label for="name">Price :</label>
              <input type="decimal" class="form-control" name="Price"/>
          </div>
                    <div class="form-group">
              <label for="name">Quantity :</label>
              <input type="integer" class="form-control" name="Quantity"/>
          </div>
                    <div class="form-group">
              <label for="name">TotalPrice :</label>
              <input type="decimal" class="form-control" name="TotalPrice"/>
          </div>

          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection
