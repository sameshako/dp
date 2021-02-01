
<?php $__env->startSection('content'); ?>

<div class="properties-details-page container">
    <div id="propertiesDetailsSlider" class="carousel properties-details-sliders properties-banner slide mb-60" style="postition:relative">
        <div class="heading-properties-2">
            <div class="">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="informeson inner clearfix">
                            <h1><?php echo e($property->title); ?><span><?php echo e($property->pret); ?>€</span></h1>
                            <div>
                                <div class="float-left">
                                    <ul class="clearfix">
                                        <!-- <li><i class="flaticon-bed"></i> 3 Camere</li>
                                        <li><i class="flaticon-bath"></i> 2 Bai</li>
                                        <li><i class="flaticon-square-layouting-with-black-square-in-east-area"></i> 200 m2</li>
                                        <li><i class="flaticon-car-repair"></i> Garaj 1</li>
                                        <li><i class="flaticon-balcony-and-door"></i> Balcony 1</li> -->
                                        <?php echo get_atribute($property->id,$property->type); ?>

                                    </ul>
                                </div>
                                <div class="float-right">
                                    <p>Pret/m2</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main slider carousel items -->
        <div class="carousel-inner" style="margin-top: 90px;">
            <div class="active item carousel-item" data-slide-number="0">
                <img src="<?php echo get_first_image($property->images,$property->slug); ?>" class="img-fluid" alt="properties-photo">
            </div>
            <div class="item carousel-item" data-slide-number="1">
                <img src="<?php echo get_images1($property->images,$property->slug); ?>" class="img-fluid" alt="properties-photo">
            </div>
            <div class="item carousel-item" data-slide-number="2">
                <img src="<?php echo get_images2($property->images,$property->slug); ?>" class="img-fluid" alt="properties-photo">
            </div>
            <div class="item carousel-item" data-slide-number="3">
                <img src="<?php echo get_images3($property->images,$property->slug); ?>" class="img-fluid" alt="properties-photo">
            </div>
            <div class="item carousel-item" data-slide-number="4">
                <img src="<?php echo get_images4($property->images,$property->slug); ?>" class="img-fluid" alt="properties-photo">
            </div>
        </div>
        <!-- main slider carousel nav controls -->
        <ul class="carousel-indicators sp-2 smail-properties list-inline nav nav-justified ">
            <li class="list-inline-item active">
                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#propertiesDetailsSlider">
                    <img src="<?php echo get_first_image($property->images,$property->slug); ?>" class="img-fluid" alt="properties-photo-smale">
                </a>
            </li>
            <li class="list-inline-item">
                <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">
                    <img src="<?php echo get_images1($property->images,$property->slug); ?>" class="img-fluid" alt="properties-photo-smale">
                </a>
            </li>
            <li class="list-inline-item">
                <a id="carousel-selector-2" data-slide-to="2" data-target="#propertiesDetailsSlider">
                    <img src="<?php echo get_images2($property->images,$property->slug); ?>" class="img-fluid" alt="properties-photo-smale">
                </a>
            </li>
            <li class="list-inline-item">
                <a id="carousel-selector-4" data-slide-to="3" data-target="#propertiesDetailsSlider">
                    <img src="<?php echo get_images3($property->images,$property->slug); ?>" class="img-fluid" alt="properties-photo-smale">
                </a>
            </li>
            <li class="list-inline-item">
                <a id="carousel-selector-5" data-slide-to="4" data-target="#propertiesDetailsSlider">
                    <img src="<?php echo get_images4($property->images,$property->slug); ?>" class="img-fluid" alt="properties-photo-smale">
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Properties banner start -->
<!-- <div class="properties-banner" style="background:url('<?php echo get_first_image($property->images,$property->slug); ?>');background-size: 100% 100%;height: 70vh;">
    <div class="container">
        <div class="heading-properties-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="informeson inner clearfix">
                            <h1><?php echo e($property->title); ?><span><?php echo e($property->pret); ?></span></h1>
                            <div>
                                <div class="float-left">
                                    <ul class="clearfix">
                                        <li><i class="flaticon-bed"></i> Bed 3</li>
                                        <li><i class="flaticon-bath"></i> Beds 2</li>
                                        <li><i class="flaticon-square-layouting-with-black-square-in-east-area"></i> SQ.FT 3500</li>
                                        <li><i class="flaticon-car-repair"></i> Garage 1</li>
                                        <li><i class="flaticon-balcony-and-door"></i> Balcony 1</li>
                                    </ul>
                                </div>
                                <div class="float-right">
                                    <p>$ 1,200 / sq ft</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Properties banner end -->

<div class="featured-properties content-area-7">
    
</div>
<div class="properties-details-page content-area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 slider">
                <!-- Property description start -->
                <div class="property-description mb-60">
                    <h3 class="heading-3">Descriere proprietate</h3>
                    <div><?php if($property->transaction_type==1): ?>
                        De vanzare
                        <?php else: ?>
                        De inchiriat
                        <?php endif; ?>
                    </div>
                    <div><?php echo e($property->description); ?></div>
                </div>
                <!-- Property details start -->
                <div class="property-details mb-45">
                    <h3 class="heading-3">Detalii proprietate</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo get_all_attributes($property->id); ?>

                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- <ul>
                                <li>
                                    <strong>Property Id:</strong>215
                                </li>
                                <li>
                                    <strong>Price:</strong>$1240/ Month
                                </li>
                                <li>
                                    <strong>Property Type:</strong>House
                                </li>
                                <li>
                                    <strong>Bathrooms:</strong>3
                                </li>
                                <li>
                                    <strong>Bathrooms:</strong>2
                                </li>
                            </ul> -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- <ul>
                                <li>
                                    <strong>Property Lot Size:</strong>800 ft2
                                </li>
                                <li>
                                    <strong>Land area</strong>230 ft2
                                </li>
                                <li>
                                    <strong>Year Built</strong>2018
                                </li>
                                <li>
                                    <strong>Available From</strong>2018
                                </li>
                                <li>
                                    <strong>Garages:</strong>2
                                </li>
                            </ul> -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- <ul>
                                <li>
                                    <strong>Sold:</strong>Yes
                                </li>
                                <li>
                                    <strong>City:</strong>Usa
                                </li>
                                <li>
                                    <strong>Parking:</strong>Yes
                                </li>
                                <li>
                                    <strong>Property Owner:</strong>Sohel Rana
                                </li>
                                <li>
                                    <strong>Zip Code: </strong>2451
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <!-- Amenities box start -->
                <!-- <div class="amenities-box af mb-45">
                    <h3 class="heading-3">Segmentare</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li><span><i class="flaticon-draw-check-mark"></i> 3 Bedrooms</span></li>
                                <li><span><i class="flaticon-draw-check-mark"></i> 2 Bathroom</span></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li><span><i class="flaticon-draw-check-mark"></i> 1 Garage</span></li>
                                <li><span><i class="flaticon-draw-check-mark"></i> 1 Balcony</span></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li><span><i class="flaticon-draw-check-mark"></i> 4800 sq ft</span></li>
                                <li><span><i class="flaticon-draw-check-mark"></i> TV</span></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <!-- Features opions start -->
                <!-- <div class="features-opions af mb-45">
                    <h3 class="heading-3">Facilitati</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Air conditioning
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Wifi
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Swimming Pool
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Double Bed
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Balcony
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Telephone
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Garage
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Parking
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    TV
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Home Theater
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Alarm
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Garage
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Gym
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Electric Range
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Private space
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <!-- Floor plans start -->
                <!-- <div class="floor-plans mb-60">
                    <h3 class="heading-3">Plan etaj</h3>
                    <table>
                        <tbody>
                            <tr>
                                <td><strong>Dimensiune</strong></td>
                                <td><strong>Camere</strong></td>
                                <td><strong>Bai</strong></td>
                            </tr>
                            <tr>
                                <td>1600</td>
                                <td>3</td>
                                <td>2</td>
                            </tr>
                        </tbody>
                    </table>
                    <img src="http://placehold.it/730x370" alt="floor-plans" class="img-fluid">
                </div> -->
                <!-- Property vedio start -->
                <div class="property-video mb-60">
                    <h3 class="heading-3">Videoclip prezentare proprietate</h3>
                    <iframe src="https://www.youtube.com/embed/Wc1eDI6YjP8"></iframe>
                </div>
                <!-- Section Location start -->
                <div class="section-location mb-60">
                    <h3 class="heading-3">Localizare proprietate</h3>
                    <div class="map">
                        <div id="map" class="listing" style="max-height:400px"></div>
                    </div>
                </div>
                <!-- Related properties start -->
                <div class="related-properties hedin-mb-30">
                    <h3 class="heading-3">Proprietati similare</h3>
                    <div class="row">
                        <?php $__currentLoopData = $similar_properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $similar_property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6">
                            <div class="property-box-7">



                                <div class="property-thumbnail">
                                    <a href="<?php echo e(route('show_one_property', $slug=$similar_property->slug )); ?>" class="property-img">
                                        <?php if($similar_property->transaction_type == 1): ?>
                                        <div class="tag-2">Vanzare</div>
                                        <?php else: ?>
                                        <div class="tag-2">Inchiriere</div>
                                        <?php endif; ?>
                                        <div class="price-box"><span><?php echo e($similar_property->pret); ?></span> €</div>
                                        <img src="<?php echo get_first_image($similar_property->images,$similar_property->slug); ?>" alt="property" class="img-fluid">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h1 class="title">
                                        <a href="<?php echo e(route('show_one_property', $slug=$similar_property->slug )); ?>"><?php echo e($similar_property->title); ?></a>
                                    </h1>
                                    <div class="location">
                                        <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i><?php echo e($similar_property->judet); ?>, <?php echo e($similar_property->localitate); ?>

                                    </div>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <?php echo get_atribute($similar_property->id,$similar_property->type); ?>

                                </ul>
                                <div class="footer clearfix">
                                    <div class="pull-left days">
                                        <p>
                                            <i class="fa fa-user"></i>
                                            <?php echo e($property->user->name); ?>

                                        </p>
                                    </div>
                                    <ul class="pull-right">
                                        <li><a href="#"><i class="flaticon-heart-shape-outline"></i></a></li>
                                        <li><a href="#"><i class="flaticon-calendar"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6">
                            <div class="property-box-7">
                                <!-- <div class="property-thumbnail">
                                    <a href="properties-details.html" class="property-img">
                                        <div class="tag-2">For Sale</div>
                                        <div class="price-box"><span>$850.00</span> Per night</div>
                                        <img src="http://placehold.it/350x233" alt="property" class="img-fluid">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h1 class="title">
                                        <a href="properties-details.html">Beautiful Single Home</a>
                                    </h1>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </div>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <span>Area</span>3600 Sqft
                                    </li>
                                    <li>
                                        <span>Beds</span> 3
                                    </li>
                                    <li>
                                        <span>Baths</span> 2
                                    </li>
                                    <li>
                                        <span>Garage</span> 1
                                    </li>
                                </ul>
                                <div class="footer clearfix">
                                    <div class="pull-left days">
                                        <p><i class="fa fa-user"></i> Jhon Doe</p>
                                    </div>
                                    <ul class="pull-right">
                                        <li><a href="#"><i class="flaticon-heart-shape-outline"></i></a></li>
                                        <li><a href="#"><i class="flaticon-calendar"></i></a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar mbl">
                    <!-- Search area start -->
                    <div class="widget search-area advanced-search as">
                        <h5 class="sidebar-title">Cauta alt imobil</h5>
                        <div class="search-area-inner">
                            <div class="search-contents ">
                                <form method="POST" action="<?php echo e(route('get_data_prop')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <select class="chosen-select-no-single" name="tip_tranzactie">
                                            <option value="" selected="selected">Tip tranzactie</option>
                                            <option value="1">De vanzare</option>
                                            <option value="2">De inchiriat</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="chosen-select-no-single" name="location">
                                            <option value="" selected="selected">Alege locatia</option>
                                            <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($location->localitate); ?>"><?php echo e($location->localitate); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="chosen-select-no-single" name="estate">
                                            <option value="" selected="selected">Tip imobil</option>
                                            <?php $__currentLoopData = $estates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($estate->key_int); ?>"><?php echo e($estate->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option value="">Numar camere</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label>Suprafata</label>
                                        <div class="range-slider">
                                            <input name="suprafata" value="" type="text" class="form-control">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label>Pret</label>
                                        <div class="range-slider">
                                            <input name="pret" value="" type="text" class="form-control">

                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <button type="submit" class="search-button btn-md btn-color">cauta</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="widget recent-posts">
                        <h5 class="sidebar-title">Proprietati recente</h5>
                        <?php $__currentLoopData = $last_properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $last_property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="media mb-4">
                            <a href="<?php echo e(route('show_one_property', $slug=$last_property->slug)); ?>">
                                <img src="<?php echo get_images1($last_property->images,$last_property->slug); ?>" alt="sub-property">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="<?php echo e(route('show_one_property', $slug=$last_property->slug)); ?>"><?php echo e($last_property->title); ?></a>
                                </h5>
                                <p><?php echo e($last_property->created_at->format('d/m/Y')); ?> | <?php echo e($last_property->pret); ?>€</p>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <!-- Financing calculator  start -->
                    <div class="contact-3 financing-calculator widget-3">
                        <h5 class="sidebar-title">Calculator Credit</h5>
                        <form action="#" method="GET" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="form-label">Pret Proprietate</label>
                                <input type="text" class="form-control" placeholder="$36.400">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Dobanda (%)</label>
                                <input type="text" class="form-control" placeholder="10%">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Perioada in luni</label>
                                <input type="text" class="form-control" placeholder="10 Months">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Avans</label>
                                <input type="text" class="form-control" placeholder="$21,300">
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-color btn-md btn-message btn-block">Calculeaza</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<?php $__env->startPush('js'); ?>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<!-- <script>
    $(document).ready(function() {

        function initMap() {
            var mylat = "<?php echo  $property->lat;?>";
            var mylong = "<?php echo  $property->long; ?>";
            var mytitle = "<?php echo $property->title; ?>";
            var map = L.map('map').setView([mylat, mylong], 13);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: ''
            }).addTo(map);

            L.marker([mylat, mylong]).addTo(map)
                .bindPopup(mytitle)
                .openPopup();
        }
        initMap();

    });

    $('body').addClass('list-page');
</script> -->
<script>
    var osmUrl = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
        osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        osm = L.tileLayer(osmUrl, {
            maxZoom: 18,
            attribution: osmAttrib
        });

    var map = L.map('map').setView(["<?php echo e($property->lat); ?>", "<?php echo e($property->long); ?>"], 12).addLayer(osm);


    var marker = L.marker(
        ["<?php echo e($property->lat); ?>", "<?php echo e($property->long); ?>"]
    ).addTo(map);
    marker.bindPopup("<div><a href= '<?php echo e(route('show_one_property', $slug=$property->slug )); ?>'><h4><?php echo e($property->title); ?></h4></a><img style='width:20%;heigth:20%;' src='/storage/properties/<?php echo e($property->slug); ?>/<?php echo e(get_images($property->images)); ?>' /> <p><?php echo e($property->pret); ?> Euro</p> </div>");


    $('body').addClass('list-page');
</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\imobix\resources\views/properties/show-one.blade.php ENDPATH**/ ?>