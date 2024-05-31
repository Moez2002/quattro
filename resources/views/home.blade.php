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
                <h1 class="home-carousel-title"> {{$value_home1_title->title}}</h1>
                <p class="home-carousel-text">{{$value_home1_title->description}}</p>
                <div class="btn-box">
                  <a href="{{ $value_home1_title->link }}" class="animate-btn-style3">{{$value_home1_title->namelink}} <i class="fa fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach  
    </div>
  </section>

@php
    $gettitle = App\Models\home11block2model::getRecord();
@endphp
  @foreach($gettitle as $value_home1_title)
  <section class="about-section">
    <div class="container">
      <div class="row about-section">
        <div class="col-md-12 col-lg-8 col-xl-6">
          <div class="about-image-box-style1 about-side-line">
            <figure class="about-image2">
              <img class="img-full image" src="{{ asset("public/home/home1block2/{$value_home1_title->image}") }}" alt="" />
            </figure>
          </div>
        </div>
        <div class="col-md-12 col-lg-4 col-xl-6 content-about">
          <h5 class="side-line-left subtitle text-primary-color">About us</h5>
          <h2 class="titre-about">{{$value_home1_title->title}}</h2>
          <p class="about-text-block">{{$value_home1_title->description}}</p>
          <div class="btn-about">
            <a href="{{ $value_home1_title->link }}">Continue reading <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach
  <section class="products">
    <h5 class="subtitle-products">Products</h5>
    <h2 class="title-products">Our products</h2>
    <div class="bloc-procuits">
      <div class="bloc-top-produits">
      @php
          $gettoptitle = App\Models\home11block3model::getRecord();
          $counter = 0;
      @endphp
        @foreach($gettoptitle as $value_home1_title)
        <a href="#" class="item-produit">
          <img src="{{ asset("public/home/home1block3/{$value_home1_title->image}") }}">
          <div class="content-produit ">{{$value_home1_title->title}} <i class="fas fa-angle-double-right"></i></div>
        </a>
        @php
            $counter++;
            if($counter >= 2) {
                 break;}
        @endphp
        @endforeach
      </div>
      <div class="bloc-bottom-produits">
        @php
            $getBottomTitle = App\Models\home11block3model::getRecord(); // Fetch records for the bottom section
            $counter = 0;
        @endphp
        @foreach($getBottomTitle as $value_bottom_title)
        @php
            $counter++;
            if($counter <= 2) {
                continue; // Skip first two titles
            }
        @endphp
        <a href="#" class="item-produit">
            <img src="{{ asset("public/home/home1block3/{$value_bottom_title->image}") }}">
            <div class="content-produit">{{$value_bottom_title->title}} <i class="fas fa-angle-double-right"></i></div>
        </a>
        @endforeach
      </div>
    </div>
  </section>
  @php
    $gettitle = App\Models\home11block4model::getRecord();
  @endphp
  @foreach($gettitle as $value_home1_title) 
  <section class="video-section bg-no-repeat bg-cover bg-pos-cb  custom-background " style="position: relative;">
    <div class="container">
      <!-- Black background column -->
      <div class="row">
        <div class="col-lg-6 black-background" >
          <h2 class="text-white mrb-30 mrb-sm-30 custom-font">
            {{$value_home1_title->title}}
            </h2>
            <p class="text-white mrb-40">{{$value_home1_title->description}}</p>
            <div class="btn-about">
              <a href="{{ $value_home1_title->linkmorevids }}">More Videos <i class="fa fa-arrow-right"></i></a>
            </div>
        </div> 
        
        <!-- Image column -->
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
          <div class="image-video-block">
            <div class="icon-wrapper">
              <a class="video-popup" href="{{ $value_home1_title->link }}">
                <i class="base-icon-play1"></i>
              </a>
            </div>
            <div class="img-video-popup">
              <img class="img-ful modifed-image" src="{{ asset("public/home/home1block4/{$value_home1_title->image}") }}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach
@php
    $gettitle = App\Models\home11block5model::getRecord();
    $getRecentTitle = App\Models\home11block5model::orderBy('id', 'desc')->first();
@endphp
<section class="professional-team edit-products-title">
    <h5 class="subtitle-products">Projects</h5>
    <h2 class="title-products">Our projects with professionals</h2>
    <div class="section-content">
        <div class="row">
            @foreach($gettitle as $value_home1_title)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="project-item-style1">
                    <div class="project-item-thumb">
                        <img src="{{ asset("public/home/home1block5/{$value_home1_title->image}") }}" alt="" />
                        <div class="project-item-link-icon">
                            <!-- <a href="page-project-details.html"><i class="base-icon-next"></i></a> -->
                        </div>
                        <div class="project-item-details">
                            <div class="image-project">
                                <img class="img-full" src="{{ asset("public/home/home1block5/{$value_home1_title->proffimage}") }}" style="max-width: 150px; max-height: 90px;" />
                            </div>
                            <br>

                            <h4 class="project-title">{{$value_home1_title->Title_en}}</h4>
                            <h5 class="project-item-title"><a href="page-single-project-item.html">{{$value_home1_title->nameproff}}</a></h5>
                            <div class="project-item-icons">
                              <a href="projects/{{$value_home1_title->slug}}"><i class="fas fa-search"></i></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@php
    $gettitle = App\Models\home11block6model::getRecord();
    $getRecentTitle = App\Models\home11block6model::orderBy('id', 'desc')->first();
@endphp
  <section class="clients-section bg-pos-cc img-lum1 custom-pdb-lg-90" >
    <h5 class="subtitle-products">Partenaires</h5>
    <h2 class="title-products">Our partenaires</h2>
    <div class="section-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="owl-carousel client-items client_box_shadow opacity_1">
            @foreach($gettitle as $value_home1_title)
              <div class="client-item">
                <img src="{{ asset("public/home/home1block6/{$value_home1_title->image}") }}" alt="" />
              </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @php
    $gettitle = App\Models\home11block7model::getRecord();
@endphp
@foreach($gettitle as $value_home1_title)
  <section class="custom-background-end">
    <div class="row">
      <div class="col-md-7 text-description">
        <h3 class="text-white edit-title">
        {{$value_home1_title->title}}
        </h3>
        <div class="btn-catalogue">
          <a href="{{$value_home1_title->link}}">CATALOGUE <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
      
      <div class="col-md-5 ">
        <img class="imagecateg" src="{{ asset("public/home/home1block7/{$value_home1_title->image}") }}" alt="" />
      </div>
    </div>
  </section>
@endforeach  
@endsection