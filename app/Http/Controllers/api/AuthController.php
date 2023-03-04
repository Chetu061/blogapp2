<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
class AuthController extends Controller
{
    

    public function store(Request $request){
        $data=new Blog();
        $data->title=$request->title;
        $data->description=$request->description;
        $data->category_id=$request->category_id;
        if ($request->hasFile('image')) 
        {
           $file = $request->image;
           $extension = $file->getClientOriginalExtension();
           $filename = time() . '.' . $extension;
           $file->move('uploads', $filename);
           $data->image = $filename;
       }
       $data->save();
       $response = [
        "success" => true,
        "data" => $data,
        "message" => " data Stored Successfully !"
    ];
    return response()->json($response, 201);

    }
    public function table(){
        $data=Blog::all();


    $response = [
        "success" => true,
        "data" => $data,
        "message" => " data fetch  Successfully !"
    ];
        return response()->json($response, 201);
    }


     public function update(Request $request ,$id ){


        $data=Blog::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        if ($request->hasFile('image')) 
        {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $data->image = $filename;
        }
        $data->category_id= $request->category_id;
        $data->save();
        $response = [
            "success" => true,
            "data" => $data,
            "message" => " data update Successfully !"
        ];
            return response()->json($response, 201);
        }



    public function delete($id){
        $data=Blog::find($id);
        $data->delete();
        $response = [
            "success" => true,
            "data" => $data,
            "message" => " data delete  Successfully !"
        ];
            return response()->json($response, 201);
        }

    }

