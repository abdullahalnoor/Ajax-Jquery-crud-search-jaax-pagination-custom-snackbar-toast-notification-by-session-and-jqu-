<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;

class CategoryController extends Controller
{
    public function index(Request $request,$search=null){


        if(empty($search)){
             $category = Category::latest('created_at')->paginate(5);
        }else{
            $category = Category::where('name','like','%'.$search.'%')->paginate(5);
        }


        // $category = Category::latest('created_at')->paginate(5);
        if($request->ajax()){
             return view('admin.category.load',compact('category'))->render();
        }

        return view('admin.category.index',compact('category'));



        // $category = Category::latest('created_at')->paginate(5);
        // return view('admin.category.index',[
        //     'category'=>$category,
        // ]);
    }
    public function create(){
        return view('admin.category.create');
    }
    public function save(Request $request){
        
        // return $request->all();

        // $this->validate($request,[
        //     'name' => 'required',
        //     'status' => 'required|integer',
        // ]);
        $this->validate($request,$this->rules());
        // $this->validate($request,$this->rules(),$this->messages());

        $category = new Category();
        $category->name = $request->name;
        $category->status = $request->status;
        $category->save();
        Session::flash('success', 'true');
        return $category;
    }

    public function edit($id){
        
         try{
           $category = Category::find($id);
            return view('admin.category.edit',compact('category'));
         }catch(\Exception $e){
            return response(['error'=>'Proble Deleting Product'],404);
        }

       
    }

    public function update(Request $request){
         $this->validate($request,[
            'name' => 'required|min:2',
            'status' => 'required|integer',
        ]);
        $category =  Category::find($request->id);
         $category->name = $request->name;
        $category->status = $request->status;
        // $category->save();
        // return $category;


         try{
            $category->save();
            return response([],204);
         }catch(\Exception $e){
            return response(['error'=>'Proble Deleting Product'],404);
        }


    }


    public function delete(Request $request){


         try{
            $category = Category::find($request->id);
            $category->delete();
            return response([],204);
         }catch(\Exception $e){
            return response(['error'=>'Proble Deleting Product'],404);
        }


    //    $category = Category::find($request->id);
    //    $category->delete(); 
    //    return back();
    }


    protected function rules(){
        return [
             'name' => 'required|min:2',
            'status' => 'required',
        ];
    }


    public function messages()
{
    return [
        // 'name.required' => 'A title is required',
        'status.required' => 'A title is required',
        
    ];
}

}
