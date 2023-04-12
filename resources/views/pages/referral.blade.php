@extends('layouts.default', ['pageTitle' => 'Referral'])
@section('content')

    <section id="referral" class="referral">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-4 title">
                    <div>
                        <h1 class="red">Referral</h1>
                        <h1 class="blue">Program</h1>
                    </div>
                </div>
                <div class="col-md-8 image">
                    <img src="{{svg_path('rsguys')}}" alt="referral">
                </div>
            </div>

            @if(!empty($referral))
                <div class="row gy-5 content">
                    <div class="col-md-12 info">
                        <p>{{$referral->title}}</p>
                    </div>
                    <div class="col-md-6 info">
                        <div class="icon">
                            <img class="img1" src="{{svg_path('rp1')}}" alt="note icon">
                        </div>
                        <p>{{$referral->info1}}</p>
                    </div>
                    <div class="col-md-6 info">
                        <div class="icon">
                            <img class="img2" src="{{svg_path('rp2')}}" alt="link icon">
                        </div>
                        <p>{{$referral->info2}}</p>
                    </div>
                    <div class="col-md-6 info">
                        <div class="icon">
                            <img class="img3" src="{{svg_path('rp3')}}" alt="chat icon">
                        </div>
                        <p>{{$referral->info3}}</p>
                    </div>
                    <div class="col-md-6 info">
                        <div class="icon">
                            <img class="img4" src="{{svg_path('rp4')}}" alt="star icon">
                        </div>
                        <p>{{$referral->info4}}</p>
                    </div>
                    <div class="col-md-12 info">
                        <p>
                            If you are interested please send email to <b>{{$companyInfo->email}}</b>
                            <br>
                            mentioning in subject line “Referral”
                        </p>
                    </div>
                </div>
            @endif
        </div>
    </section>

@stop
