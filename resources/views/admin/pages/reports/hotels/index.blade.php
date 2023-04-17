@extends('admin.layouts.default')

@section('admin.content')

    <section class="section">
        <div class="section-header">
            <h1>Hotel Reports</h1>
        </div>

        @include('admin.pages.reports.hotels._show')

    </section>
@stop
