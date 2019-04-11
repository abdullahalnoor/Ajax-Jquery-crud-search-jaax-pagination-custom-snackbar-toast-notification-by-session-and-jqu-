<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Text;
use Session;

class TextController extends Controller
{
    public function index(){
        return view('admin.text.index');
    }
    public function create(){
        return view('admin.text.create');
    }
    public function store(Request $request){
        $text = new Text();

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = uniqid().$image->getClientOriginalName();
            $path = "admin/img";
            $image->move($path,$imageName);
            $url = $path.$imageName;



        }

        $text->name = $request->name;
        $text->image = $url;
        $text->save();
        Session::flash('info','Info save');
        return back();
    }
}
