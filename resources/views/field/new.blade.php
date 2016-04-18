@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="margin-t text-left">
            <form action="/field/new" method="POST">
                <div class="col-lg-12 col-md-12">
                    {{csrf_field()}}
                    <input type="hidden" value="{{$stadium->id}}" name="id"/>
                    <div class="form-group">
                        <label>Field's Name</label>
                        <input class="form-control" type="text" name="name" placeholder="Field name" required/>
                    </div>
                    <div class="form-group">
                        <label>Sport Type</label>
                        <select class="form-control" name="type" >
                                <option>Soccer</option>
                                <option>Futsal</option>
                                <option>Badminton</option>
                                <option>Basketball</option>
                                <option>Tennis</option>
                                <option>Pingpong</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control" type="text" name="price" placeholder="Price Rate" required/>
                    </div>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-danger">Create</button>
                    <button type="reset" class="btn btn-info">Reset</button>
                    <button type="reset" class="btn btn-info" onclick="window.history.back()">Back</button>
                </div>
            </form>
        </div>
    </div>
@endsection