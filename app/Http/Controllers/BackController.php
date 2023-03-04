<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
 //practice purpose
class BackController extends Controller
{
public function back()
{
    $cate=Category::all();
    $blog=Blog::all();
    $latest=Blog::latest()->first();
    return view('back',compact('cate','blog','latest'));
}

}
