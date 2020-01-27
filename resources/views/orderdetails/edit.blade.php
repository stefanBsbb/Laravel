@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit OrderDetail
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
      <form method="post" action="{{ route('orderdetails.update', $orderdetail->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Price:</label>
          <input type="decimal" class="form-control" name="Price" value={{ $orderdetail->Price }} />
        </div>
         <div class="form-group">
          <label for="name">Quantity:</label>
          <input type="integer" class="form-control" name="Quantity" value={{ $orderdetail->Quantity }} />
        </div>
       
        <div class="form-group">
          <label for="vid">TotalPrice :</label>
          <input type="decimal" class="form-control" name="TotalPrice" value={{ $orderdetail->TotalPrice }} />
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection
