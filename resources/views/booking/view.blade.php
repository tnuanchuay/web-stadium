@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Reserver's Name</th>
                <th class="text-center">Fields Name</th>
                <th class="text-center">Play Time</th>
                <th class="text-center">Reserve Time</th>
                <th class="text-center">Allow to Play</th>
                <th class="text-center">Reserve Check-In</th>
            </tr>
            </thead>
            <tbody>
            @foreach($result as $i =>$val)
                <tr>
                    <td class="text-center">{{$i+1}}</td>
                    <td class="text-center">{{$val->username}}</td>
                    <td class="text-center">{{$val->fieldname}}</td>
                    <td class="text-center">{{$val->date . " " . $val->time_from . " - " . $val->time_to}}</td>
                    <td class="text-center">{{$val->created_at}}</td>
                    @if($val->isConfirm == 0)
                        <td class="text-center">
                            <a href="booking/allow/{!! $val->id !!}">
                                <button type="button" class="btn btn-info">Allow</button>
                            </a>
                        </td>
                    @elseif($val->isConfirm == 1)
                        <td class="text-center">
                            <a href="booking/notallow/{!! $val->id !!}">
                                <button type="button" class="btn btn-danger">Not Allow</button>
                            </a>
                        </td>
                    @endif
                    @if($val->isCheckIn == 0)
                        <td class="text-center">
                            <button type="button" class="btn btn-danger">Not Check-In Yet</button>
                        </td>
                    @elseif($val->isCheckIn == 1)
                        <td class="text-center">
                            <button type="button" class="btn btn-info">Checked-In</button>
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection