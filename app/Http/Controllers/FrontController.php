<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Blog;


use Illuminate\Http\Request;

class FrontController extends Controller
{
 public function front()
 {
    $category=Category::all();
    $blog=Blog::all();
    $latest=Blog::latest()->first();
    //$des=Blog::all();
return view('welcome',compact('category','blog','latest'));
 }
}
