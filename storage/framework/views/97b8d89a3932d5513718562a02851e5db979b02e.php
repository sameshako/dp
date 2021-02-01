
<?php $__env->startSection('content'); ?>
<div class="map-content content-area container-fluid">
    <div class="row">
        <div class="col-lg-7 properties-list-search">
            <div class="title-area">
                <h2 class="pull-left">Cautare</h2>
                <a class="show-more-options pull-right" data-toggle="collapse" data-target="#options-content">
                    <i class="fa fa-plus-circle"></i> Mai multe optiuni
                </a>
                <div class="clearfix"></div>
            </div>
            <div class="properties-map-search">
                <div class="properties-map-search-content search-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <select class="selectpicker search-fields" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Metri patrati</option>
                                    <option>20-40</option>
                                    <option>40-60</option>
                                    <option>60-80</option>
                                    <option>80-100</option>
                                    <option>100+</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <select class="selectpicker search-fields" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Tip tranzactie</option>
                                    <option>Vaznare</option>
                                    <option>Inchiriere</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <select class="selectpicker search-fields" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Locatie</option>
                                    <option>Targu Jiu </option>
                                    <option>Turcinesti</option>
                                    <option>Galicea</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <select class="selectpicker search-fields" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Tip imobil</option>
                                    <option>Residential</option>
                                    <option>Commercial</option>
                                    <option>Land</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="range-slider">
                                <label>Dimensiune</label>
                                <div data-min="0" data-max="10000" data-unit="Sq ft" data-min-name="min_area" data-max-name="max_area" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="range-slider">
                                <label>Pret</label>
                                <div data-min="0" data-max="150000" data-unit="EUR" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div id="options-content" class="collapse">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" data-live-search="true" data-live-search-placeholder="Valoare cautare">
                                        <option>Camere</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" data-live-search="true" data-live-search-placeholder="Valoare cautare">
                                        <option>Tip Compartimentare</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" data-live-search="true" data-live-search-placeholder="Valoare cautare">
                                        <option>Numar bai</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" data-live-search="true" data-live-search-placeholder="Valoare cautare">
                                        <option>Etaj</option>
                                        <option>Toate</option>
                                        <option>Intermediar</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- <label class="margin-t-10 map-featured">Features</label>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">
                                        Free Parking
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox2" type="checkbox">
                                    <label for="checkbox2">
                                        Air Condition
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">
                                        Places to seat
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4">
                                        Swimming Pool
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox5" type="checkbox">
                                    <label for="checkbox5">
                                        Laundry Room
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox6" type="checkbox">
                                    <label for="checkbox6">
                                        Window Covering
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox7" type="checkbox">
                                    <label for="checkbox7">
                                        Central Heating
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox8" type="checkbox">
                                    <label for="checkbox8">
                                        Alarm
                                    </label>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="map-content-separater hidden-sm hidden-xs"></div>
            <div class="clearfix"></div>

            <div class="title-area hidden-sm hidden-xs">
                <h2 class="pull-left">Proprietati</h2>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-sm-4">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="<?php echo e(route('show_one_property', $slug=$property->slug )); ?>" class="property-img">
                                <div class="listing-badges">
                                </div>
                                <?php if($property->transaction_type == 1): ?>
                                <div class="tag-for">Vanzare</div>
                                <?php else: ?>
                                <div class="tag-for">Inchiriere</div>
                                <?php endif; ?>
                                
                                
                                
                                <div class="plan-price"><?php echo e($property->pret); ?> €</div>
                                <img src="/storage/properties/<?php echo e($property->slug); ?>/<?php echo e(get_images($property->images)); ?>" alt="Card image cap" class="img-fluid">
                            </a>
                            <div class="property-overlay">
                                <a href="/storage/properties/<?php echo e($property->slug); ?>/<?php echo e(get_images($property->images)); ?>" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Test Title">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <!-- <div class="property-magnify-gallery">
                                        <a href="assets/img/property/img-1.jpg" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="assets/img/property/img-6.jpg" class="hidden"></a>
                                        <a href="assets/img/property/img-2.jpg" class="hidden"></a>
                                    </div> -->
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="<?php echo e(route('show_one_property', $slug=$property->slug )); ?>"><?php echo e($property->title); ?></a>
                            </h1>
                            <div class="location">
                                <a href="<?php echo e(route('show_one_property', $slug=$property->slug )); ?>">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>

                            <ul class="facilities-list clearfix">

                                <?php echo get_atribute($property->id,$property->type); ?>

                            </ul>
                        </div>
                        <div class="footer">
                            <p>
                                <i class="fa fa-user"></i>
                                <?php echo e($property->user->name); ?></p>
                            <span>
                                <!-- <i class="fa fa-calendar-o"></i> 5 days ago </span> -->
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="row map-fixed">
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>

<script>
    var osmUrl = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
        osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        osm = L.tileLayer(osmUrl, {
            maxZoom: 18,
            attribution: osmAttrib
        });

    var map = L.map('map').setView(["<?php echo e($first_property->lat); ?>", "<?php echo e($first_property->long); ?>"], 12).addLayer(osm);

    "<?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>"
    var marker = L.marker(
        ["<?php echo e($property->lat); ?>", "<?php echo e($property->long); ?>"]
    ).addTo(map);
    marker.bindPopup("<div><a href= '<?php echo e(route('show_one_property', $slug=$property->slug )); ?>'><img src='/storage/properties/<?php echo e($property->slug); ?>/<?php echo e(get_images($property->images)); ?>' /> <h4><?php echo e($property->title); ?></h4></a><p><?php echo e($property->pret); ?> Euro</p> </div>");
    "<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>"

    $('body').addClass('list-page');
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\imobix\resources\views/properties/search-property.blade.php ENDPATH**/ ?>