@extends('layouts.app')


@section('title', 'Add Link')

@section('content')
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            @foreach ($links as $link)
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="icon-box">
                        <i class="ri-store-line"></i>
                        <h3><a href="#">{{ Str::limit($link->description, 12) }}</a></h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

    {{ $links->links('vendor.pagination.bootstrap-4') }}

@endsection
