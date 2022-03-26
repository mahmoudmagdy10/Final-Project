@extends('layout.app')

@section('content')
    <div class="title">
        <div class="container">
            <div class="info">
            <h3>Architectural Styles</h3>
            <p>Choose with a unique selection of different architectural styles around the world</p>
        </div>
        <div class="box-one">
            <img src="{{asset('image-home/photo-1599809275671-b5942cabc7a2.jpeg')}}" alt="">
            <div class="det">
                <h3>Italy style</h3>
                <p>Discover the Italian architecture.</p>
                <a href="#">read more</a>
            </div>
        </div>
        <div class="box-two">
            <div class="det">
                <h3>UK style</h3>
                <p>Discover the UK  architecture.</p>
                <a href="#">read more</a>
            </div>
            <img src="{{asset('image-home/photo-1564013799919-ab600027ffc6.jpeg')}}" alt="">
            
        </div>
        <div class="box-three">
            <img src="{{asset('image-home/photo-1592595896551-12b371d546d5.jpeg')}}" alt="">
            <div class="det">
                <h3>American style</h3>
                <p>Discover the USA architecture</p>
                <a href="#">read more</a>
            </div>
        </div>
        </div>
    </div>
    <!-- <div class="deta">
        <div class="container">
            <div class="more">
                <p>upload your 3d model</p>
            </div>
            <div class="data">
        <form action="">
            <h3>details about your project</h3>
            <label for="">Masonry veneer area in square feet</label><br>
            <input type="text"><br>
            <label for="">rooms</label><br>
            <input type="text"><br>
            <label for="">Type of roof</label><br>
            <input type="text"><br>
            <label for="">floors</label><br>
            <input type="text"> <br>
            <label for="">Type of foundation</label><br>
            <input type="text"><br>
            <label for="">Style of dwelling</label><br>
            <textarea name="" id="" cols="80" rows="10"></textarea>
            <label for="">Electrical system</label><br>
            <input type="date"><br>
            <div class="alone">
            <input class="me"type="checkbox"><label for=""> By checking this box and submitting your information, you are granting us permission to email you. You may unsubscribe at any time,By clicking Agree, you agree to our product and privacy policy and the information you entered</label>
        </div>
        <div class="robot">
            <input type="checkbox">
            <label for="">i`am not arobot</label>
        </div>
        <input type="submit"value="submit"name="btn">
    </form>
            </div>
        </div>
    </div> -->

    <!-- start 3d,2d  -->
    <div class="pro">
        <div class="container">
            <h2>see your project as......</h2>
            <div class="one"id="one"> 3D project</div>
            <div class="two"id="two"> 2D project</div>
            <div id="first"><p>your project in 3D</p></div>
            <div id="second"><p>your project in 2D</p></div>
        </div>
    </div>
    <!-- end 3d,2d  -->
@endsection
