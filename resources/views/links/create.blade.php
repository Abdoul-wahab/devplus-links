@extends('layouts.app')

@section('title', 'Add Link')

@section('content')
    <!-- Default form contact -->
    <section id="contact" class="contact">
        <div class="container mt-5 py-5" data-aos="fade-up">

            <form method="post" action="{{ route('links.store') }}" role="form" class="mt-5 php-email-form">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{old('title')}}"  data-rule="minlen:4" data-msg="Entrez le tiltre du lien" />
                    <div class="validate"></div>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="link" placeholder="Link" value="{{old('link')}}" id="link" data-rule="minlen:4" data-msg="Entrez le lien" />
                    <div class="validate"></div>
                    <small class="text-danger" style="display: none;" id="link_error">Entrez le lien</small>
                </div>

                <div class="form-group">
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="5" data-rule="required" data-msg="Entrez la description de la source" placeholder="Description">{{old('description')}}</textarea>
                    <div class="validate"></div>
                    <small class="text-danger" style="display: none;" id="description_error">Entrez la description de la source</small>
                </div>
                <div class="text-center"><button type="submit">Save</button></div>
            </form>
        </div>
    </section>
@endsection
