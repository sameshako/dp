
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Post</h2>
        </div>
    </div>
</div>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <strong>Error!</strong>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<form action="<?php echo e(route('blogs.update', $blog->id)); ?>" method="POST" enctype="multipart/form-data" name="forma">
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>
    <div class="row">
        <input type="hidden" name="user" value="<?php echo e(AUTH::id()); ?>">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>title:</strong>
                <input type="text" name="title" class="form-control" placeholder="title" value="<?php echo e(old('title') ?? $blog->title ?? ''); ?>">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea name="body" id="body" cols="30" rows="10" class="form-control"><?php echo e(old('body') ?? $blog->body ?? ''); ?></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categorie:</strong>
                <select name="propertie_types" id="propertie_types" class="form-control">
                    <?php $__currentLoopData = $property_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($property_type->id == $blog->propertie_types): ?>
                    <option selected="selected" value="<?php echo e($property_type->id); ?>"><?php echo e($property_type->title); ?></option>
                    <?php else: ?>
                    <option value="<?php echo e($property_type->id); ?>"><?php echo e($property_type->title); ?></option>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" id="image" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <select name="status" id="status" class="form-control">
                    <?php if($blog->status == 1): ?>
                    <option value="<?php echo e($blog->status); ?>" selected>Activ</option>
                    <option value="0">Inactiv</option>
                    <?php else: ?>
                    <option value="<?php echo e($blog->status); ?>" selected>Inactiv</option>
                    <option value="1">Activ</option>
                    <?php endif; ?>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
<script>
    tinymce.init({
        selector: 'textarea'
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\imobix\resources\views/admin/blogs/edit.blade.php ENDPATH**/ ?>