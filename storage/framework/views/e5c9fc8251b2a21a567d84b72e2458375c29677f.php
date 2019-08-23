<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
        <img src="/storage/<?php echo e($user -> profile -> image); ?>" class="rounded-circle w-100" alt="">

    </div>
    <div class="col-5 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
          <h1><?php echo e($user->name); ?></h1>


        </div>



        <?php if(auth()->guard()->guest()): ?>
        <div class="">

        </div>
        <?php else: ?>
        <div class="">

        </div>
        <?php endif; ?>

        <?php if(auth()->guard()->check()): ?>
        <?php if(Auth::user()->id ==$user->id): ?>
        <div class="">
          <a href="/profile/<?php echo e($user->id); ?>/edit" data-toggle="modal" data-target="#modalEdit">edit </a>
        </div>
        <?php endif; ?>
        <?php else: ?>
        <div class="">

        </div>
        <?php endif; ?>


        <div class="d-flex">
          <div class="pr-4"><strong><?php echo e($user->posts->count()); ?></strong>post</div>
        </div>
        <div class="font-weight-bold"><?php echo e($user->profile->title ?? 'N/A'); ?></div>
        <div><?php echo e($user->profile->des ??'N/A'); ?></div>
        <div><a href="#"><?php echo e($user->profile->url ?? 'N/A'); ?></a></div>
        <?php if(auth()->guard()->guest()): ?>
        <div class="">

        </div>
        <?php else: ?>
        <div class="">

        </div>
        <?php endif; ?>

        <?php if(auth()->guard()->check()): ?>
        <?php if(Auth::user()->id ==$user->id): ?>
        <div class="pt-5">
          <button href="/p/create" type="button" class="btn btn-primary" name="button" data-toggle="modal" data-target="#modalLoginForm"> New Post </button>
        </div>
        <?php endif; ?>
        <?php else: ?>
        <div class="">

        </div>
        <?php endif; ?>
      </div>
      <div class="col-3 p-5">
          meo

      </div>
      <div class="row pt-5">
        <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row col-4 pd-4 pr-5 pt-5">
          <a href="/p/<?php echo e($post->id); ?>" data-toggle="modal" data-target="#myModal<?php echo e($post->id); ?>">
           <img  src="/storage/<?php echo e($post->image); ?>" class="w-100" alt="">
        </a>


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
         </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
  </div>
</div>











<?php $__env->stopSection(); ?>

<?php echo $__env->make('profiles.edit', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('posts.create', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>