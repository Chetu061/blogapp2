<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Blog;


use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function admin()
    {
        return view('admin');
    }
 public function front()
 {
    $data=Category::all();
    $blog=Blog::all();
    $latest=Blog::latest()->first();
    //$des=Blog::all();
return view('welcome',compact('data','blog','latest'));
 }
 public function master()
 {
    return view('layouts.master');
 }
   public function about()
    {   
        return view('about');
    }
    public function home()
    {
        return view('home');
    }
    public function contact()
    {
        return view('contact');
    }
    
    public function view($id)
    {
        $category=Category::all();
        $blog=Blog::where('category_id',$id)->get();
    return view('dashboard',compact('category','blog'));
      //no work return dashboardview('dashboard',compact('data','blog','latest_blog'));
    }
}
