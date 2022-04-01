@extends('layout.app')

@section('content')
    <!-- start landing  -->
    <div class="home"id="home">
        <div class="container">
            <div class="content">
                <p>Do you have more to say and show? You can do it in this section.
                    Add pictures and a short description to show visitors more of
                    whatever it is you want.</p>        
                    <a href="{{route('api.index')}}">sign in</a>
            </div>
            <div class="details">
                <h1>Welcome to  Construction Project</h1>
            </div>
        </div>
    </div>
    <!-- end  landing  -->
    <!-- start section  -->
    <div class="section">
        <div class="container">
            <div class="text">
                <img src="{{asset('image-home/we.jpeg')}}" alt="">
                <div class="con-text">
                    <h2>Welcome to our website</h2>
                    <p>Do you have more to say and show? You can do it in this section. Add pictures and a short description to show visitors more of whatever it is you want.</p>
               <span>Add a description here.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- end section  -->
    <!-- start road map  -->
    <div class="road-map">
        <div class="info">
          <h1>Road Map</h1>
          <h3>if you a customer</h3>
          <p>follow this steps</p>
        </div>
        <div class="center-line">
          <a href="#" class="scroll-icon"><i class="fas fa-caret-up"></i></a>
        </div>
        <div class="row row-1">
          <section>
            <i class="icon fa-regular fa-1"></i>
            <div class="details">
              <span class="title">choose style </span>
            </div>
            <p>Choose your architecture or upload your own</p>
          </section>
        </div>
        <div class="row row-2">
          <section>
            <i class="icon fa-solid fa-2"></i>
            <div class="details">
              <span class="title">Fill out the form</span>
            </div>
            <p>Fill in your form with the required data to get the right price</p>
          </section>
        </div>
        <div class="row row-1">
          <section>
            <i class="icon fa-solid fa-3"></i>
            <div class="details">
              <span class="title">publish </span>
            </div>
            <p>If you agree to the price, publish your project to contractors</p>
          </section>
        </div>
        <div class="row row-2">
          <section>
            <i class="icon fa-solid fa-4"></i>
            <div class="details">
              <span class="title">contract </span>
            </div>
            <p>Upon approval, the contract will be signed</p>
          </section>
        </div>
      </div>
      <div class="road-map road-map1">
        <div class="info">
          <h3>if you a contractor</h3>
        </div>
        <div class="center-line">
          <a href="#" class="scroll-icon"><i class="fas fa-caret-up"></i></a>
        </div>
        <div class="row row-1">
          <section>
            <i class="icon fa-regular fa-1"></i>
            <div class="details">
              <span class="title">select project </span>
            </div>
            <p>
              Choose the project you want on the available projects page based on
              price
            </p>
          </section>
        </div>
        <div class="row row-2">
          <section>
            <i class="icon fa-solid fa-2"></i>
            <div class="details">
              <span class="title">make offer </span>
            </div>
            <p>You can add an offer to the project</p>
          </section>
        </div>
        <div class="row row-1">
          <section>
            <i class="icon fa-solid fa-3"></i>
            <div class="details">
              <span class="title">contract </span>
            </div>
            <p>Upon approval, the contract will be signed</p>
          </section>
        </div>
      </div>
    <!-- end road map  -->
    <!-- start footer  -->
    <div class="footer">
        <div class="container">
            <div class="nav">
                <ul>
                    <li><a href="#home">home</a></li>
                    <li><a href="#upload">construction styles</a></li>
                    <li><a href="#">your project</a></li>
                    <li><a href="#offers"> projects (contractor)</a></li>
                    <li><a href="#">Project x</a></li>
                    <li><a href="#">payment</a></li>
                </ul>
            </div>
            <div class="logo">
              <a href="#"> <img src="{{asset('image-home/71b3e4159892bb319292ab3b76900930.jpg')}}" alt="logo"></a>
            </div>
        </div>
    </div>
    <!-- end footer  -->
    <!-- start details -->
    <div class="data">
        <div class="container">
            <div class="address">address</div>
            <div class="content-det">
                <h2>About us</h2>
                <p>We are facilitating the creation of your property from scratch to finish</p>
            </div>
        </div>
    </div>
    <!-- end details -->
@endsection
