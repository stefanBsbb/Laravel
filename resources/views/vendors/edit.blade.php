@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Vendor
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
      <form method="post" action="{{ route('vendors.update', $vendor->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" name="name" value={{ $vendor->name }} />
        </div>
        <div class="form-group">
          <label for="price">Etc :</label>
          <input type="text" class="form-control" name="etc" value={{ $vendor->etc }} />
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection
