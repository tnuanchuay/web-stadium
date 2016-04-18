@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="margin-t text-left">
            <form action="/field/change" method="POST">
                <div class="col-lg-12 col-md-12">
                    {{csrf_field()}}
                    <input type="hidden" value="{{$field->id}}" name="id"/>
                    <div class="form-group">
                        <label>Field's Name</label>
                        <input class="form-control" type="text" name="name" placeholder="{{$field->name}}" value="{{$field->name}}" required/>
                    </div>
                    <div class="form-group">
                        <label>Sport Type</label>
                        <select class="form-control" name="type" >
                            @if($field->type == 'soccer')
                                <option selected>Soccer</option>
                            @else
                                <option>Soccer</option>
                            @endif
                            @if($field->type == 'futsal')
                                <option selected>Futsal</option>
                            @else
                                <option>Futsal</option>
                            @endif
                            @if($field->type == 'badminton')
                                <option selected>Badminton</option>
                            @else
                                <option>Badminton</option>
                            @endif
                            @if($field->type == 'basketball')
                                <option selected>Basketball</option>
                            @else
                                <option>Basketball</option>
                            @endif
                            @if($field->type == 'tennis')
                                <option selected>Tennis</option>
                            @else
                                <option>Tennis</option>
                            @endif
                            @if($field->type == 'pingpong')
                                <option selected>Pingpong</option>
                            @else
                                <option>Pingpong</option>
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control" type="text" name="price" placeholder="{{$price->price}}" value="{{$price->price}}" required/>
                        <input type="hidden" name="price_id" value="{{$price->id}}">
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