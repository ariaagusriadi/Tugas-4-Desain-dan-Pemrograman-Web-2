<!DOCTYPE html>
<html lang="en">

<head>
    <title>Curyy store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="{{ url ('public/src_frontend') }}/assets/css/bootstrap.min.css ">
    <link rel="stylesheet" href="{{ url ('public/src_frontend') }}/assets/css/templatemo.css">
    <link rel="stylesheet" href="{{ url ('public/src_frontend') }}/assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{ url ('public/src_frontend') }}/assets/css/fontawesome.min.css">
    <!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>


    <!-- Header -->
    @include('template.frontend.section.navbar')
    <!-- Close Header -->

   


    
    @yield('content_frontend')





    <!-- Start Footer -->
    @include('template.frontend.section.footer')
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="{{ url ('public/src_frontend') }}/assets/js/jquery-1.11.0.min.js"></script>
    <script src="{{ url ('public/src_frontend') }}/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{ url ('public/src_frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url ('public/src_frontend') }}/assets/js/templatemo.js"></script>
    <script src="{{ url ('public/src_frontend') }}/assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>
