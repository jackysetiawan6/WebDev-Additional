<div class="header">
    <nav class="navbar navbar-expand-lg flex-column p-0">
        <p class="fs-1 bg-primary text-center w-100 py-5 text-white fw-light mb-0">HAPPY BOOK STORE</p>
        <div class="container-fluid p-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{ route('/') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-primary dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item"
                                        href="{{ route('category', ['cat_id' => $category->id]) }}">{{ $category->category }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
