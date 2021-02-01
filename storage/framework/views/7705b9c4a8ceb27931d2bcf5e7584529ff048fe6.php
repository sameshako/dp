
<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
    <h1 class="my-4">Blog</h1>
    <a href="<?php echo e(route('blogs.create')); ?>" class="btn btn-info">Create Post</a>
    <a href="<?php echo e(route('blogCategoryCreate')); ?>" class="btn btn-info">Create Post Category</a>

    <table class="table">
        <thead>
            <tr>
                <td>Titlu</td>
                <td>Categorie</td>
                <td>Status</td>
                <td>Actiune</td>
            </tr>

        </thead>
        <tbody>
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($blog->title); ?></td>
                <td><?php echo e($blog->blogType['title']); ?></td>
                <td><?php echo e($blog->status); ?></td>
                <td>
                    <a class="btn btn-warning" href="<?php echo e(route('blogs.show', $blog->id)); ?>">Show</a>
                    <a class="btn btn-primary" href="<?php echo e(route('blogs.edit', $blog->id)); ?>">Edit</a>
                    <form action="<?php echo e(route('blogs.destroy', $blog->id)); ?>" method="POST">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>

                    <input type="submit" class="btn btn-danger" value="Delete" onclick="return confirm('Are you sure?')">
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo $blogs->links(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\imobix\resources\views/admin/blogs/index.blade.php ENDPATH**/ ?>