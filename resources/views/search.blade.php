@extends('layouts._app')
@section('content')
<section class="page-title-section" style="background-image:url('{{ asset("public/assets/images/banner-interne.jpg") }}');">
        <div class="container">
            <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-area">
                <h2 class="page-title">Search</h2>
                <ul class="breadcrumbs-link">
                    <li><a href="/Foire">Home</a></li>:
                    <li class="active" >Search</li>
                </ul>
                </div>
            </div>
            </div>
        </div>
    </section>

    
    <div class="section-content-actualité mrb-80">
        <div class="container">
            <h1>Search Results for "{{ $query }}"</h1><br><br>
            <div class="row section-blog ">
                @forelse ($results as $result)
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="news-wrapper mrb-30">
                            <div class="news-thumb">
                                <img src="{{ asset(('public/produitblock3/' . $result->image3)) }}" class="img-full" alt="blog" style="width: 100%; height: 300px; object-fit: cover;" />
                                
                            </div>
                            <div class="news-description">
                                <h4 class="the-title">
                                    <a href="{{ route('produit', $result->slug) }}">{{ $result->title }}</a>
                                </h4>
                                <p class="the-content">{{ $result->mini_description }}</p>
                                <h5><strong><a href="{{ route('produit', $result->slug) }}">Read more</a></strong></h5>
                                
                            </div>
                        </div>
                    </div>
                @empty
                    <li>No results found</li>
                @endforelse
            </div>
        </div>
    </div>

            



@endsection