<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Patti's Paradoxes: An independent software solutions company providing the best web applications at the best time. ">
    <meta name="author" content="Patti's Paradoxes | Hunter Patti">
    <title>Patti's Paradoxes: Software Consulting and Development</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/app.css">
    <!-- Javascript -->
    <script src="/js/app.js"></script>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/93e46e2d38.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="primary-content">
<div class="container">
    <header class="py-3">
        <div class="row flex-nowrap align-items-center">
            <div class="col-4 pt-1">
                <a class="link-secondary d-none" href="#">Subscribe</a>
            </div>
            <div class="col-4 text-center">
                <img src="img/Patti's Paradoxes Logo 2021 Long.svg" alt="Patti's Paradoxes Logo" class="img-fluid">
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center disabled d-none">
                <a class="btn btn-sm btn-outline-secondary" href="/login">Login</a>
            </div>
        </div>
    </header>
</div>
    <div class="nav-scroller py-1 mb-2 container">
        <nav class="navbar sticky-top navbar-expand-lg bg-secondary navbar-dark rounded">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                    <ul id="mainNavigation" class="navbar-nav row w-100">
                        <li class="nav-item col"><a href="/" class="nav-link text-light">Home</a></li>
                        <li class="nav-item col"><a href="/products" class="nav-link text-light">Products & Services</a></li>
                        <li class="nav-item col"><a href="/portfolio" class="nav-link text-light">Portfolio</a></li>
                        <li class="nav-item col"><a href="/about" class="nav-link text-light">About Us</a></li>
                        <li class="nav-item col disabled d-none"><a href="/blog" class="nav-link text-light">Blog</a></li>
                        <li class="nav-item col"><a href="/contact" class="nav-link text-light">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @yield('main')
    <footer class="container-fluid bg-secondary text-center text-lg-start text-light p-2 align-items-center">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h4 class="fw-bold">About the Company</h4>
                <div class="container">
                    <p>Patti's Paradoxes is an independent software and web application solutions company based in Northern Nevada. We aim to provide the best possible service and content to our customers to meet their budgetary needs and time restrictions.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h4 class="fw-bold">Contact Us</h4>
                <div class="container">
                    <ul class="list-unstyled">
                        <li><i class="fas fa-phone"></i>  (775) 470-2487</li>
                        <li><i class="fas fa-envelope"></i>  sales@pattisparadoxes.net</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h4 class="fw-bold">Sitemap</h4>
                <div class="container">
                    <ul class="list-unstyled text-start">
                        <li><a class="text-light" href="/">Home</a></li>
                        <li><a class="text-light" href="/products">Products & Services</a></li>
                        <li><a class="text-light" href="/portfolio">Portfolio</a></li>
                        <li><a class="text-light" href="/about">About Us</a></li>
                        <li><a class="text-light disabled d-none" href="/blog">Blog</a></li>
                        <li><a class="text-light" href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3">
            &#169; 2021 Copyright <a class="text-light" href="/index">Patti's Paradoxes</a>
        </div>
    </footer>
</div>





<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<!-- Hubspot JS -->
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/20975247.js"></script>
<!-- End of HubSpot Embed Code -->
</body>
</html>
