<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ url('public/shop1') }}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public/shop1') }}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public/shop1') }}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public/shop1') }}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public/shop1') }}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public/shop1') }}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public/shop1') }}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public/shop1') }}/css/style.css" type="text/css">

    <link rel="stylesheet" href="{{ asset('/public/assets/js/bootstrap.bundle.min.js') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/public/assets/js/templatemo.js') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/public/assets/js/custom.js') }}" type="text/css">

    @stack('style')
    <!--
        
    TemplateMo 559 Zay Shop
    
    https://templatemo.com/tm-559-zay-shop
    
    -->    

</head>

<body class="sub_page">

    @include ('client.section.navbar')

  <!-- content section -->

  @yield('content_front')

  <!-- end content section -->


  <!-- footer section -->
  @include ('client.section.footer')>
  <!-- end  footer section -->

  <script type="text/javascript" src="{{ url('public/shop1') }}/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="{{ url('public/shop1') }}/js/bootstrap.js"></script>
  <script type="text/javascript" src="{{ url('public/shop1') }}/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

  
    <!-- Js Plugins -->
    <script src="{{ url('public/shop1') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ url('public/shop1') }}/js/bootstrap.min.js"></script>
    <script src="{{ url('public/shop1') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ url('public/shop1') }}/js/jquery-ui.min.js"></script>
    <script src="{{ url('public/shop1') }}/js/jquery.slicknav.js"></script>
    <script src="{{ url('public/shop1') }}/js/mixitup.min.js"></script>
    <script src="{{ url('public/shop1') }}/js/owl.carousel.min.js"></script>
    <script src="{{ url('public/shop1') }}/js/main.js"></script>

  @stack('script')
    <script src="{{ asset('/public/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/public/assets/js/templatemo.js') }}"></script>
    <script src="{{ asset('/public/assets/js/custom.js') }}"></script>

</body>

</html>