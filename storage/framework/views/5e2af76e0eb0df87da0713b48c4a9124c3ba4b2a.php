<?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
  <th><img class="img-thumbnail" src="/storage/properties/<?php echo e($elem->slug); ?>/<?php echo e(get_images($elem->images)); ?>" /></th>
  <th scope="row"><?php echo e($elem->title); ?></th>
  <td><?php echo e(get_property_type($elem->type)); ?> </td>
  <td><?php echo e($elem->judet); ?> <?php echo e($elem->localitate); ?> <?php echo e($elem->strada); ?> <?php echo e($elem->apartament); ?> <?php echo e($elem->nr_strada); ?></td>
  <td>
  <?php if(Auth::user()->id == $elem->user_id || Auth::user()->isAdministrator()): ?> 
    <a href="<?php echo e(route('show_one_property', $id=$elem->slug)); ?>" class="btn btn-outline-warning"><i>show</i></a>
    <a href="<?php echo e(route('edit_property', $id=$elem->id)); ?>" class="btn btn-outline-primary"><i>edit</i></a>
    <form action="<?php echo e(route('delete_property', $id=$elem->id)); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <?php echo method_field('delete'); ?>
      <button type="submit" class="btn btn-outline-danger">Delete</button>
    </form>
    <?php endif; ?>
  </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\laragon\www\imobix\resources\views/admin/properties/show-tabel.blade.php ENDPATH**/ ?>