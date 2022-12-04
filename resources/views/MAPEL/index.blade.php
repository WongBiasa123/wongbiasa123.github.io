

@extends('layouts.main')

@section('container')

    <h1 class="mb-3  text-center">{{ $title }}</h1>



@if ($posts->count())

    <div class="container">

            @foreach ($posts as $post )

            <div class="card mb-3 mx-auto" style="max-width: 500px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/mapels/{{ $post->mapel->slug }}" class="text-white text-decoration-none">{{ $post->mapel->name }}</a></div>
                        @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->mapel->name }}">
                        @else
                                <img src="https://source.unsplash.com/500x400? {{ $post->mapel->name }}" alt="{{ $post->mapel->name }}" class="img-fluid">
                        @endif
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p>
                                <small class="text-muted">
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text fs-6">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

    </div>
   </div>

   @else
    <p class="text-center fs-4">No Post Found.</p>
@endif


@endsection

