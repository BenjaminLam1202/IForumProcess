<div class="container">

<form action="/p" enctype="multipart/form-data" method="post">
    <?php echo csrf_field(); ?>

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input id="title" type="title" class="form-control<?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>" name="title" value="<?php echo e(old('title')); ?>" required>
          <label data-error="wrong" data-success="right" for="defaultForm-email"><?php echo e(__('Title')); ?></label>
          <?php if($errors->has('title')): ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($errors->first('title')); ?></strong>
              </span>
          <?php endif; ?>
        </div>



        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input id="des" type="des" class="form-control<?php echo e($errors->has('des') ? ' is-invalid' : ''); ?>" name="des" value="<?php echo e(old('des')); ?>" required>
          <label data-error="wrong" data-success="right" for="defaultForm-email"><?php echo e(__('Description')); ?></label>
          <?php if($errors->has('des')): ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($errors->first('des')); ?></strong>
              </span>
          <?php endif; ?>
        </div>

        <div class="md-form mb-4">
          <label for="image" class="col-md-4 col-form-label"><?php echo e(__('image')); ?></label>
          <input type="file" class="form-control-file" id="image" name="image">

          <?php if($errors->has('image')): ?>

                  <strong><?php echo e($errors->first('image')); ?></strong>

          <?php endif; ?>
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
