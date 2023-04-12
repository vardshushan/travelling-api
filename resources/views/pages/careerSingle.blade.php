@extends('layouts.default', ['pageTitle' => 'Job Post'])
@section('content')

    <section id="career-single" class="career-single">
        <div class="container">
            <div class="name">
                <h3>{{$vacancy->name}}</h3>
                <p>{{$vacancy->time}}</p>
            </div>

            <div class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="rq">
                            <h3 class="title">Required qualifications</h3>
                            <ul>
                                @forelse($vacancy->qualifications as $qualification)
                                    <li>{{$qualification->name}}</li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="jr">
                            <h3 class="title">Job responsibilities</h3>
                            <ul>
                                @forelse($vacancy->responsibilities as $responsibility)
                                    <li>{{$responsibility->name}}</li>
                                @empty
                                @endforelse
                            </ul>
                            <button onclick="setVacancyId({{$vacancy->id}})" class="btn-blue" data-bs-toggle="modal" data-bs-target="#applyModal">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
