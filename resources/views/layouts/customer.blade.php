<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/3babc5211c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">



    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .bg_green {
            background-color: #1A73E8 !important;
        }

        .text_green {
            color: #1A73E8 !important;
        }

        .btn_green {
            background: #1A73E8;
            color: #fff;
            padding: 10px 20px !important;
        }

        .navbar-brand {
            border-top: 2px solid #1A73E8 !important;
            border-bottom: 2px solid #1A73E8 !important;
            color: #1A73E8;
        }

        .hero_section {
            background-image: url('{{ asset("assets/img/banner2.jpg") }}');
            background-size: fill;
            background-repeat: no-repeat;
            /* background-image: linear-gradient(to top, #00FF00, #FFFF00, #00FFFF); */
        }

        .product_img {
            width: 100%;
            height: 200px;
        }

        .product_img img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .img-box {
            width: 500px !important;
            height: 400px !important;
        }


        .img-box img {
            width: 100% !important;
            height: 100% !important;
            object-position: cover;
        }

        .card-image {
            width: 300px !important;
            height: 300px !important;
        }


        .card-image img {
            width: 100% !important;
            height: 100% !important;
            object-position: cover;
        }

        a {
            text-decoration: none !important;
            color: #1A73E8;

        }

        .fixed-top {
            height: 4.5rem !important;
            z-index: 5000 !important;
        }

        .navbar>.container-fluid a:hover span {
            border-bottom: 2px solid #1A73E8 !important;
        }

        .navbar>.container-fluid a.active span {
            border-bottom: 2px solid #1A73E8 !important;
        }

        .zoom:hover {
            cursor: pointer;
            transform: scale(1.05);
            transition: all 0.3s linear;
        }

        .notbtn {
            width: 150px !important;
            height: 50px !important;
            padding: 10px !important;
            transition: all 0.5s;
            outline: none;
            border-style: none;
        }

        .notbtn:hover {
            background: transparent !important;
            color: white !important;
            border: 2px solid white;

        }

        .hello-card {
            cursor: pointer;
            transition: all 0.5s;
        }

        .hello-card:hover {
            transform: scale(1.04);
        }

        * {
            scroll-behavior: smooth;
        }


        .hello {
            width: 200px !important;
        }

        .hello input {
            color: #1A73E8 !important;
        }

        .btn:focus,
        .btn:active {
            outline: none !important;
            box-shadow: none;
        }

        .hello input::placeholder {
            color: #1A73E8 !important;
        }

        #loginblack {
            color: white !important;
        }

        #loginblack:hover {
            color: black !important;
        }

        .cus_hero {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .justify {
            text-align: justify;
        }

        .border-bottom-custom {
            border-bottom: 2px solid #1A73E8;
        }

        .dropdown-item:hover,
        .dropdown-item.active {
            background-color: #1A73E8 !important;
            color: #fff !important;
        }

        .btn_outline_green {
            color: #1A73E8;
            border-color: #1A73E8;
        }

        .btn_outline_green:hover {
            color: #fff;
            background-color: #1A73E8;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.15rem #1A73E8 !important;
            border: none !important;
        }
    </style>


    @yield('css')
</head>

<body>

    @include('layouts.inc.frontNavBar')

    <div class="content">
        @yield('content')
    </div>
    @include('layouts.inc.frontFooter')



    @if (session('status'))
    <script>
        swal("Done!", "{{session('status')}}", "success");
    </script>
    @endif

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @yield('scripts')

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>





<script>
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll < 50) {
            $('.fixed-top').css('background', 'transparent');
        } else {
            $('.fixed-top').css('background', 'white');
            $('.navbar>.container-fluid a').css('color', 'rgba(37,33,34,255)');
        }
    });
</script>
<script>
    $(function() {
        var availableTags = [
            "ActionScript",
            "AppleScript",
            "Asp",
            "BASIC",
            "C",
            "C++",
            "Clojure",
            "COBOL",
            "ColdFusion",
            "Erlang",
            "Fortran",
            "Groovy",
            "Haskell",
            "Java",
            "JavaScript",
            "Lisp",
            "Perl",
            "PHP",
            "Python",
            "Ruby",
            "Scala",
            "Scheme"
        ];
        $("#search_product").autocomplete({
            source: availableTags
        });
    });
</script>

<script>
  window.addEventListener("load" , () => {
    document.querySelector('.loaders').classList.add("loader--hidden")
    document.querySelector('.loaders').addEventListener("transitioned", () => {
      document.body.removeChild(document.querySelector('.loaders'));
    })
  })
</script>

</html>
