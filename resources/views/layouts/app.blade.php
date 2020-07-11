<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>I-Eon</title>
    <meta name="description" content="I-Eon is start up company">
    <meta name="keywords" content="ieon, i-eon, robotic company kerala, robotic company trivandrum, exo skeleton company kerala, exoskeleton company trivandrum, exo skeleton">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/css/magnific-popup.css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/themify-icons.css">
    <link rel="stylesheet" href="public/css/nice-select.css">
    <link rel="stylesheet" href="public/css/flaticon.css">
    <link rel="stylesheet" href="public/css/gijgo.css">
    <link rel="stylesheet" href="public/css/animate.css">
    <link rel="stylesheet" href="public/css/slick.css">
    <link rel="stylesheet" href="public/css/slicknav.css">
    <link rel="stylesheet" href="public/css/style.css">
    <!-- <link rel="stylesheet" href="public/css/responsive.css"> -->
    <style>
            .panel {
                    width: 100%;
                    height: 100%;
                    background: #798a84;
                    transform: perspective(600px) rotateY(16deg);
            }

            

            @media only screen and (max-width: 600px)  {
                 .panel_mob {
                    transform: perspective(600px) rotateY(0deg) !important; 
                    margin-top: 10px !important;
                }          
            }
</style>    
</head>
<body>

            @include('includes.header')
            @yield('content')
            @include('includes.footer')



    <!-- JS here -->
    <script src="public/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="public/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="public/js/popper.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/isotope.pkgd.min.js"></script>
    <script src="public/js/ajax-form.js"></script>
    <script src="public/js/waypoints.min.js"></script>
    <script src="public/js/jquery.counterup.min.js"></script>
    <script src="public/js/imagesloaded.pkgd.min.js"></script>
    <script src="public/js/scrollIt.js"></script>
    <script src="public/js/jquery.scrollUp.min.js"></script>
    <script src="public/js/wow.min.js"></script>
    <script src="public/js/nice-select.min.js"></script>
    <script src="public/js/jquery.slicknav.min.js"></script>
    <script src="public/js/jquery.magnific-popup.min.js"></script>
    <script src="public/js/plugins.js"></script>
    <script src="public/js/gijgo.min.js"></script>
    <script src="public/js/slick.min.js"></script>
    <!--contact js-->
    <script src="public/js/contact.js"></script>
    <script src="public/js/jquery.ajaxchimp.min.js"></script>
    <script src="public/js/jquery.form.js"></script>
    <script src="public/js/jquery.validate.min.js"></script>
    <script src="public/js/mail-script.js"></script>

    <script src="public/js/main.js"></script>

    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    </script>

     <script>
        $(document).scroll(function() {
        var y = $(this).scrollTop();

        var $window = $(window);
        var windowsize = $window.width();    
        if(windowsize > 1552){
            if (y > 110) {
                $('.triangle-1').removeClass('not-show');
                $('.triangle-2').removeClass('not-show');
                $('.second-main').addClass('not-show');
                console.log("yes");
            } else {
                $('.triangle-1').addClass('not-show');
                $('.triangle-2').addClass('not-show');
                $('.second-main').removeClass('not-show');
                console.log("no");
            }
        }
        if(windowsize < 668){
            if(y > 25){
                $('.second-main').addClass('second');
            }else{
                $('.second-main').removeClass('second');
            }
        }

        });
    </script>  

</body>
</html>
