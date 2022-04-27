@extends('contractor.layout.app')

@section('link')
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?display=swap&amp;family=Libre+Baskerville:400,700|Nunito:300,400,700"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/my_projects/my_project.css')}}">
    <link rel="stylesheet" href="{{asset('css/auth/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/construct-style/normalise.css')}}">


@endsection
@section('content')
<div class="title kv-ee-section kv-ee-section--lg kv-full-page kv-content" style=" background-color: rgb(80,80,80);">
    <div class="container">
        <div class="info">
            <h3>My project</h3>
        </div>

        <div class="projects">
            <div class="card">
                <div class="box">
                    <div class="det">
                        <a href="{{route('contractor.details',$contractor->id)}}">
                            <img src="{{asset('image-home/house2.jpg')}}" alt="" />
                        </a>                        
                        <ul>
                            <h3>House</h3>
                            Predict Salary : <li></li>
                            Publish at : <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>@endsection
