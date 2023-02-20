<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Category;


class BlogController extends Controller
{
public function create()
{
    $categories=Category::all();
    return view('back-end.blog.create',compact('categories'));//relation change
}
public function store(Request $request)
    {
        
         $request->validate(
            ['title'=>'required',
            'description'=>'required',
            'image'=>'required'
        ]);
        
        $data=new Blog();
        $data->title=$request->title;
        $data->description=$request->description;
        $data->category_id=$request->category_id;//relation change
        if($request->hasFile(key:'image'))
        {
            $file=$request->image;
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads',$filename);
            $data->image=$filename;
        }

        $data->save();
return redirect()->route('blog.table')->with('message',"data added successfully");
    }
    public function table()
    {
        $data = Blog::with('category')->get();//relation change
        //$data=Blog::all();tableke vakt

        return view('back-end.blog.table',compact('data'));
       }
       public function edit($id)
       {
       
        $data=Blog::find($id);
        
    // dd($data);
        $cust=Category::all();//relation changedouble
        return view('back-end.blog.edit',compact('data','cust'));
       }
       public function update(Request $request,$id)
   {
    $data=Blog::find($id);
    $data->title=$request->title;
    $data->description=$request->description;
$data->save();
     //dd($data);
    return redirect()->route('blog.table')->with('message',"data updated successfully!");
   }
   public function delete($id)
   {
    $data=Blog::find($id);
    $data->delete();
    return redirect()->route('blog.table')->with('message',"data deleted successfully!");


   }
}
