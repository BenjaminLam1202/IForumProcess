<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Post;
use App\User;

class PostsController extends Controller
{
    public function _construct()
    {
      $this->middleware('auth');
    }

    public function create()
    {
    return view('posts.create');
    }
    public function store(){
      $data = request()->validate([
        'title' => 'required',
        'des' => 'required',
        'image' => ['required','image'],
      ]);


       $imagePath = request('image')->store('uploads','public');
      $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
      $image -> save();

      auth()->user()->posts()->create([
        'title' => $data['title'],
        'des' => $data['des'],
        'image' => $imagePath,

      ]);

      return redirect('/profile/' . auth()->user()->id);

    }
    public function show(\App\Post $post)
    {
      return view('posts.show',[
        'post' => $post,
      ]);
    }

    

}
