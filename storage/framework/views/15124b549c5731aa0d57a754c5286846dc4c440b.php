

<?php $__env->startSection('content'); ?>




<!-- Sub banner start -->
<div class="sub-banner overview-bgi" style=" background: rgba(0, 0, 0, 0.04) url(https://images.unsplash.com/photo-1593696140826-c58b021acf8b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80) center;">
    <div class="container">
        <div class="breadcrumb-area">
            <h1> Postari de blog </h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Acasa</a></li>
                <li class="active">Blog</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Blog section start -->
<div class="blog-section content-area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="sidebar mrb">
                    <!-- Search box start -->
                    <div class="widget search-box">
                        <h5 class="sidebar-title">Cauta in postari</h5>
                        <form class="form-search" method="GET">
                            <input type="text" class="form-control" placeholder="Cauta cuvantul dorit">
                            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Categories start -->
                    <div class="widget categories">
                        <h5 class="sidebar-title">Categorii</h5>
                        <ul>
                            <?php $__currentLoopData = $blog_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('blogSearch', $propertie_types = $blog_category->id)); ?>"><?php echo e($blog_category->title); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <!-- Recent posts start -->
                    <div class="widget recent-posts">
                        <h5 class="sidebar-title">Propertati Recente</h5>
                        <?php $__currentLoopData = $last_properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $last_property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="media mb-4">
                            <a href="<?php echo e(route('show_one_property', $slug=$last_property->slug )); ?>">
                                <img src="<?php echo get_images1($last_property->images, $last_property->slug); ?>" alt="sub-property" style="height: 60px; width:60px">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="<?php echo e(route('show_one_property', $slug=$last_property->slug )); ?>"><?php echo e($last_property->title); ?></a>
                                </h5>
                                <p><?php echo e($last_property->created_at->format('d/m/Y')); ?> | <?php echo e($last_property->pret); ?>€</p>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <!-- Tags start -->
                    <!-- <div class="widget tags clearfix">
                        <h5 class="sidebar-title">Taguri</h5>
                        <ul class="tags">
                       
                            <li><a href=""></a></li>
                        
                        </ul>
                    </div> -->
                    <!-- Recent comments start -->
                    <!-- <div class="widget recent-comments">
                        <h5 class="sidebar-title">Recent comments</h5>
                        <div class="media mb-4">
                            <a href="#">
                                <img src="http://placehold.it/60x60" alt="recent-comments">
                            </a>
                            <div class="media-body">
                                <h5>Brandon Miller</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and.</p>
                            </div>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="http://placehold.it/60x60" alt="recent-comments">
                            </a>
                            <div class="media-body">
                                <h5>Antony John</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and.</p>
                            </div>
                        </div>
                    </div> -->

                    <!-- Latest start -->
                    <!-- <div class="widget-3 latest-tweet">
                        <h5 class="sidebar-title">Ultimele tweeturi</h5>
                        <P class="mb-0"><a href="#">Lorem Ipsum is simply</a> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text,</P>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="blog-1">
                    <a href="<?php echo e(route('blogs.show', $blog->id)); ?>">
                        <div class="blog-photo">
                            <img src="<?php echo e(asset('storage/'. $blog->image)); ?>" alt="blog" class="img-fluid">
                            <div class="user">
                                <div class="avatar">
                                    <img src="http://placehold.it/30x30" alt="avatar" class="img-fluid rounded-circle">
                                </div>
                                <div class="name">
                                    <h5><?php echo e($blog->blogUser['name']); ?></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="detail">
                        <h2>
                            <a href="<?php echo e(route('blogs.show', $blog->id)); ?>"> <?php echo e($blog->title); ?></a>
                        </h2>
                        <p><?php echo substr($blog->body,0,50); ?> ...</p>
                        <div class="blog-footer clearfix">
                            <div class="float-left">
                                <p class="date"><i class="flaticon-calendar"></i><?php echo e($blog->created_at->format('d.m.y')); ?></p>
                            </div>
                            <div class="float-right">
                                <a href="<?php echo e(route('blogs.show', $blog->id)); ?>">Citeste</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php echo $blogs->links(); ?>

            </div>
        </div>
    </div>
</div>
<!-- Blog section end -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\imobix\resources\views/frontend/blog.blade.php ENDPATH**/ ?>