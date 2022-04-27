<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>constructions</title>
        
        <link rel="stylesheet" href="{{asset('css/auth/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/home/home.css')}}">
        <link rel="stylesheet" href="{{asset('css/home/profile.css')}}">
        <link rel="stylesheet" href="{{asset('css/construct-style/construct-style.css')}}">
        <link rel="stylesheet" href="{{asset('css/my_projects/contractor_projects.css')}}">
        <link rel="stylesheet" href="{{asset('css/my_projects/construct-style.css')}}">
        <link rel="stylesheet" href="{{asset('css/construct-style/normalise.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" >
        @yield('link')

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
                <li><a href="{{route('contractor.explor',$contractor->id)}}">Explor</a></li>
                <li><a href="{{route('contractor.my_projects',$contractor->id)}}">My Projects</a></li>
                <li><a href="#">payement</a></li>
                <li class="icon_profile">
                    <div class ="pop_up">
                        <a href="{{route('contractor.my_projects',$contractor->id)}}">My Projects</a>
                        <hr>
                        <a href="{{route('contractor.profile',$contractor->id)}}">Edit</a>
                        <hr>
                        <a href="{{route('contractor.logout',$contractor->id)}}">Log Out</a>
                    </div>
                </li>
            @endisset
            </ul>

        <div class="bars">
            <i id="bar"class="fas fa-bars"></i>
        </div>
        </header>
    <!-- end header  -->
        <main>
            @yield('content')
        </main>

        <script src=" {{asset('js/home/adham.js')}}"></script>
        <script src=" {{asset('js/home/we.js')}}"></script>
        <script src=" {{asset('js/edit.js')}}"></script>
    </body>
</html>