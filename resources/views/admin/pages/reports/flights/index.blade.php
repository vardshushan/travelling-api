@extends('admin.layouts.default')

@section('admin.content')

    <section class="section">
        <div class="section-header">
            <h1>Flight Reports</h1>
        </div>

        @include('admin.pages.reports.flights._show')

    </section>
@stop
