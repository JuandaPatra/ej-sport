<!doctype html>
<html lang="en" class="overflow-x-hidden">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="auth-check" content="{{ (Auth::check()) ? 'true' : 'false' }}">
    <title>EJSport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">





    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <style>
        .kotak5 {
            margin: 20px;
            float: left;
            background: yellow;
            /* width: 280px; */
            width: 330px;
            /* height: 200px; */
            height: 350px;
            -ms-transform: skewX(-20deg);
            /* Support untuk IE 9 */
            -webkit-transform: skewX(-20deg);
            /* support untuk Safari */
            transform: skewX(-20deg);
            transform: skewX(-18deg);
            /* default syntax */
        }


        .navbar-button:hover {
            color: #E61E1E !important;
        }

        .button-reg:hover{
            color: grey !important;
        }

        .border-gagal {
            border: 1px solid red !important;
        }

        .kotak6 {
            margin: 20px;
            float: left;
            background: yellow;

            /* height: 350px; */
            -ms-transform: skewX(-20deg);
            /* Support untuk IE 9 */
            -webkit-transform: skewX(-20deg);
            /* support untuk Safari */
            transform: skewX(-20deg);
            transform: skewX(-18deg);
            /* default syntax */
        }

        .kotak4 {
            margin: 20px;
            float: left;
            background: black;

            -ms-transform: skewX(-20deg);
            /* Support untuk IE 9 */
            -webkit-transform: skewX(-20deg);
            /* support untuk Safari */
            transform: skewX(-20deg);
            transform: skewX(-18deg);
            /* default syntax */
        }


        .kotak3 {
            margin: 1px;
            float: left;
            -ms-transform: skewX(-20deg);
            /* Support untuk IE 9 */
            -webkit-transform: skewX(-20deg);
            /* support untuk Safari */
            transform: skewX(-20deg);
            transform: skewX(-18deg);
            /* default syntax */
        }
    </style>

</head>

<body class="overflow-x-hidden">
    @yield('container')
    @stack('javascript-internal')


</body>

</html>