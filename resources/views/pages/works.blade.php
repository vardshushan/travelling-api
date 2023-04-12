@extends('layouts.default', ['pageTitle' => 'Work'])
@section('content')

    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Our <span class="blue">works</span></h2>
            </header>

            @if(!$works->isEmpty())
                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    @foreach($works as $work)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{"storage/$work->image"}}" class="img-fluid" alt="our work image">
                                <div class="portfolio-info">
                                    <h4>{{$work->name}}</h4>
                                    <p>{{$work->type}}</p>
                                    @if(!empty($work->link))
                                        <div class="portfolio-links">
                                            <a href="{{$work->link}}" target="_blank" title="More Details">
                                                <i class="bi bi-link"></i>
                                            </a>
                                        </div>
                                    @endif
                                </div>

                            </div>
                            <p>{{$work->technology}}</p>
                        </div>
                    @endforeach

                </div>
            @endif
        </div>
    </section>

@stop
