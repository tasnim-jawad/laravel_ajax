<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        // $posts = Post::latest()->limit(10)->get();
        return view('welcome');
    }

    public function show(){
        $posts = Post::latest()->limit(10)->get();
        return view('post' , compact("posts"));
    }

    public function single_post($id){
        $post = Post::findOrFail($id);
        return view('single_post' , compact("post"));
    }
    public function create_post(){
        return view("create_post");
    }

    public function store_post(){
        $data = Post::create(request()->all());
        // dd($data);
        return $data;
        // try {
        //     $data = Post::create(request()->all());
        //     return $data;
        // } catch (\Exception $e) {
        //     return response()->json(['error' => 'Error creating post', 'message' => $e->getMessage()], 500);
        // }
        // $data = Post::create([
        //     'title'=> $request->title,
        //     'body'=> $request->body
        // ]);
        // return $data;


    }

    public function edit_post($id){
        $post = Post::findOrFail($id);
        return view('edit_post',compact('post'));
    }

    public function update_post($id){
        $data = Post::findOrFail($id);
        $data->fill(request()->all());
        $data->save();
        return $data;
    }

    public function delete_post($id){
        $data = Post::findOrFail($id);
        $data->delete();
        return response()->json("deleted data");
    }
}
