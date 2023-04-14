@extends('admin.layouts.default')

@section('admin.content')

    <section class="section">
        <div class="section-header">
            <h1>Partner</h1>
        </div>

        @include('admin.pages.partner._create')

        @include('admin.pages.partner._show')

    </section>

    @forelse($partners as $partner)
        @include('admin.pages.partner._modalEdit', compact('partner'))
        @include('admin.pages.partner._modalDelete', compact('partner'))
    @empty
    @endforelse

@stop
