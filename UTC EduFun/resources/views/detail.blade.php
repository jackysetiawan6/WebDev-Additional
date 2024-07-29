<style>
    .container-fluid2 {
        min-height: calc(100vh - 174px);
    }

    .contents img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        object-position: center;
    }
</style>

@extends('layouts.app')

@section('content')
    <div class="container-fluid2 p-5 d-flex flex-column gap-3 w-100">
        <p class="fs-2 fw-bold m-0">{{ $article->category->name }}</p>
        <div class="contents w-100 d-flex flex-column gap-4 mx-2">
            <img src="{{ asset($article->image) }}" alt="UTC Logo" class="img-fluid rounded-5">
            <div class="right ms-4 position-relative d-flex flex-column gap-2 my-2">
                <p class="details fs-6 m-0">{{ $article->created_at->format('d M Y') }} |
                    by: {{ explode(' ', $article->writer->name)[0] }}
                </p>
                <p class="text fs-5 m-0">{{ $article->content }}</p>
            </div>
        </div>
    </div>
@endsection
