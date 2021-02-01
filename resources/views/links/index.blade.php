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
                        <h3>
                            <a type="button" 
                                class="my-modal"
                                data-toggle="modal" 
                                data-target=".bd-modal-md"  
                                data-title="{{ $link->title }}" 
                                data-link="{{ $link->link }}" 
                                data-description="{{ $link->description }}"
                                >
                                {{ Str::limit($link->title, 15) }}
                            </a>
                        </h3>
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

@section('script')
    <script type="text/javascript"> 
        $(document).ready(function () {
            $(".my-modal").click(function () {
                console.log($(this).data('title'));
                $('#modal-title-id').html($(this).data('title'));
                $('#modal-content-id').html($(this).data('description'));
                $('#modal-goto-href-id').attr("href", $(this).data('link'));
            });
        });
    </script>
@endsection

@section('modal')
    <div class="modal fade bd-modal-md" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title-id">
                        
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="modal-content-id">
                        
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a type="button" id="modal-goto-href-id" href="#" class="get-started-btn" target="_blank">Go to</a>
                </div>
            </div>
        </div>
    </div>
@endsection