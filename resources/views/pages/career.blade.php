@extends('layouts.default', ['pageTitle' => 'Career'])
@section('content')

    <section id="career" class="career">
        <div class="container">
            <div class="description">
                <p>What is it like to work at Rocket Systems?</p>
                <p>
                    <span class="red">“We encourage</span> individuality,
                    <span class="red">support</span> our people
                    <span class="red">and trust</span> them every step of the way.”
                </p>
            </div>

            <div class="benefits">
                <h1 class="blue">Benefits</h1>
                <div class="row gy-5">
                    <div class="col-md-4 col-sm-6 col-6">
                        <div class="content salary">
                            <div class="icon">
                                <img src="{{svg_path('benefit-salary')}}" alt="benefit salary">
                            </div>
                            <p>Competitive salary</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-6">
                        <div class="content learning">
                            <div class="icon">
                                <img src="{{svg_path('benefit-learning')}}" alt="benefit learning">
                            </div>
                            <p>Learning sessions</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-6">
                        <div class="content events">
                            <div class="icon">
                                <img src="{{svg_path('benefit-events')}}" alt="benefit events">
                            </div>
                            <p>Team building events</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-6">
                        <div class="content career">
                            <div class="icon">
                                <img src="{{svg_path('benefit-career')}}" alt="benefit career">
                            </div>
                            <p>Fast-paced career path</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-6">
                        <div class="content english">
                            <div class="icon">
                                <img src="{{svg_path('benefit-english')}}" alt="benefit english">
                            </div>
                            <p>English classes</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-6">
                        <div class="content playground">
                            <div class="icon">
                                <img src="{{svg_path('benefit-playground')}}" alt="benefit playground">
                            </div>
                            <p>Office playground</p>
                        </div>
                    </div>
                </div>
                {{--                @if(!$benefits->isEmpty())--}}
                {{--                    <ul>--}}
                {{--                        @foreach($benefits as $benefit)--}}
                {{--                            <li>{{$benefit->name}}</li>--}}
                {{--                        @endforeach--}}
                {{--                    </ul>--}}
                {{--                @endif--}}
            </div>

            @if(!$vacancies->isEmpty())
                <div class="vacancies">
                    <h1 class="blue">Vacancies</h1>
                    <div class="content row">
                        @foreach($vacancies as $vacancy)
                            <div class="col-md-4">
                                <div class="vacancy">
                                    <h5 class="name">{{$vacancy->name}}</h5>
                                    <p class="time">{{$vacancy->time}}</p>
                                    <div class="buttons">
                                        <a href="{{route('page.career.single', ['id' => $vacancy->id])}}">See More</a>
                                        <button onclick="setVacancyId({{$vacancy->id}})" data-bs-toggle="modal"
                                                data-bs-target="#applyModal">Apply
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>

@stop
