
<?php $__env->startSection('content'); ?>

    <div class="blog-1">
        <div class="blog-photo">
            <img src="<?php echo e(asset('storage/'. $blog->image)); ?>" alt="blog" class="img-fluid" style="height: 500px; width: 200px">
            <div class="user">
                <div class="avatar">
                    <img src="http://placehold.it/30x30" alt="avatar" class="img-fluid rounded-circle">
                </div>
                <div class="name">
                    <h5><?php echo e($blog->blogUser['name']); ?></h5>
                </div>
            </div>
        </div>
        <div class="detail">
            <h2>
                <a href="<?php echo e(route('blogs.show', $blog->id)); ?>"><?php echo e($blog->title); ?></a>
            </h2>
            <p><?php echo $blog->body; ?></p>
            <div class="blog-footer clearfix">
                <div class="float-left">
                    <p class="date"><i class="flaticon-calendar"></i> <?php echo e($blog->created_at->format('d.m.y')); ?></p>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\imobix\resources\views/admin/blogs/show.blade.php ENDPATH**/ ?>