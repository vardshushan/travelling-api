@extends('admin.layouts.default')

@section('admin.content')

    <section class="section">
        <div class="section-header">
            <h1>Blog</h1>
        </div>

        @include('admin.pages.blog._create')

        @include('admin.pages.blog._show')

    </section>

    @forelse($blogs as $blog)
        @include('admin.pages.blog._modalEdit', compact('blog'))
        @include('admin.pages.blog._modalDelete', compact('blog'))
    @empty
    @endforelse

@stop
