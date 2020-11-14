<!DOCTYPE html>
<html>

    <head>
        <!-- Meta Tags
        ======================-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta NAME="keywords" CONTENT="" />
        <meta NAME="copyright" CONTENT="" />  
        
        <!-- Title Name
        ================================-->
        <title>@yield('title')</title>

        <!-- Fave Icons
        ================================-->
        <link rel="shortcut icon" href="assets/images/fav-icon.png">
       
        <!-- Css Base And Vendor 
        ===================================-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="assets/vendor/animation/animate.css">
        
        <!-- Site Css
        ====================================-->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        @yield('modals')
        <div id="wrapper">
            <div class="main">
            @include('includes.header')
            @yield('content')
           </div><!--End Main-->
        </div><!--End wrapper-->
        
      @include('includes.scripts')
    </body>
</html>