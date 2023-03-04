<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class DetailController extends Controller
{
   public function detail($id)
    {
        $blogs = Blog::with('category')->find($id);
        $data=Category::paginate(3);
        return view('detail', compact('blogs','data'));
    }
}
