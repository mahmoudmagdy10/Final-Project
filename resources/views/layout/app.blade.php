<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>constructions</title>
        <link rel="stylesheet" href="{{asset('css/auth/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/home/one.css')}}">
        <link rel="stylesheet" href="{{asset('css/home/normalise.css')}}">
        <link rel="stylesheet" href="{{asset('css/home/one.css')}}">
        <link rel="stylesheet" href="{{asset('css/construct-style/construct-style.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap" rel="stylesheet">

    </head>
    <body>
<!-- start header  -->
     <header id="header">
       <div class="logo">
         <a href="{{route('api.homepage')}}"> <img src="{{asset('image-home/71b3e4159892bb319292ab3b76900930.jpg')}}" alt="logo"></a>
       </div>
       <ul class="navigation">
        <li><a href="{{route('api.homepage')}}">home</a></li>
        <li><a href="{{route('api.construction_style')}}">construction-style</a></li>
        <li><a href="your_project.html">your project</a></li>
        <li><a href="#offers">project(contractor)</a></li>
        <li><a href="#">project x</a></li>
        <li><a href="#">payement</a></li>
        </ul>
        <div class="bars">
            <i id="bar"class="fas fa-bars"></i>
        </div>
    </header>
     
    <!-- end header  -->
        <main class="py-4">
            @yield('content')
        </main>
        <script src=" {{asset('js/home/adham.js')}}"></script>
        <script src="js/we.js"></script>

    </body>
</html>