@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="margin-t text-left">
            <form action="/stadium/change" method="POST">
                <div class="col-lg-6 col-md-6">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Stadium Name</label>
                        <input class="form-control" type="text" name="name" placeholder="{{$result->name}}" value="{{$result->name}}" required/>
                    </div>
                    <div class="form-group">
                        <label>Telephone Number</label>
                        <input class="form-control" type="tel" name="tel" placeholder="{{$result->tel}}" value="{{$result->tel}}"/>
                    </div>
                    <div class="form-group">
                        <label>Website</label>
                        <input class="form-control" type="text" name="link" placeholder="{{$result->link}}" value="{{$result->link}}"/>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Open Time</label>
                        <input class="form-control" type="text" name="time_open" value="{{$result->time_open}}" value="{{$result->time_open}}"/>
                    </div>
                    <div class="form-group">
                        <label>Close Time</label>
                        <input class="form-control" type="text" name="time_close" placeholder="{{$result->time_close}}" value="{{$result->time_close}}"/>
                    </div>
                    <div class="form-group">
                        <label>Latitude</label>
                        <input class="form-control" type="text" name="latitude" placeholder="{{$result->latitude}}" value="{{$result->latitude}}" required/>
                    </div>
                    <div class="form-group">
                        <label>Logitude</label>
                        <input class="form-control" type="text" name="longitude" placeholder="{{$result->longitude}}" value="{{$result->longitude}}"required/>
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