<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
        <img src="https://cdn1.iconfinder.com/data/icons/user-pictures/101/malecostume-512.png" class="rounded-circle w-100" alt="">
    </div>
    <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
          <h1><?php echo e($user->username); ?></h1>
          <a href="#">new post</a>
        </div>
        <div class="d-flex">
          <div class="pr-4"><strong>153</strong>post</div>
          <div class="pr-4"><strong>23k</strong>followers</div>
          <div class="pr-4"><strong>212</strong>following</div>
        </div>
        <div class="font-weight-bold"><?php echo e($user->profile->title ?? 'N/A'); ?></div>
        <div><?php echo e($user->profile->des ??'N/A'); ?></div>
        <div><a href="#"><?php echo e($user->profile->url ?? 'N/A'); ?></a></div>
      </div>
      <div class="row">
        <div class="col-4"> <img src="https://images.hdqwalls.com/wallpapers/bthumb/small-memory-lp.jpg" class="w-100" alt=""> </div>
        <div class="col-4"> <img src="https://images.hdqwalls.com/wallpapers/bthumb/pixel-sorting-artwork-zh.jpg" class="w-100" alt=""> </div>
        <div class="col-4"> <img src="https://images.hdqwalls.com/wallpapers/bthumb/8-bit-pixel-art-city-2o.jpg" class="w-100" alt=""> </div>

      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>