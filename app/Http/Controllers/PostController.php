<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
       return response()->json(
        ["message"=>"Bootcamp con Laravel"]
       );
    }

 


    public function store(Request $request)
    {
        //
    }

   
    public function update(Request $request, Post $post)
    {
        //
    }

  
    public function destroy(Post $post)
    {
        //
    }
}
