<style>
    .container-fluid2 {
        height: calc(100vh - 174px);
    }

    .container-fluid2 p {
        max-width: 75%;
        text-align: center;
    }
</style>

@extends('layouts.app')

@section('content')
    <div class="container-fluid2 p-5 d-flex flex-column gap-5 align-items-center justify-content-center w-100">
        <p class="fs-1 fw-bold">About EduFun</p>
        <p class="fs-4">EduFun adalah perusahaan pendidikan berbasis teknologi asal Indonesia. EduFun menyediakan
            layanan
            akses pendidikan dalam format tulisan berbahasa Indonesia yang disajikan secara online melalui website.</p>
        <p class="fs-4">Hingga Juni 2024, EduFun memiliki lebih dari 10 ribu pengguna. EduFun hadir sebagai bentuk revolusi
            dari pendidikan di Indonesia dengan mengedepankan cara berpikir kritis, logis, rasional, dan sumber pengetahuan
            sains yang terintegrasi terhadap semua mahasiswa IT di Indonesia. EduFun bercita-cita mencetak generasi
            Indonesia yang memahami ilmu pengetahuan dan cinta belajar.</p>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let navLinks = document.querySelectorAll('.nav-link');
        let homeLink = document.querySelector('#about');
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
