<nav class="navbar navbar-expand-lg bg-white shadow-sm px-4 py-3 navbar-custom">
    <div class="container-fluid px-0">
        <a class="navbar-brand" href="{{ route('home') }}">
            <span class="d-flex flex-column text-uppercase text-xs fw-bold lh-sm">
                <span class="" style="letter-spacing: .12rem;">Furnish</span>
            </span></a>

        <div class="mx-auto d-lg-block d-none">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('testimonials') }}">Testimonials</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link " href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>

        <div class="d-flex align-items-center gap-4">
            <span class="d-flex align-items-center gap-2 fw-bold">
                <span>
                    <i class="bi bi-telephone"></i>
                </span>
                <span>+901234576</span>
            </span>
            <a class="d-md-none" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
            </a>
        </div>
    </div>
</nav>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header px-4">
        <a class="navbar-brand" href="#">
            <span class="d-flex flex-column text-uppercase text-xs fw-bold lh-sm">
                <span class="" style="letter-spacing: 0.12rem">Furnish</span>
            </span></a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="navbar-custom">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('testimonials') }}">Testimonials</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link " href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>