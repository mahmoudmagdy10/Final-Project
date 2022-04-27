@extends('customer.layout.app')
@section('link')
<link rel="stylesheet" href="{{asset('css/my_projects/my_project.css')}}">
@endsection

@section('content')
<div class="title">
    <div class="container">
        <div class="info">
            <h3>Your project</h3>
        </div>

        <div class="projects">
        @isset($customer)
          @foreach($props as $prop)
            <div class="card">
                <div class="box">
                    <div class="det">

                        <img src="{{asset('image-home/house2.jpg')}}" alt="" />
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
