@extends('layouts.default', ['pageTitle' => 'Blog'])
@section('content')

    <section id="recent-blog-posts" class="recent-blog-posts blog">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Our <span class="blue">Blog</span></h2>
            </header>

            @if(!$blogs->isEmpty())
                <div class="row gy-5">
                    @foreach($blogs as $blog)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="post-box">
                                <div class="post-img">
                                    <a href="{{route('page.blog.single', ['id' => $blog->id])}}">
                                        <img
                                            src="{{asset("storage/$blog->image")}}"
                                            class="img-fluid"
                                            alt="blog image"
                                        >
                                    </a>
                                </div>
                                <a href="{{route('page.blog.single', ['id' => $blog->id])}}">
                                    <h3 class="post-title">{{$blog->title}}</h3>
                                </a>
                                <div class="read-more">
                                    <a href="{{route('page.blog.single', ['id' => $blog->id])}}"
                                       class="stretched-link mt-auto btn-blue">
                                        <span>Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <h2 class="no-blogs">No <span class="blue">blog's at the moment</span></h2>
            @endif
        </div>
    </section>

@stop
