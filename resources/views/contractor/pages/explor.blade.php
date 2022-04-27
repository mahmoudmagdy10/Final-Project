@extends('contractor.layout.app')

@section('link')
<link rel="stylesheet" href="{{asset('css/my_projects/my_project.css')}}">

@endsection

@section('content')

<div class="title kv-ee-section kv-ee-section--lg kv-full-page kv-content" style=" background-color: rgb(80,80,80);">
    <div class="container">
        <div class="info">
            <h3>My project</h3>
        </div>

        <div class="projects">
        @isset($contractor)
          @foreach($props as $prop)
            <div class="card">
                <div class="box">
                    <div class="det">
                        <a href="{{route('contractor.details',$contractor->id)}}">
                            <img src="{{asset('image-home/house2.jpg')}}" alt="" />
                        </a>                        
                        <ul>
                            <h3>House</h3>
                            Predict Salary : <li>{{$prop->PREDICTION}}</li>
                            Publish at : <li>{{$prop->created_at}}</li>
                        </ul>
                    </div>
                </div>
            </div>
          @endforeach
        @endisset
        </div>
    </div>
</div>
@endsection
