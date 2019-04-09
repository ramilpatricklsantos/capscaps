
@extends('layouts.app')

@section('title')
User List
@endsection

@section('content')

<div class="container">
 <table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email</th>
      <th>Type</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $index => $user)
    <tr>
      <td>{{ ++$index }}</td>
      <td>{{ $user->lastname.', '.$user->firstname.' '.$user->middlename }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->type }}</td>
      <td>{{ $user->status }}</td>
      <td>
        
        @if($user->status == 0)
        <form action="/users/{{ $user->id }}/approve" method="POST">
          @csrf
          <button class="btn btn-primary"><i class="fas fa-check"></i> Approval</button>
        </form>

        @else
            @if($user->type == 'disabled')
        <form action="/users/{{ $user->id }}/destroy" method="GET" style="display: inline-block";>
          @csrf
          <button class="btn btn-success" onclick="return confirm('Are you sure to enable this user?');"><i class="fas fa-check-circle"></i> Enable</button>
        </form>

            @else
        <form action="/users/{{ $user->id }}/edit" method="GET" style="display: inline-block;">
          @csrf
          <button class="btn btn-secondary"><i class="fas fa-edit"></i> Editing</button>
        </form>
        <form action="/users/{{ $user->id }}/destroy" method="GET" style="display: inline-block";>
          @csrf
          <button class="btn btn-danger" onclick="return confirm('Are you sure to disable this user?');"><i class="fas fa-times-circle"></i> Disable</button>
        </form>
           @endif
        @endif


      </td>
    </tr>   
    @endforeach
  </tbody>

</table>

</div>
@endsection




