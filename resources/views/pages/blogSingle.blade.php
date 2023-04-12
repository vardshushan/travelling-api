@extends('layouts.default', ['pageTitle' => 'Blog Article'])
@section('content')

    <section id="blog-single" class="blog-single">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="content">
                        <h1 class="blue">{{$blog->title}}</h1>
                        <br>
                        <p>{!! $blog->content !!}</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="share" style="">
                        <span>Share:</span>
                        <a target="_blank"
                           href="https://www.facebook.com/sharer/sharer.php?u={{route('page.blog.single', ['id' => $blog->id])}}">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a target="_blank"
                           href="https://www.linkedin.com/sharing/share-offsite/?url={{route('page.blog.single', ['id' => $blog->id])}}">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a target="_blank"
                           href="https://twitter.com/intent/tweet?url={{route('page.blog.single', ['id' => $blog->id])}}">
                            <i class="bi bi-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
