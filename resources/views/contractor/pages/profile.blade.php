@extends('contractor.layout.app')

@section('content')
<div class="container">
    <div class="main-body prof">
          <div class="">
            <div class="col-md-4 mb-3">
              <div class="card car-2">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                  @isset($contractor)
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{$contractor->name}}</h4>
                      <p class="text-secondary mb-1">{{$contractor->phone}}</p>
                      <p class="text-muted font-size-sm">{{$contractor->address}} , {{$contractor->country}}</p>
                  @endisset
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-8">
              <div class="card mb-3 car-3">
                <div class="card-body">
                @isset($contractor)
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$contractor->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$contractor->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    ***************
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$contractor->phone}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$contractor->address}},{{$contractor->country}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Company</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$contractor->company}}
                    </div>
                  </div>
                  <hr>

                  <div class="row form-actions">
                    <div class="col-sm-6">
                      <a class="btn btn-danger " href="{{route('contractor.edit',$contractor->id)}}">Edit</a>
                    </div>
                  </div>
                @endisset
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
@endsection