<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Public Art Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> 
</head>
<body>
    <?php
        // Get the current page name
        $current_page = basename($_SERVER['PHP_SELF']);
    ?>
    <header>
        <nav class="navbar navbar-expand-lg position-relative p-0 h-100">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="{{URL::asset('/images/logo.png')}}" alt="Galleria-Logo" /></a>
                <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavBar"
                    aria-controls="mainNavBar" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="navbar-toggler-icon fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="mainNavBar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Home</a>
                        </li>
                    </ul>
                    <div class="user-header d-flex align-items-center">
                        <a href="/register" class="btn btn-primary">Register</a>
                        <a href="/login" class="btn btn-warning">
                            <svg height="45.6" width="125.738"><rect height="45.6" width="125.738"></rect></svg>
                            <span class="btn-text">Login</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
            @yield('content')
    </main>
    <footer id="footer">
        <div class="container footer-top">
            <div class="row">
                <div class="footer-widget col-12 col-md-6 col-lg-4">
                    <a href="/">
                        <img src="{{URL::asset('/images/logo-sub.png')}}" alt="Galleria Logo">
                    </a>
                    <ul class="footer-widget-text mt-4">
                        <li>
                            <a href="https://www.google.com/maps/place/Humber+College/@43.7292969,-79.6060471,16.64z/data=!3m1!5s0x882b3bada90c35b5:0x286a1fa9174ba649!4m15!1m8!3m7!1s0x882b3a5159f96ae9:0xfd21e074492c4de5!2s115+Humber+College+Blvd,+Etobicoke,+ON+M9V+1R8!3b1!8m2!3d43.7303879!4d-79.5997716!16s%2Fg%2F11ghs95y8w!3m5!1s0x882b3a5391c12321:0x747f0c3b5cdecaa0!8m2!3d43.7288232!4d-79.6065799!16zL20vMDMxcnMz?entry=ttu" rel="noopener noreferrer">
                                2354 Humber College Blvd, Toronto, ON, Canada
                            </a>
                        </li>
                        <li>
                            <a href="tel:+15555555555">555-555-5555</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-widget col-12 col-md-6 col-lg-4 mt-4 mt-md-0">
                    <p class="footer-widget-header">Quick Links</p>
                    <ul class="footer-widget-text mt-4">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Art</a>
                        </li>
                        <li>
                            <a href="#">Map</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-widget col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <p class="footer-widget-header">Follow Us</p>
                    <ul class="footer-widget-text mt-4">
                        <li>
                            <a href="#">Facebook</a>
                        </li>
                        <li>
                            <a href="#">Instagram</a>
                        </li>
                        <li>
                            <a href="#">Twitter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-4">
            <div class="container">
                <p class="mb-0">&copy; 2019 Galleria - Toronto Public Art Gallery, All Rights Reserved</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" 
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" 
    integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
        @if( Session::has('info'))
            toastr.info("{{ Session::get('info') }}")
        @endif
        @if( Session::has('error'))
            toastr.info("{{ Session::get('error') }}")
        @endif
    </script>


</body>
</html>