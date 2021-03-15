<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Index;

class PostsController extends Controller
{
    public function index()
    {
        return view('pages.articles');
    }

    public function show()
    {
        return view('pages.post');
    }

    public function content()
    {
        $index = new Index;
        $contents = $index->with(['posts' => function($query){
            $query->get();
        }])->get()->first();

        return $contents;
    }

    public function postContent(Request $request)
    {
        $id = $request->route('id');
        $contents = Posts::where('id', $id)->get()->first();
        return $contents;
    }

    
}
