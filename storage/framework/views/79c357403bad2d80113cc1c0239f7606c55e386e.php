<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="wp-rem-property-content main-search fancy">
        <div class="tab-content">
            <!-- <form id="my_form" method="post" action="<?php echo e(URL::to('/properties')); ?>"> -->
            <form id="my_form" method="post" action="<?php echo e(route('get_data')); ?>">
                <?php echo csrf_field(); ?>
                <div role="tabpanel" class="tab-pane" id="home">
                    <div class="search-default-fields row">
                        <div id="property_type_cate_fields_4090" class="property-category-fields has-icon col-sm-3 ">
                            <label>
                                <i class="fa fa-sort-down"></i>
                                <select class="chosen-select-no-single" name="location">
                                    <option value="" selected="selected">Alege locatia</option>
                                    <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($location->localitate); ?>"><?php echo e($location->localitate); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </label>
                        </div>
                        <div id="property_type_cate_fields_4090" class="property-category-fields has-icon col-sm-3">
                            <label>
                                <i class="fa fa-sort-down"></i>
                                <select class="chosen-select-no-single" name="tip_tranzactie">
                                    <option value="" selected="selected">Tip tranzactie</option>
                                    <option value="1">De vanzare</option>
                                    <option value="2">De inchiriat</option>
                                </select>
                            </label>
                        </div>
                        <div id="property_type_cate_fields_4090" class="property-category-fields has-icon col-sm-3">
                            <label>
                                <i class="fa fa-sort-down"></i>
                                <select class="chosen-select-no-single" name="estate">
                                    <option value="" selected="selected">Tip imobil</option>
                                    <?php $__currentLoopData = $estates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($estate->key_int); ?>"><?php echo e($estate->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </label>
                        </div>
                        <div class="search-btn col-sm-3">
                            <div class="input-button-loader">
                                <a class="bgcolor" href="javascript:{}" onclick="document.getElementById('my_form').submit();">Cauta</a>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="outer-error"><?php echo e($error); ?></div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/getbrand/dp.getbrandedwork.ro/resources/views/search/search.blade.php ENDPATH**/ ?>