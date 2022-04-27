@extends('customer.layout.app')

@section('content')
    <form class="arch">
        <div class="constr">
            <h1>Architectural Styles</h1>
            <p>Choose with a unique selection of different architectural styles around the world</p>
            <div class="container">
                <div class="box">
                    <div class="fram">
                        <iframe src="https://sketchfab.com/models/8b877b1776794c139d80fd93999003f0/embed"> </iframe>
                    </div>
                    <div class="box-det">
                        <h3>italy<br> style</h3>
                        <p>Discover the Italian <br>architecture.</p>

                        <label>
                            <input type="radio" id="Italian" name="Italian" value="Italian">
                            <span class="one">Italian</span>
                        </label>
                    </div>
                </div>
                <div class="box">
                    <div class="fram">
                        <iframe src="https://sketchfab.com/models/8b877b1776794c139d80fd93999003f0/embed"> </iframe>
                    </div>
                    <div class="box-det">
                        <h3>American <br>style</h3>
                        <p>Discover the USA<br> architecture.</p>

                        <label>
                            <input type="radio" id="Italian" name="Italian" value="Italian">
                            <span class="two">American</span>
                        </label>
                    </div>
                </div>
                <div class="box" class="border border-danger">
                    <div class="fram">
                        <iframe src="https://sketchfab.com/models/8b877b1776794c139d80fd93999003f0/embed"> </iframe>
                    </div>
                    <div class="box-det">
                        <h3>UK <br>style</h3>
                        <p>Discover the uk <br>architecture.</p>

                        <label>
                            <input type="radio" id="Italian" name="Italian" value="Italian">
                            <span class="three">UK</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" name="send" value="send" class="btn btn-light">
        </div>


    <!-- start 3d,2d  -->
        <div class="pro" class="kv-inner-background"
            style="-webkit-clip-path: url(#2a240d83-3653-4377-9dbf-2d88c590bf1f);clip-path: url(#2a240d83-3653-4377-9dbf-2d88c590bf1f);width: 100%;height: 100%;">
            <div class="tree" class="kv-ee-section kv-ee-section--sm kv-ee-align-left kv-content">
                <div class="threedmodel">
                    <h3>upload 3D model</h3>

                    <input type="file" name="three" placeholder="please choose your 3d model " class="three">
                </div>
            </div>
            <div class="twod">
                <div class="twodmodel">
                    <h3>upload 2D model</h3>
                    <input type="file" name="two" required class="two">
                </div>
            </div>
            <input type="submit" name="sub" value="send">
        </div>
    <div class="go">
        <div class="container">

            <h2>
                go
            </h2>
            <div class="to-p">
                <p>Please go to our app to predict the price of your house
                    and download a CSV file that predicted</p>
                <a href="#">go to app</a>
            </div>
        </div>
    </div>

    <!-- start csv  -->
    <div class="csv">
        <div class="container">
            <div class="csv-con">
                <h3>upload CSV file</h3>
                <input type="file" name="csv" placeholder="upload csv " class="csv-file">
            </div>
        </div>
    </div>
    <!-- end csv  -->
    
    <div class="sav">
        <div class="container">
            <h2>save project
            </h2>
            <div class="sav-cont">
                <p>When you save the project, it will be published automatically and an<br> alert will be sent to you
                    when a contractor chooses the project to sign <br>the contract and agreement
                </p>
                <input type="submit" name="sa" value="save">
            </div>
        </div>
    </div>
    </form>

@endsection
