@extends('master')
@section('content')

<div class="jumbotron jumbotron-fluid subtitle">
        <div class="container">
            
        </div>
 </div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
<div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('frontend/img/busone.jpg')}}" class="d-block  bannerImg" alt="..." >
        </div>
        <div class="carousel-item">
            <img src="{{ asset('frontend/img/bustwo.jpg')}}" class="d-block  h-100 bannerImg" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('frontend/img/busthree.jpg')}}" class="d-block  h-50 bannerImg" alt="...">
        </div>
      </div>
    </div>
@endsection