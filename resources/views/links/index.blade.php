@extends('layouts.app')


@section('title', 'Add Link')

@section('content')
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="250">
            @foreach ($links as $link)
                <div class="col-xl-2 col-md-4 col-6 mb-3">
                    <div class="icon-box">
                        <i class="ri-store-line"></i>
                        <h3><a href="#">{{ Str::limit($link->description, 12) }}</a></h3>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-5">
            {{ $links->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
</section>

    

@endsection
