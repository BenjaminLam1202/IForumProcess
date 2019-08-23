<?php

namespace App\Http\Controllers;
use App\User;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
  public function index($user)
  {
    $user = User::findOrFail($user);
      return view('profiles.index',[
        'user' => $user,
      ]);
  }

  public function edit(\App\User $user)
  {
    $this-> authorize('update', $user->profile);
    return view('profiles.edit', compact('user'));
  }
  public function update(\App\User $user)
  {
    $data = request()->validate([
      'title' =>'',
      'des' => '',
      'url' => 'url',
      'image' => '',
    ]);
    if(request('image')){
      $imagePath = request('image')->store('profile', 'public');
      $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
      $image -> save();
      }


    auth() -> user() -> profile -> update(array_merge(
      $data,
      ['image' => $imagePath]

    ));



    return redirect("/profile/{$user ->id}");
  }


}
