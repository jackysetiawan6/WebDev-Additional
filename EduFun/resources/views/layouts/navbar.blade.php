<style>
    .nav-link.active {
        text-decoration: underline;
    }
</style>

<nav class="navbar navbar-expand bg-body-tertiary px-4 py-3 shadow sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand">
            <img src="{{ asset('assets/logo/logo5.jpeg') }}" alt="logo" height="60" class="d-inline-block align-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav w-100 d-flex justify-content-end">
                <li class="nav-item">
                    <a id="home" class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="category" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item"
                                href="{{ route('category', ['cat_name' => 'Interactive Multimedia']) }}">Interactive
                                Multimedia</a></li>
                        <li><a class="dropdown-item"
                                href="{{ route('category', ['cat_name' => 'Software Engineering']) }}">Software
                                Engineering</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a id="writers" class="nav-link" href="{{ route('writers') }}">Writers</a>
                </li>
                <li class="nav-item">
                    <a id="about" class="nav-link" href="{{ route('about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a id="popular" class="nav-link" href="{{ route('popular') }}">Popular</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
