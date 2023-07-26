@extends('admin.layout')

@section('content')
  <div class="page-header">
    <h4 class="page-title">Updates</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="{{route('admin.dashboard')}}">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Zepson Updates</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Theme Version</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-title">Updates from zepson</div>
                </div>
            </div>
        </div>
        <div class="card-body pt-3 pb-4">
          <div class="row">
            <div class="col-lg-12 ">

              <h1>Please Kindly Contact <a href="https:zepson.co.tz"> Zepson Technologies</a> for any other Themes </h1>

            </div>
          </div>
        </div>

       
        
        
      </div>
    </div>
  </div>

@endsection
