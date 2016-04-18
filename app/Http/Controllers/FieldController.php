<?php

namespace App\Http\Controllers;

use App\Field;
use App\PriceRate;
use App\Stadium;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Illuminate\Support\Facades\Input;

class FieldController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function View(){
        $id = Auth::user()->id;
        $field = Stadium::where('sp_id', '=', $id)
            ->first()
            ->Field()
            ->get();
        $stadium = Stadium::where('sp_id', '=', $id)
            ->first();
        return view('field.view')->with(['result'=>$field, 'stadium'=>$stadium]);
    }

    public function Detail($id){
        $field = Field::find($id);
        $price = $field->PriceRate()->first();
        return view('field.detail')->with(['field'=>$field, 'price'=>$price]);
    }

    public function Change(){
        $id = Input::get("id");
        $field = Field::find($id);
        $field->name = Input::get("name");
        $field->type = mb_strtolower(Input::get("type"));
        $field->save();
        
        $price = PriceRate::find(Input::get("price_id"));
        $price->price = Input::get("price");
        $price->save();
        return redirect()->to('field');
    }
    
    public function Form($id){
        $stadium = Stadium::find($id);
        return view('field.new')->with(['stadium'=>$stadium]);
    }
    
    public function Create(){
        $id = Input::get('id');
        $name = Input::get('name');
        $type = Input::get('type');
        $price = Input::get('price');

        $type = strtolower($type);

        $field = new Field();
        $field->name = $name;
        $field->type = $type;
        $field->stadium_id = $id;
        $field->save();

        $fid = $field->id;
        $priceRate = new PriceRate();
        $priceRate->price = $price;
        $priceRate->field_id = $fid;
        $priceRate->name = $name;
        $priceRate->save();

        return redirect()->to('field');
    }

    public function Delete($id){
        $field = Field::find($id);
        $field->delete();
        return redirect()->to('field');
    }
}
