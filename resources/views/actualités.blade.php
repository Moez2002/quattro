@extends('layouts._app')
@section('content')


<section class="page-title-section" style="background-image: url('{{ asset("public/assets/images/banner-interne.jpg") }}');">
        <div class="container">
            <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-area">
                <h2 class="page-title">Actualités</h2>
                <ul class="breadcrumbs-link">
                    <li><a href="/Foire">Home</a></li>:
                    <li class="active" >Actualités</li>
                </ul>
                </div>
            </div>
            </div>
        </div>
    </section>

  @php
    $gettitle = App\Models\ActualitésModel::getRecord();
 @endphp

    <div class="section-content-actualité mrb-80">
      <div class="container">
        <div class="row section-blog justify-content-center">
        @foreach($gettitle as $value_home1_title)
          <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="news-wrapper mrb-30">
              <div class="news-thumb">
                <img src="{{ asset("public/actualités/{$value_home1_title->image}") }}" class="img-full" alt="blog" />
                <div class="news-top-meta">
                  <span class="entry-category">{{$value_home1_title->name}}</span>
                </div>
              </div>
              <div class="news-description">
                <h4 class="the-title"><a href="actualités/detailactualités/{{$value_home1_title->slug}}">{{$value_home1_title->title}}</a></h4>
                <p class="the-content">{{$value_home1_title->description}}</p>
                <div class="news-bottom-part">
                  <div class="post-author">
                    <div class="author-img">
                      <a href="page-news.html">
                        <img src="public/assets1/images/testimonials/testimonial-img1.jpg" class="rounded-circle" alt="#" />
                      </a>
                    </div>
                    <span><a href="">Admin</a></span>
                  </div>
                  <div class="post-link">
                    <span class="entry-date"><i class="far fa-calendar-alt mrr-10 text-primary-color"></i>{{ $value_home1_title->created_at->format('d M, Y') }}</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
      </div>
    </div>





@endsection