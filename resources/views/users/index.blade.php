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
          <td>Email</td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>

         <td>
                <form action="{{ route('users.edit', $user->id)}}" method="put">
                  <button class="btn btn-danger" type="submit">Edit</button>
                </form>
            </td>

            <td>
                <form action="{{ route('users.destroy', $user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
                    
            <form action="/users/create" method="put">
                  <button class="btn btn-danger" type="submit">Add User</button>
                </form>
                            <form action="http://laravel-sbb/">
                  <button type="submit">Return</button>
                </form>

    </tbody>
  </table>
<div>
@endsection
