@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Field's Name</th>
                <th class="text-center">Sport Type</th>
                <th class="text-center"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($result as $i =>$val)
                <tr>
                    <td class="text-center">{{$i+1}}</td>
                    <td class="text-center">{{$val->name}}</td>
                    <td class="text-center">{{$val->type}}</td>
                    <td class="text-center">
                        <a href="field/{{$val->id}}">
                            <button type="button" class="btn btn-info">Edit</button>
                        </a>
                        <a href="field/{{$val->id}}/delete">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <a href=" field/new/{{$stadium->id}}"><button type="button" class="btn btn-success">New Field</button></a>
    </div>
@endsection