@extends('customer.layout.app')

@section('content')
    <form class="arch" action="{{route('customer.upload',$customer->id)}}" method="post" enctype="multipart/form-data">
        <div class="arch">
            <div class="container">
                <h1>Architectural Styles</h1>
                <p>Choose with a unique selection of different architectural styles around the world</p>

                <div class="italy">
                    <iframe src="https://sketchfab.com/models/8b877b1776794c139d80fd93999003f0/embed"> </iframe>     
                    <div class="box">
                        <h3>italy style</h3>
                        <p>Discover the Italian architecture.</p>
                        <input type="radio" id="Italian" name="arch" value="Italian">
                        <label for="Italian">Italian</label><br>
                    </div>
                </div>
                <div class="uk">
                    <div class="box">
                        <h3>uk style</h3>
                        <p>Discover the UK architecture.</p>
                        <input type="radio" id="Uk" name="arch" value="UK">
                        <label for="Uk">United Kingdom</label><br>
                    </div>
                    <iframe src="https://sketchfab.com/models/8b877b1776794c139d80fd93999003f0/embed"> </iframe>     
                </div>
                
                <div class="American ">
                    <iframe src="https://sketchfab.com/models/8b877b1776794c139d80fd93999003f0/embed"> </iframe>     
                    <div class="box">
                        <h3>American <style></style></h3>
                        <p>Discover the USA architecture.</p>
                        <input type="radio" id="American" name="arch" value="American">
                        <label for="American">American</label><br>
                    </div>
                </div>
            </div>
        </div>


        <!-- start 3d,2d  -->
        <div class="pro">
            <div class="container">
                <div class="threedmodel">
                    <input type="file" name="file" placeholder="please choose your 3d model "class="three">
                </div> 
                <div class="twodmodel">
                    <input type="file" name="file" required class="two">
                </div>
                <div class="twodmodel">
                    <input type="file" name="csv" required  class="two">
                </div>
            </div>
        </div>
        <a class="a btn btn-outline-danger" href="https://app2.datarobot.com/applications/623a7b9c1c18a6ff3e774826/" target="_blank">predict</a>

        <input type="submit" class="btn btn-outline-primary">
    </form>
@endsection
