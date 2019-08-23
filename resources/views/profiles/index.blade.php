@extends('layouts.app')

@extends('posts.create')
@extends('profiles.edit')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
        <img src="/storage/{{$user -> profile -> image}}" class="rounded-circle w-100" alt="">

    </div>
    <div class="col-5 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
          <h1>{{$user->name}}</h1>


        </div>



        @guest
        <div class="">

        </div>
        @else
        <div class="">

        </div>
        @endguest

        @auth
        @if(Auth::user()->id ==$user->id)
        <div class="">
          <a href="/profile/{{$user->id}}/edit" data-toggle="modal" data-target="#modalEdit">edit </a>
        </div>
        @endif
        @else
        <div class="">

        </div>
        @endauth


        <div class="d-flex">
          <div class="pr-4"><strong>{{$user->posts->count()}}</strong>post</div>
        </div>
        <div class="font-weight-bold">{{$user->profile->title ?? 'N/A'}}</div>
        <div>{{$user->profile->des ??'N/A'}}</div>
        <div><a href="#">{{$user->profile->url ?? 'N/A'}}</a></div>
        @guest
        <div class="">

        </div>
        @else
        <div class="">

        </div>
        @endguest

        @auth
        @if(Auth::user()->id ==$user->id)
        <div class="pt-5">
          <button href="/p/create" type="button" class="btn btn-primary" name="button" data-toggle="modal" data-target="#modalLoginForm"> New Post </button>
        </div>
        @endif
        @else
        <div class="">

        </div>
        @endauth
      </div>
      <div class="col-3 p-5">
          meo

      </div>
      <div class="row pt-5">
        @foreach ($user->posts as $post)
        <div class="row col-4 pd-4 pr-5 pt-5">
          <a href="/p/{{$post->id}}" data-toggle="modal" data-target="#myModal{{$post->id}}">
           <img  src="/storage/{{ $post->image}}" class="w-100" alt="">
        </a>


        <div id="myModal{{$post->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="contains">



              <div class="col-4">
                  <img src="/storage/{{$post -> image}}" class="w-100" alt="">
              </div>
              <div class="col-8">
                  <h3><strong>{{$post-> user-> name}}</strong></h3>
                  <h3><strong>{{$post-> title}}</strong></h3>
                  <p>{{$post-> des}}</p>
              </div>
            </div>
          </div>

        </div>
      </div>
         </div>
        @endforeach
      </div>
  </div>
</div>











@endsection
