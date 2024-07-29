<style>
    .container-fluid2 {
        min-height: calc(100vh - 174px);
    }

    .article img {
        width: 500px;
        height: 300px;
        object-fit: cover;
        object-position: center;
    }

    .rm {
        position: absolute;
        bottom: 0;
        right: 0;
    }

    .text {
        width: 700px;
        wrap: break-word;
    }
</style>

@extends('layouts.app')

@section('content')
    <div class="container-fluid2 p-5 w-100">
        <p class="fs-3 fw-bold">Popular</p>
        <div class="contents w-100 d-flex flex-column align-items-center gap-4 my-5 mx-2">
            @foreach ($articles as $article)
                <div class="article d-flex">
                    <img src="{{ asset($article->image) }}" alt="UTC Logo" class="img-fluid rounded-5">
                    <div class="right ms-4 position-relative d-flex flex-column gap-2 my-2">
                        <p class="title fs-5 fw-bold m-0">{{ $article->title }}</p>
                        <p class="details fs-6 m-0">{{ $article->created_at->format('d M Y') }} |
                            by: {{ explode(' ', $article->writer->name)[0] }}
                        </p>
                        <p class="text fs-5 m-0">{{ \Illuminate\Support\Str::limit($article->content, 200, '...') }}</p>
                        <a href="{{ route('detail', ['id' => $article->id]) }}"
                            class="px-5 rm btn btn-primary rounded-pill">read more...</a>
                    </div>
                </div>
            @endforeach
            {{ $articles->links() }}
        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let navLinks = document.querySelectorAll('.nav-link');
        let homeLink = document.querySelector('#popular');
        navLinks.forEach((link) => {
            link.addEventListener('click', function() {
                navLinks.forEach((link) => {
                    link.classList.remove('active');
                });
            });
        });
        homeLink.classList.add('active');
    });
</script>
