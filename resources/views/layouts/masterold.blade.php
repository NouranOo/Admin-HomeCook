<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
  <!---bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!---bootstrap-->
  <link rel="stylesheet" type="text/css" href="/vendors/css/bootstrap.min.css">
  <!---normalize-->
  <link rel="stylesheet" type="text/css" href="/vendors/css/normalize.min.css">
  <!---font-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <!---style-->
  <link rel="stylesheet" type="text/css" href="/resources/css/style.css">
  <!---queries-->
  <link rel="stylesheet" type="text/css" href="/resources/css/queries.css">
  <!---animate-->
  <link rel="stylesheet" type="text/css" href="/vendors/css/animate.css">
  <!---fontawesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css"
    integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

  <link rel="icon" href="/resources/imgs/favicon.png">
  <title>CureScripe | @yield('title')</title>

</head>

<body>
    @include('includes.header')

     
           @yield('content')
     





@include('includes.footer')
     
        @include('includes.scripts')
      
      </body>
      
      </html>