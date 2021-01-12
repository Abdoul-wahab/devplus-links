@extends('layouts.app')

@section('title', 'Add Link')

@section('content')
    <!-- Default form contact -->
    <section id="contact" class="contact">
        <div class="container mt-5 py-5" data-aos="fade-up">

            <form method="post" action="{{ route('links.store') }}" role="form" class="mt-5 contact-style">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{old('title')}}"  data-rule="minlen:4" data-msg="Entrez le tiltre du lien" />
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="link" placeholder="Link" value="{{old('link')}}" id="link" data-rule="minlen:4" data-msg="Entrez le lien" />
                    @error('link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="5" data-rule="required" data-msg="Entrez la description de la source" placeholder="Description">{{old('description')}}</textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="text-center"><button type="submit">Save</button></div>
            </form>
        </div>
    </section>
@endsection
