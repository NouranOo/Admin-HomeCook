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
        <title>Home Cook</title>

        <!-- Fave Icons
        ================================-->
        <link rel="shortcut icon" href="assets/images/fav-icon.png">
        
        <!-- Google Web Fonts 
		===========================-->        
        <link href="https://fonts.googleapis.com/css?family=Cairo:400,600&amp;subset=arabic" rel="stylesheet"> 
        
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
       <div class="log-wrap">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-sm-12">
                       <div class="login-register">
                           <div class="logo"><img src="assets/images/logo.png"></div>
                           <form action="{{url('postlogin')}}" method="post" class="login-form">
                               @csrf
                               <div class="form-group">
                                   <input type="text" name="email"placeholder="Email Address" class="form-control">
                               </div>
                               <div class="form-group">
                                   <input type="password" name="password"placeholder="Password" class="form-control">
                               </div>
                               <div class="form-group">
                                   <div class="remmeber">
                                       <input id="remmeber" name="remember"type="checkbox">
                                       <label for="remmeber">Remember me</label>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <button class="custom-btn">login</button>
                               </div>
                               <!-- <input type="hidden" -->
                               <div class="spacer-15"></div>
                           </form>
                       </div>
                   </div>
               </div><!--End row-->
           </div>
        </div>
        <!-- JS Base And Vendor 
        ===================================-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="assets/vendor/datatables.min.js"></script>
        <script src="assets/vendor/count-to/jquery.countTo.js"></script>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <!--JS Main
        ====================================-->
        <script src="assets/js/main.js"></script>
    </body>
</html>