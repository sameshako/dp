<div class="container-fluid container">

    <div class="main-title">

        <h1>Anunturi promovate</h1>

        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->

    </div>

    <div class="row slick-fullwidth wow fadeInUp delay-04s">

        <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="slick-slide-item">

            <div class="property-box">

                <div class="property-thumbnail">

                    <a href="properties-details.html" class="property-img">

                        <?php if($elem->is_featured ==true): ?>

                        <div class="listing-badges">

                            <!-- <span class="featured">Oryon</span> -->

                        </div>

                        <?php endif; ?>

                        <div class="plan-price"><sup></sup><?php echo e($elem->pret); ?>€<span></span> </div>


                        <img class="img-fluid" alt="property-box" src="https://cpmr-islands.org/wp-content/uploads/sites/4/2019/07/Test-Logo-Small-Black-transparent-1.png" />
                        <!-- <img class="img-fluid" alt="property-box" src="/storage/properties/<?php echo e($elem->slug); ?>/<?php echo e(get_images($elem->images)); ?>" /> -->

                    </a>



                    <a href="/property/<?php echo e($elem->slug); ?>">

                        <div class="property-overlay">

                            <!-- <a href="properties-details.html" class="overlay-link">

                            <i class="fa fa-link"></i>

                        </a>

                        <a class="overlay-link property-video" title="Test Title">

                            <i class="fa fa-video-camera"></i>

                        </a> -->

                        </div>

                </div>

                </a>

                <div class="detail">

                    <h1 class="title">

                        <a href="/property/<?php echo e($elem->slug); ?>"><?php echo e($elem->title); ?></a>

                    </h1>

                    <div class="location">

                        <a href="properties-details.html">

                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i><?php echo e($elem->strada); ?> <?php echo e($elem->localitate); ?>


                        </a>

                    </div>

                    <ul class="facilities-list clearfix">



                        <?php echo get_atribute($elem->id,$elem->type); ?>


                    </ul>

                </div>

            </div>

        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





        <div class="slick-prev slick-arrow-buton">

            <i class="fa fa-angle-left"></i>

        </div>

        <div class="slick-next slick-arrow-buton">

            <i class="fa fa-angle-right"></i>

        </div>

    </div>

</div>



<script>

    var ok = 0;

    $(".services-info-3").hover(

        function() {

            if ($(this).hasClass("reversed")) {

                ok = 1;

                $(".services-info-3:not(:hover)").addClass('reversed-2');

                // $(this).removeClass("reversed");



                console.log(ok + '1');

            } else {

                ok = 0;

                $(".services-info-3:not(:hover)").addClass('reversed-1');

                // $(this).addClass("reversed");

                console.log(ok + '2');

            }

        },

        function() {

            if (ok == 1) {

                $(".services-info-3:not(:hover)").removeClass('reversed-2');

                $(".services-info-3:not(:hover)").removeClass('reversed-1');

                // $(this).removeClass("reversed");

                console.log(ok + '3');

            } else {

                $(".services-info-3:not(:hover)").removeClass('reversed-1');

                $(".services-info-3:not(:hover)").removeClass('reversed-2');

                // $(this).removeClass("reversed");

                console.log(ok + '4');

            }

        });

</script><?php /**PATH /home/getbrand/dp.getbrandedwork.ro/resources/views/properties/featured.blade.php ENDPATH**/ ?>