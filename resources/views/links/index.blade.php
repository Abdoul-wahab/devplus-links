@extends('layouts.app')


@section('title', 'Add Link')

@section('content')
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                @foreach ($links as $link)
                    <div class="col-xl-2 col-md-4 col-6 mb-3">
                        <div class="icon-box">
                            <i class="ri-store-line"></i>
                            <h3>
                                <a type="button" class="my-modal" data-toggle="modal" data-target=".bd-modal-md"
                                    data-title="{{ $link->title }}" data-link="{{ $link->link }}"
                                    data-description="{{ $link->description }}"
                                    data-delete="{{ route('links.delete', $link->link_key) }}">
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
        $(document).ready(function() {
            $(".my-modal").click(function() {
                console.log($(this).data('title'));
                $('#modal-title-id').html($(this).data('title'));
                $('#modal-content-id').html($(this).data('description'));
                $('#modal-goto-href-id').attr("href", $(this).data('link'));
                $('#js-delete-link-form').attr("action", $(this).data('delete'));
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
                    <form id="js-delete-link-form" style="display: none;" method="post" action="">
                        @csrf
                        @method('DELETE')
                    </form>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="https://google.com"
                        onclick="event.preventDefault(); confirm('Are you sure to delete that resource ?') && document.querySelector('#js-delete-link-form').submit();"
                        class="mr-2 btn-icon btn-icon-only btn btn-outline-danger">
                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                        </svg>
                    </a>
                    <a type="button" id="modal-goto-href-id" href="#" class="get-started-btn" target="_blank">Go to</a>
                </div>
            </div>
        </div>
    </div>
@endsection
