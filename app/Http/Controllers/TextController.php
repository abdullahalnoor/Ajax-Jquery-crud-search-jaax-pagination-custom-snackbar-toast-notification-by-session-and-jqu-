<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Text;
use Session;

class TextController extends Controller
{
    public function index(){
        $text = Text::all();
        return view('admin.text.index',compact('text'));
    }
    public function create(){
        return view('admin.text.create');
    }
    public function store(Request $request){
        $text = new Text();

        if($request->hasFile('fav_icon')){
            @unlink(asset('frontend/images/icon.png'));
            $image = $request->file('fav_icon');
            $imageName = 'icon'.'.'.'png';
            $path = 'frontend/images/';
            $image->move($path,$imageName);
           
        }

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = uniqid().$image->getClientOriginalName();
            $path = "admin/img/";
            $image->move($path,$imageName);
            $url = $path.$imageName;

            $text->image = $url;

        }

        $text->name = $request->name;
        
        $text->save();
        Session::flash('info','Info save');
        return back();
    }
}
