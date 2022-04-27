<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>constructions</title>
        
        <link rel="stylesheet" href="{{asset('css/auth/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/home/home.css')}}">
        <link rel="stylesheet" href="{{asset('css/construct-style/construct-style.css')}}">
        <link rel="stylesheet" href="{{asset('css/construct-style/normalise.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Merriweather:ital,wght@0,300;0,400;0,700;1,300&family=Nunito+Sans:wght@300;400&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Merriweather:ital,wght@0,300;0,400;0,700;1,300&family=Nunito+Sans:wght@300;400&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?display=swap&amp;family=Libre+Baskerville:400,700|Nunito:300,400,700" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap" rel="stylesheet"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>
    <!-- start header  -->
        <header id="header">
        <div class="logo">
            <a href="#"><span>construction project</span></a>
        </div>
        <ul class="navigation" class="kv-ee-menu kv-ee-menu-item-wrapper" data-dynamic-navigation-element="nav">
        @isset($contractor)
                <li><a class="accept" href="{{route('contractor.homepage',$contractor->id)}}">Home</a></li>
                <li><a href="">upload</a></li>
                <li><a href="">My Projects</a></li>
                <li><a href="#">payement</a></li>
            @endisset
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
        <script src=" {{asset('js/home/we.js')}}"></script>
    </body>
</html>