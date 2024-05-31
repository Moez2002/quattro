@extends('layouts._app')
@section('content')   
<section class="page-title-section" style="background-image:url('{{ asset("public/assets/images/banner-interne.jpg") }}');">
        <div class="container">
            <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-area">
                <h2 class="page-title">Detail Actualité</h2>
                <ul class="breadcrumbs-link">
                    <li><a href="/Foire/actualités">Actualités</a></li>:
                    <li class="active" >Detail Actualité</li>
                </ul>
                </div>
            </div>
            </div>
        </div>
    </section>


    <section class="blog-single-news">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12">
            <div class="single-news-details news-wrapper mrb-20">
              <div class="single-news-content">
                <div class="news-thumb">
                  <img src="{{ asset('public/actualités/'.$actualités->image)}}" class="img-full" alt="blog" />
                  <div class="news-top-meta">
                    <span class="entry-category">{{$actualités->name}}</span>
                  </div>
                </div>
                <div class="news-description mrb-35">
                  <h4 class="the-title"><a href="page-news-details.html">{{$actualités->title}}</a></h4>
                  <div class="news-bottom-part">
                    <div class="post-author">
                      <div class="author-img">
                        <a href="page-news.html">
                          <img src="{{ asset('public/assets1/images/testimonials/testimonial-img1.jpg')}}" class="rounded-circle" alt="#" />
                        </a>
                      </div>
                      <span><a href="page-news.html">SYRINE ABID</a></span>
                    </div>
                    <div class="post-link">
                      <span class="entry-date"><i class="far fa-calendar-alt mrr-10 text-primary-color"></i>{{ $actualités->created_at->format('d M, Y') }}</span>
                    </div>
                  </div>
                </div>
                <div class="entry-content">
                  <p class="mrb-35">
                  {{$actualités->longdescription}}
                  </p>
                  <blockquote class="block-quote">
                    <p>provident fugiat tempora architecto mollitia quos maiores perspiciatis obcaecati placeat aunty koi thako Architecto eaque accusamus minima in earum impedit atque quos suscipit esse maiores perspiciatis</p>
                    <span class="text-primary-color">- Alex Joe</span>
                  </blockquote>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection