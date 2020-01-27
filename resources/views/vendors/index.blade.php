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
          <td>Etc</td>
        </tr>
    </thead>
    <tbody>
        @foreach($vendors as $vendor)
        <tr>
            <td>{{$vendor->id}}</td>
            <td>{{$vendor->name}}</td>
            <td>{{$vendor->etc}}</td>

         <td>
                <form action="{{ route('vendors.edit', $vendor->id)}}" method="put">
                  <button class="btn btn-danger" type="submit">Edit</button>
                </form>
            </td>

            <td>
                <form action="{{ route('vendors.destroy', $vendor->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

            <form action="/vendors/create" method="put">
                  <button class="btn btn-danger" type="submit">Add Vendor</button>
                </form>
                <form action="http://laravel-sbb/">
                  <button type="submit">Return</button>
                </form>

    </tbody>
  </table>
<div>
@endsection
