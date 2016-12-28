@extends('superuser.layout')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Stadium Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Role</th>
                <th class="text-center">Created at</th>
                <th class="text-center">Updated at</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($result as $i =>$val)
                <tr>
                    <td class="text-center">{{$i+1}}</td>
                    <td class="text-center">{{$val->name}}</td>
                    <td class="text-center">{{$val->email}}</td>
                    @if($val->superuser == 1)
                    <td class="text-center">Super User</td>
                    @else
                    <td class="text-center">User</td>
                    @endif
                    <td class="text-center">{{$val->created_at}}</td>
                    <td class="text-center">{{$val->updated_at}}</td>
                    <td>
                        <a href="/superuser/user/update/{{$val->id}}">
                            <button class="btn btn-info">Change</button>
                        </a>
                        <a href="/superuser/user/del/{{$val->id}}">
                            <button class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection