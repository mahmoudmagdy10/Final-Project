@extends('layout.app')

@section('content')
    <form action="">
        <div class="arch">
            <div class="container">
                <h1>Architectural Styles</h1>
                <p>Choose with a unique selection of different architectural styles around the world</p>

                <div class="italy">
                    <iframe src="https://sketchfab.com/models/8b877b1776794c139d80fd93999003f0/embed"> </iframe>     
                    <div class="box">
                        <h3>italy style</h3>
                        <p>Discover the Italian architecture.</p>
                        <a href="#">read more</a>
                    </div>
                </div>
                <div class="uk">
                    <div class="box">
                        <h3>uk style</h3>
                        <p>Discover the UK  architecture.</p>
                        <a href="#">read more</a>
                    </div>
                    <iframe src="https://sketchfab.com/models/8b877b1776794c139d80fd93999003f0/embed"> </iframe>     
                </div>
                
                <div class="American ">
                    <iframe src="https://sketchfab.com/models/8b877b1776794c139d80fd93999003f0/embed"> </iframe>     
                    <div class="box">
                        <h3>American <style></style></h3>
                        <p>Discover the USA architecture.</p>
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- start 3d,2d  -->
        <div class="pro">
            <div class="container">
                <div class="threedmodel">
                    <input type="file"name="three"placeholder="please choose your 3d model "class="three">
                </div> 
                <div class="twodmodel">
                    <input type="file"name="two"required class="two">
                </div>
            </div>
        </div>
    </form>
@endsection