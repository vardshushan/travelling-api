@extends('layouts.default', ['pageTitle' => 'Services'])
@section('content')

    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <div class="sec">
                <div class="row">
                    <div class="col-md-12 we-do-hd">
                        <header class="section-header">
                            <h2 class="red">What we do</h2>
                        </header>
                    </div>
                    @if(!$services->isEmpty())
                        @foreach($services as $service)
                            <div class="col-md-6 info">
                                <h5>{{$service->name}}</h5>
                                <p>{{$service->description}}</p>
                            </div>
                        @endforeach
                    @endif

                    <div class="col-md-12">
                        <header class="section-header tech-hd">
                            <h2 class="blue">Technologies</h2>
                        </header>

                        @if(!$technologies->isEmpty())
                            <div class="technologies">
                                <div class="row title">
                                    @foreach($technologies as $technology)
                                        <div class="col-lg-2 col-md-3 col-sm-6 col-6 name">
                                            <a data-id="{{$technology->id}}" class="tech-names"
                                               onclick="showTechnology(this)">{{$technology->name}}</a>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="row gy-5 content">
                                    @foreach($technologies as $technology)
                                        @foreach($technology->logos as $logo)
                                            <div
                                                class="col-lg-2 col-md-2 col-sm-4 col-4 name tech_content content_{{$logo->technology_id}}">
                                                <img src="{{asset("storage/$logo->path")}}" alt="technology logo">
                                            </div>
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
