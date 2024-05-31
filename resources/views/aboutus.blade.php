@extends('layouts._app')
@section('content')

 <!-- Page Title Start -->
 @php
    $gettitle = App\Models\home1model::getRecord();
 @endphp
 @foreach($gettitle as $value_home1_title)
    <section class="page-title-section" style="background-image: url('{{ asset("public/homeblock1/{$value_home1_title->image}") }}');">
        <div class="container">
            <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-area">
                
              
                <h2 class="page-title">{{$value_home1_title->title}}</h2>
                <ul class="breadcrumbs-link">
                    <li><a href="/Foire">{{$value_home1_title->_title}}</a></li>
                    <li class="active">{{$value_home1_title->title}}</li>
                </ul>
                </div>
                
            </div>
            </div>
        </div>
    </section>
  @endforeach
    <!-- Page Title End -->

    <section class="apropos">
        <div class="container">
            <div class="row flex-apropos">
                 @php
                  $gettitle = App\Models\home1block2model::getRecord();
                @endphp
                <div class="col-lg-6">
                    <div class="img-apropos">
                    @foreach($gettitle as $value_home1_title)
                        <img src="{{ asset("public/homeblock2/{$value_home1_title->image}") }}">
                        <div class="experience-apropos">
                            <div class="num-experience">
                                <div class="counter" data-countto="25" data-duration="2000">0 </div>
                                <span>+</span>
                            </div>
                            
                            <p>years experience working</p>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                @php
                  $gettitle = App\Models\home1block2model::getRecord();
                @endphp
                @foreach($gettitle as $value_home1_title)
                <div class="col-lg-6">
                    <div class="description-apropos">
                        <h4>About us</h4>
                        <h2>{{$value_home1_title->title}}</h2>
                        <p>
                        {{$value_home1_title->description}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="collection-apropos">
        <div class="container-fluid">
                @php
                  $gettitle = App\Models\home1block3model::getRecord();
                @endphp
                @foreach($gettitle as $value_home1_title)
            <h4>New collection</h4>
            <h2>{{$value_home1_title->title}} </h2>
            <div class="img-collection">
                <img src="{{ asset("public/homeblock3/{$value_home1_title->image}") }}">
                    <div class="icon-play-apropos">
                      <a class="popup-apropos" href="{{ $value_home1_title->link }}">
                        <i class="base-icon-play1"></i>
                      </a>
                    </div>
                    @endforeach
            </div>
        </div>
    </section>
    <section class="choose-apropos">
      <div class="container-fluid">
        <div class="row">

                 
          <div class="col-lg-4">
            <h4>Why Choose Us</h4>
            <h2>We provide<br>more than just<br>quality services</h2>
          </div>
          
          
          <div class="col-lg-8">

            <div class="items-choose-apropos">
            @php
                  $gettitle = App\Models\home1block4model::getRecord();
                  $getRecentTitle = App\Models\home1block4model::orderBy('id', 'desc')->first();
                @endphp
               @foreach($gettitle as $value_home1_title)
              <div class="item-choose-apropos">
                <div class="flex-item-choose">
                  <div class="icon-item-choose">
                    <img src="{{ asset("public/homeblock4/{$value_home1_title->image}") }}">
                  </div>
                  <div class="titre-item-choose">{{$value_home1_title->title}}</div>
                </div>
                <p>{{$value_home1_title->description}}</p>
              </div>
              @endforeach

            </div>
            
          </div>
        </div>
      </div>
    </section>
    <section class="newsletter">
       <div class="container">
          @php
            $gettitle = App\Models\home1block5model::getRecord();
          @endphp
          @foreach($gettitle as $value_home1_title)
          <h4>{{$value_home1_title->title}}</h4>
          <h2>{{$value_home1_title->description}}</h2>
          <p>{{$value_home1_title->commentaire}}</p>
          @endforeach
          <form action="{{route('insertemail')}}" method="post">
          @csrf
          <div class="form-newsletter">
            <input type="email" id="email" name="email" class="email" placeholder="Enter your email">
            <button class="btn-newsletter" type="submit" value="Submit">Subscribe</button>
          </div>
          </form>
       </div>
    </section>

     <!-- Footer Area Start -->
  
  <!-- Footer Area End -->
  @endsection