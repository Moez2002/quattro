@extends('layouts._app')
@section('content')
@php
    $gettitle = App\Models\home11block1model::getRecord();
    $getRecentTitle = App\Models\home11block1model::orderBy('id', 'desc')->first();
@endphp
<section class="home_banner_01">
    <div class="home-carousel owl-theme owl-carousel">
    @foreach($gettitle as $value_home1_title)
 
      <div class="slide-item">
        <div class="image-layer" data-background="{{ asset("public/home/home1block1/{$value_home1_title->image}") }}"></div>
        <div class="auto-container">
          <div class="row clearfix">
            <div class="col-xl-12 col-lg-12 col-md-12 content-column">
              <div class="content-box">
                <h1 class="home-carousel-title"> {{$value_home1_title->Title_en}}</h1>
                <p class="home-carousel-text">{{$value_home1_title->description_en}}</p>
                <div class="btn-box">
                  <a href="{{ $value_home1_title->link }}" class="animate-btn-style3">{{$value_home1_title->namelink_en}} <i class="fa fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach  
    </div>
  </section>
  <section class="professional-section">
    <div class="container">
      <div class="row about-section">
        <div class="col-md-12 col-lg-8 col-xl-6">
          <div class="about-image-box-style1 about-side-line">
            <figure class="about-image2">
              <img class="img-full image" src="{{ asset("public/home/home1block5/".$home1block5->proffimage)}}" alt="" />
            </figure>
          </div>
        </div>
        <div class="col-md-12 col-lg-4 col-xl-6 content-professionel">
          <h4 class="side-line-left-professionel subtitle text-primary-color"><b>{{$home1block5->nameproff}}</b></h4>
          <h5 class="side-line-left-professionel-mini subtitle text-primary-color">{{$home1block5->proffjob}}</h5>
          <h2 class="titre-about">{{$home1block5->title}}</h2>
          <p class="catalogue-text-block">{{$home1block5->description}}</p>

        </div>
      </div>
    </div>
  </section>
 @endsection 