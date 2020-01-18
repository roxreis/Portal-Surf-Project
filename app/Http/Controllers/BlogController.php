<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
  public function viewBlog(Request $request){
      return view('blog');
    }
}
