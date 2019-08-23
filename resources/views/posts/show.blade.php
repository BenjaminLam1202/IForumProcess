

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
