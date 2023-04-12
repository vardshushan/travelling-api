@extends('layouts.default', ['pageTitle' => 'Team'])
@section('content')

    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
            <div class="description">
                <h1 class="blue">
                    We are a team of <span class="red">creative</span> and <span class="red">tech</span> professionals.
                </h1>
            </div>

            @if(!$team->isEmpty())
                <div class="row gy-4">
                    @foreach($team as $member)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                             data-aos-delay="100">
                            <div class="member">
                                <div class="member-img">
                                    <img src="{{asset("storage/$member->image")}}" class="img-fluid" alt="member image">
                                </div>
                                <div class="member-info">
                                    <h4 class="blue">{{$member->name}}</h4>
                                    <span>{{$member->role}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </section>

@stop
