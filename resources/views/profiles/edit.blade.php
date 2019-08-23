
<div class="container">
  <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
    @csrf
        @method('PATCH')

  <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header justify-content-left">
          <h4 class="modal-title w-100 font-weight-bold">New Post</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">


          <div class="">
            {{$user -> id}}
          </div>

          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input id="title" type="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title')  ?? $user->profile->title ?? 'N/A'   }}" required>
            <label data-error="wrong" data-success="right" for="defaultForm-email">{{ __('Title') }}</label>
          </div>



          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input id="des" type="des" class="form-control{{ $errors->has('des') ? ' is-invalid' : '' }}" name="des" value="{{ old('des')  ??  $user -> profile->des ?? 'N/A'  }}" required>
            <label data-error="wrong" data-success="right" for="defaultForm-email">{{ __('Description')}}</label>
          </div>

          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input id="url" type="url" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ old('url') ??  $user -> profile->url ?? 'N/A'   }}" required>
            <label data-error="wrong" data-success="right" for="defaultForm-email">{{ __('URL')}}</label>
          </div>

          <div class="md-form mb-4">
            <label for="image" class="col-md-4 col-form-label">{{ __('image') }}</label>
            <input type="file" class="form-control-file" id="image" name="image">

            @if ($errors->has('image'))

                    <strong>{{ $errors->first('image') }}</strong>

            @endif
          </div>

        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-default">Post</button>
        </div>
      </div>
    </div>
  </div>
  </div>
  </form>
</div>
