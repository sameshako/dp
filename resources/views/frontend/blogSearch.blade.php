@extends('layouts.front.app')

@section('content')




<!-- Sub banner start -->
<div class="sub-banner overview-bgi" style=" background: rgba(0, 0, 0, 0.04) url(https://images.unsplash.com/photo-1593696140826-c58b021acf8b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80) center;">
    <div class="container">
        <div class="breadcrumb-area">
            <h1> Postari de blog </h1>
            <ul class="breadcrumbs">
                <li><a href="/">Acasa</a></li>
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
                            <input type="text" class="form-control" placeholder="Search">
                            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Categories start -->
                    <div class="widget categories">
                        <h5 class="sidebar-title">Categorii</h5>
                        <ul>
                            @foreach($blog_categories as $blog_category)
                            <li><a href="{{ route('blogSearch', $blog_category->id) }}">{{ $blog_category->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Recent posts start -->
                    <div class="widget recent-posts">
                        <h5 class="sidebar-title">Propertati Recente</h5>
                        @foreach($last_properties as $last_property)
                        <div class="media mb-4">
                            <a href="{{route('show_one_property', $slug=$last_property->slug )}}">
                                <img src="{!!get_images1($last_property->images, $last_property->slug)!!}" alt="sub-property" style="height: 60px; width:60px">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="{{route('show_one_property', $slug=$last_property->slug )}}">{{ $last_property->title }}</a>
                                </h5>
                                <p>{{ $last_property->created_at->format('d/m/Y') }} | {{ $last_property->pret }}€</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Tags start -->
                    <div class="widget tags clearfix">
                        <h5 class="sidebar-title">Taguri</h5>
                        <ul class="tags">
                            @foreach()
                            <li><a href="#">Business</a></li>
                            @endforeach
                        </ul>
                    </div>
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
                    <div class="widget-3 latest-tweet">
                        <h5 class="sidebar-title">Ultimele tweeturi</h5>
                        <P class="mb-0"><a href="#">Lorem Ipsum is simply</a> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text,</P>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                @foreach($blogs as $blog)
                <div class="blog-1">
                    <div class="blog-photo">
                        <img src="{{ asset('storage/'. $blog->image) }}" alt="blog" class="img-fluid">
                        <div class="user">
                            <div class="avatar">
                                <img src="http://placehold.it/30x30" alt="avatar" class="img-fluid rounded-circle">
                            </div>
                            <div class="name">
                                <h5>{{ $blog->blogUser['name']}}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h2>
                            <a href="{{ route('blogs.show', $blog->id)}}">{{ $blog->title }}</a>
                        </h2>
                        <p>{!! substr($blog->body,0,50) !!} ...</p>
                        <div class="blog-footer clearfix">
                            <div class="float-left">
                                <p class="date"><i class="flaticon-calendar"></i>{{ $blog->created_at->format('d.m.y') }}</p>
                            </div>
                            <div class="float-right">
                                <a href="{{ route('blogs.show', $blog->id)}}">Citeste</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                {!! $blogs->links() !!}
            </div>
        </div>
    </div>
</div>
<!-- Blog section end -->


@endsection