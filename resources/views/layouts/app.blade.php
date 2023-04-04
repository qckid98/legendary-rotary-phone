<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
    <script src="https://malsup.github.io/jquery.cycle2.js"></script>
    <script src="https://malsup.github.io/jquery.cycle2.scrollVert.js"></script>
    @stack('styles')
    <style>
    .navbar-top {
    background-color: rgba(0,0,0,0.95);
    }
    .navbar-transparent {
    background-color: rgba(0,0,0,0.90);
    }
    </style>
</head>
<body>
    @include('navbar')
    @yield('content')
    @include('footer')
    @stack('scripts')
    <script>
    const navbar = document.querySelector('.navbar');
    const navbarHeight = navbar.offsetHeight;

    window.addEventListener('scroll', () => {
        if (window.pageYOffset > navbarHeight) {
            navbar.classList.add('navbar-transparent');
        } else {
            navbar.classList.remove('navbar-transparent');
        }
    });

    $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        autoWidth:true,
        loop:true,
        autoplay: true,
        autoplayTimeout:10000,
        dots: false,
        onInitialized: startProgressBar,
        onTranslate: resetProgressBar,
        onTranslated: startProgressBar
    });
    function startProgressBar() {
        // apply keyframe animation
        $(".slide-progress").css({
            width: "100%",
            transition: "width 10000ms"
        });
        }

        function resetProgressBar() {
        $(".slide-progress").css({
            width: 0,
            transition: "width 0s"
        });
        }
        //Init progressBar where elem is $("#owl-demo")
        function progressBar(elem){
        $elem = elem;
        //build progress bar elements
        buildProgressBar();
        //start counting
        start();
    }
    });
    </script>
</body>
</html>