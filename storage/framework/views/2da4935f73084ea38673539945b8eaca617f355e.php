
<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="wrapper-addauga">
    <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Adauga user nou</a>
  </div>
  <div class="row">
    <div class="cold-md-12">
      <?php if($message = Session::get('success')): ?>
      <div class="alert-success">
        <p><?php echo e($message); ?>

        <p>
      </div>
      <?php endif; ?>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Nume complet</th>
            <th>Prenume</th>
            <th>Nume</th>
            <th>Judet</th>
            <th>Oras</th>
            <th>Adresa</th>
            <th>Telefon</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Actiuni</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e(++$key); ?></td>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->first_name); ?></td>
            <td><?php echo e($user->last_name); ?></td>
            <td><?php echo e($user->county); ?></td>
            <td><?php echo e($user->city); ?></td>
            <td><?php echo e($user->address); ?></td>
            <td><?php echo e($user->phone); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->role->display_name); ?></td>
            <td>
              
              
              
              
              <a data-user_id="<?php echo e($user->id); ?>" data-first_name="<?php echo e($user->first_name); ?>" data-last_name="<?php echo e($user->last_name); ?>" data-county="<?php echo e($user->county); ?>" data-city="<?php echo e($user->city); ?>" data-address="<?php echo e($user->address); ?>" data-phone="<?php echo e($user->phone); ?>" data-email="<?php echo e($user->email); ?>" data-role="<?php echo e($user->role_id); ?>" data-toggle="modal" data-target="#exampleModal-edit" type="button" class="btn btn-info btn-sm">Editare</a>
              
              
              <a data-user_id="<?php echo e($user->id); ?>" data-toggle="modal" data-target="#exampleModal-delete" class="btn btn-danger btn-sm">Sterge</a>
              
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      <?php if(Auth::user()->isAdministrator()): ?>
      

      <div class="modal fade right" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Adaugare tip useri</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo e(route('userStore')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Nume</span>
                  </div>
                  <input type="text" class="form-control" name="name" placeholder="enter name">
                  <input type="text" class="form-control" name="first_name" placeholder="enter firstname">
                  <input type="text" class="form-control" name="last_name" placeholder="enter lastname">
                  <select class="chosen-select-no-single" name="role" id="role">
                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if( $role->id == $user->role_id): ?>
                    <option selected="selected" value="<?php echo e($role->id); ?>"><?php echo e($role->display_name); ?></option>
                    <?php else: ?>
                    <option value="<?php echo e($role->id); ?>"><?php echo e($role->display_name); ?></option>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
                <br>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Locatie</span>
                  </div>
                  <input type="text" class="form-control" name="county" placeholder="Introduceti judet">
                  <input type="text" class="form-control" name="city" placeholder="Introduceti oras">
                  <input type="text" class="form-control" name="address" placeholder="Introduceti adresa">
                </div>
                <br>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Utile</span>
                  </div>
                  <input type="text" class="form-control" name="phone" placeholder="Introduceti telefon">
                  <input type="text" class="form-control" name="email" placeholder="Introduceti email">
                  <input type="password" class="form-control" name="password" placeholder="Introduceti parola">
                </div>
                <br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Inchide</button>
              <button type="submit" class="btn btn-success">Adauga user</button>
            </div>
            </form>
          </div>
        </div>
      </div>

      

      <div class="modal fade left" id="exampleModal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-lg modal-right modal-info" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Seteaza rol</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo e(route('userUpdate', 'user_id')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Nume</span>
                  </div>
                  <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Introduceti prenume">
                  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Introduceti nume">
                  <select class="chosen-select-no-single" name="role" id="role">
                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if( $role->id == $user->role_id): ?>
                    <option selected="selected" value="<?php echo e($role->id); ?>"><?php echo e($role->display_name); ?></option>
                    <?php else: ?>
                    <option value="<?php echo e($role->id); ?>"><?php echo e($role->display_name); ?></option>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
                <input type="hidden" id="user_id" name="user_id">
                <br>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Locatie</span>
                  </div>
                  <input type="text" class="form-control" name="county" id="county" placeholder="Introduceti judet">
                  <input type="text" class="form-control" name="city" id="city" placeholder="Introduceti oras">
                  <input type="text" class="form-control" name="address" id="address" placeholder="Introduceti adresa">
                </div>
                <br>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Date contact</span>
                  </div>
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Introduceti telefon">
                  <input type="text" class="form-control" name="email" id="email" placeholder="Introduceti email">
                </div>
                <br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Inchide</button>
              <button type="submit" class="btn btn-info">Modifica user</button>
            </div>
            </form>
          </div>
        </div>
      </div>

      

      <div class="modal fade top" id="exampleModal-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-lg modal-right modal-danger" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body modal-danger">
              <form action="<?php echo e(route('userDestroy', 'user_id')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <input type="hidden" id="user_id" name="user_id">
                <p class="text-center" width="50px"> Are you sure you want to delete this user?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">No</button>
              <button type="submit" class="btn btn-danger">Delete user</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <?php endif; ?>


    </div>
  </div>
</div>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<script>
  $('#exampleModal-edit').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    var first_name = button.data('first_name');
    var last_name = button.data('last_name');
    var county = button.data('county');
    var city = button.data('city');
    var address = button.data('address');
    var phone = button.data('phone');
    var email = button.data('email');
    var role = button.data('role');
    var user_id = button.data('user_id');

    var modal = $(this);

    modal.find('.modal-title').text('EDIT USER INFO');
    modal.find('.modal-body #first_name').val(first_name);
    modal.find('.modal-body #last_name').val(last_name);
    modal.find('.modal-body #county').val(county);
    modal.find('.modal-body #city').val(city);
    modal.find('.modal-body #address').val(address);
    modal.find('.modal-body #phone').val(phone);
    modal.find('.modal-body #email').val(email);
    modal.find('.modal-body #role').val(role);
    modal.find('.modal-body #user_id').val(user_id);

  });

  $('#exampleModal-delete').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var user_id = button.data('user_id')

    var modal = $(this)

    modal.find('.modal-title').text('DELETE USER INFO');
    modal.find('.modal-body #user_id').val(user_id);
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\imobix\resources\views/admin/users/index.blade.php ENDPATH**/ ?>