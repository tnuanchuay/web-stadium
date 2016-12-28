@extends('superuser.layout')

@section('content')
    <div class="container">
        <div class="margin-t text-left">
            <form action="/stadium/change" method="POST" enctype="multipart/form-data">
                <div class="col-lg-6 col-md-6">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Stadium Name</label>
                        <input class="form-control" type="text" name="name" placeholder="{{$result->name}}" value="{{$result->name}}" required/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="tel" name="tel" value="{{$result->email}}"/>
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input class="form-control" type="text" name="link"/>
                    </div>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-danger">Change</button>
                    <button type="reset" class="btn btn-info">Reset</button>
                    <button type="reset" class="btn btn-info" onclick="window.history.back()">Back</button>
                </div>
            </form>
        </div>
    </div>
@endsection