<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Loan Marketplace') }}</title>
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/a3be13e372db42f1857d17911/cc71549cf4a229a5d7dd9d768.js");</script>
</head>
<body>
    <!-- Main Header -->
    @include('partials.header')

    <!-- Main content -->
    @yield('content')

    <!-- Main Footer -->
    @include('partials.footer')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
   <script>


    $(document).ready(function() {
     // executes when HTML-Document is loaded and DOM is ready

    // breakpoint and up  
    $(window).resize(function(){
      if ($(window).width() >= 980){  

          // when you hover a toggle show its dropdown menu
          $(".navbar .dropdown-toggle").hover(function () {
             $(this).parent().toggleClass("show");
             $(this).parent().find(".dropdown-menu").toggleClass("show"); 
           });

            // hide the menu when the mouse leaves the dropdown
          $( ".navbar .dropdown-menu" ).mouseleave(function() {
            $(this).removeClass("show");  
          });
      
        // do something here
      } 
    });  
      
      

    // document ready  
    });


   </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                 nav: true,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: true
                  },
                  1000: {
                    items: 7,
                    nav: true,
                    dots: false,
                    loop: false,
                    margin: 10
                  }
                }
              })
            })
          </script>
            <script src="/js/jquery.paroller.min.js"></script>

<script>
    $(document)
        .ready(function () {
            //initialize paroller.js
            $('[data-paroller-factor]').paroller();
            //initialize paroller.js and set options for elements with .paroller class
            $('.paroller-example').paroller({
                factorXs: 0.1,
                factorSm: 0.1,
                factorMd: -0.4,
                factorLg: -0.5,
                factorXl: -0.6,
                factor: -0.4,
                type: 'foreground',
                direction: 'horizontal',
                transition: 'transform .3s ease-out'
            });
        });
</script>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>
</body>
</html>
