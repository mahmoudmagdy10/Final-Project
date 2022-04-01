@extends('customer.layout.app')

@section('content')
<div class="title">
      <div class="container">
        <div class="info">
          <h3>Your project</h3>
        </div>
        <div class="box-one">
          <img src="{{asset('image-home/photo-1599809275671-b5942cabc7a2.jpeg')}}" alt="" />
          <div class="det">
            <h3>House</h3>
            <div>
              <p>costs: <span>120,000$</span></p>
              <p>publish in :yy-mm-hh</p>
            </div>

            <a href="#">edit</a>
          </div>
        </div>
        <div class="box-two">
          <div class="det">
            <h3>restaurant</h3>
            <div>
              <p>publish in :yy-mm-hh</p>
              <p>costs: <span>120,000$</span></p>
              <p>contractor:xyz Holding</p>
            </div>

            <a href="#">view contract</a>
          </div>
          <img src="{{asset('image-home/photo-1564013799919-ab600027ffc6.jpeg')}}" alt="" />
        </div>
      </div>
    </div>
@endsection
