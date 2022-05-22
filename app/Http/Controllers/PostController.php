<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $result = Post::all();
        return view('index', ["posts" => $result]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request){
        $data = [
            "title" => $request->title,
            "body" => $request->body
        ];

        $create = Post::create($data);

        if($create){
            return redirect('/');
        }
    }

    public function edit() {
        return view('edit');
    }

    public function show($id) {
        $result = Post::find($id);

        return view('detail', ['post' => $result]);
    }

    public function destroy($id){
        Post::destroy($id);
        return redirect('/');
    }
}
