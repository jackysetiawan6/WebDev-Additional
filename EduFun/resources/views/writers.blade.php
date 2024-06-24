<style>
    .container-fluid2 {
        height: calc(100vh - 174px);
    }

    .writers {
        justify-content: center;
    }

    .writer {
        text-align: center;
    }

    .writer-img {
        width: 250px;
        height: 250px;
        object-fit: cover;
        object-position: center;
    }
</style>

@extends('layouts.app')

@section('content')
    <div class="container-fluid2 p-5">
        <p class="fs-3 fw-bold">Our Writers:</p>
        <div class="writers d-flex justify-content-between align-items-center gap-5 h-100 w-100">
            @foreach ($writers as $writer)
                <div class="writer d-flex flex-column align-items-center gap-4">
                    <a href="{{ route('writer_detail', ['id' => $writer->id]) }}">
                        <img src="{{ asset($writer->profile) }}" alt="writer1" class="writer-img rounded-circle shadow">
                    </a>
                    <p class="m-0
                        fw-bold">{{ $writer->name }}</p>
                    <p class="m-0">{{ $writer->job_title }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let navLinks = document.querySelectorAll('.nav-link');
        let homeLink = document.querySelector('#writers');
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
