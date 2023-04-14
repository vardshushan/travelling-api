@extends('admin.layouts.default')

@section('admin.content')

    <section class="section">
        <div class="section-header">
            <h1>Contents</h1>
        </div>

        @include('admin.pages.content._create')

        @include('admin.pages.content._show')

    </section>

    @forelse($contents as $content)
        @include('admin.pages.content._modalEdit', compact('content'))
        @include('admin.pages.content._modalDelete', compact('content'))
    @empty
    @endforelse

@stop
