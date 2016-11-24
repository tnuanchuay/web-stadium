<?php

namespace App\Http\Controllers;

use App\Stadium;
use App\ServiceProvider;
use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Storage;
use File;
use Illuminate\Support\Facades\Input;
class StadiumController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function View(){
        $id = Auth::user()->id;
        $stadium = Stadium::where('sp_id', '=', $id)->first();
        if($stadium == null){
            $sp = ServiceProvider::find($id);
            $stadium = new Stadium();
            $stadium->name = $sp->name;
            $stadium->sp_id = $id;
            $stadium->save();
        }
        return view('stadium.view')->with(['result'=>$stadium]);
    }

    public function Change(Request $request){
        $id = Auth::user()->id;
        $stadium = Stadium::where('sp_id', '=', $id)->first();
        $stadium->name = Input::get('name');
        $stadium->tel = Input::get('tel');
        $stadium->link = Input::get('link');
        $stadium->time_open = Input::get('time_open');
        $stadium->time_close = Input::get('time_close');
        $stadium->latitude = Input::get('latitude');
        $stadium->longitude = Input::get('longitude');

        $file = $request->file('uploader');
        $name = $file->getClientOriginalName();
        $path = public_path("upload");

        $request->file('uploader')->move($path, $name);

        $stadium->image = 'http://stadium.ntossapo.me:8000/upload/' . $name;

        $stadium->save();
        return redirect()->to('stadium');
    }
}
