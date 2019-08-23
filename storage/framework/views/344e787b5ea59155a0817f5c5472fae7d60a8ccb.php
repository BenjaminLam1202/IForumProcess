

  <div id="myModal<?php echo e($post->id); ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="contains">



        <div class="col-4">
            <img src="/storage/<?php echo e($post -> image); ?>" class="w-100" alt="">
        </div>
        <div class="col-8">
            <h3><strong><?php echo e($post-> user-> name); ?></strong></h3>
            <h3><strong><?php echo e($post-> title); ?></strong></h3>
            <p><?php echo e($post-> des); ?></p>
        </div>
      </div>
    </div>

  </div>
</div>
