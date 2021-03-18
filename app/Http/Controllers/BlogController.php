<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs=Blog::all();
        return view('blog.index',compact('blogs'));
    }
    public function show($id){
        $blog=Blog::find($id);
        //     // dd($blog);
        return view('blog.show',compact('blog'));
    }
}
