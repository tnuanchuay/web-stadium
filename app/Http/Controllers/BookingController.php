<?php

namespace App\Http\Controllers;

use App\Reserve;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Auth;

class BookingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function View(){
        $id = Auth::user()->id;

        $result = DB::select('select 
                    users.name as username,
                    fields.name as fieldname,
                    reserves.*
                    from 
                      stadiums, 
                      service_providers, 
                      fields, 
                      reserves,
                      users
                    where 
                      reserves.field_id = fields.id and 
                      fields.stadium_id = stadiums.id and
                      stadiums.sp_id = service_providers.id and
                      service_providers.id = :id and
                      reserves.facebook_id = users.facebook_id
                    order by reserves.created_at desc', ['id'=>$id]);

//        return response()->json($result);
        return view('booking.view')->with(['result' => $result]);
    }

    public function Allow($id){
        $reserve = Reserve::find($id);
        $reserve->isConfirm = 1;
        $reserve->save();
        return redirect()->to('booking');
    }

    public function NotAllow($id){
        $reserve = Reserve::find($id);
        $reserve->isConfirm = 0;
        $reserve->save();
        return redirect()->to('booking');
    }
}
