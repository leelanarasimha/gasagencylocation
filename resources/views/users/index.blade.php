@extends('app')
@section('content')

<div class="row my-4">
    <div class="col-md-12">
        <h3>Users</h3>
        <div class="text-right my-3">
            <a href="{{url('users/add')}}" class="btn btn-primary">Add User</a>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->mobile}}</td>
                <td><a href="{{url('users/edit/'.$user->id)}}">Edit User</a></td>
            </tr>
            @endforeach
        </tbody>
        </table>

        {{ $users->render()}}
    </div>
</div>
@endsection
