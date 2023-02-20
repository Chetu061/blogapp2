<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function create(){

       return view('back-end.category.create');

    }
    public function store(Request $request)
        {$request->validate(
            ['name'=>'required'
         ]);
        
        $data=new Category();
        $data->name=$request->name;
        // dd($data);
        $data->save();
        return redirect()->route('category.table')->with('message',"data added successfully");
    }
    public function table()
    {//$data=Category::paginate(3);//with pagination
        $data=Category::all();//without pagination when category_id apply
        return view('back-end.category.table',compact('data'));
       }
   public function edit($id)
   {
    $data=Category::find($id);
    //dd($data);
    return view('back-end.category.edit',compact('data'));
   }
   
   public function update(Request $request,$id)
   {
    $data=Category::find($id);
    $data->name=$request->name;
    $data->save();
    return redirect()->route('category.table')->with('message',"data updated successfully!");
   }
   public function delete($id)
   {
    $data=Category::find($id);
    $data->delete();
    return redirect()->route('category.table')->with('message',"data deleted successfully!");

   }
}
