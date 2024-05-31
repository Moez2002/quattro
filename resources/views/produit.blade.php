@extends('layouts._app')

@section('content')
    <!-- Page Title Start -->
    
    <section class="page-title-section" style="background-image: url('{{ asset('public/assets/images/banner-interne.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-area">
                        <h2 class="page-title">{{ $produit->category }}</h2>
                        <ul class="breadcrumbs-link">
                        
                            <li><a href="">{{ $produit->category }}</a></li>
                            
                            <li class="active">{{ $produit->subcategory }}</li> <!-- Display product title -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Title End -->

    <section class="detail-product">
        <div class="row">
            <div class="col-lg-8">
                <div class="gallery-detail-product">
                    @foreach($produit->images as $image)
                        <img src="{{ asset('public/' . $image->image) }}">  
                    @endforeach
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="description-detail-product">
                    <h2 style="font-size: 100px">{{ $produit->title }}</h2> <!-- Display product title -->
                    <h4>{{ $produit->mini_description }}</h4> <!-- Display mini description -->
                    <p>{{ $produit->description }}</p> <!-- Display description -->
                    <div class="rs-detail-product">
                        <a href="{{ $produit->facebook }}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{ $produit->tiktok }}"><i class="fab fa-tiktok"></i></a>
                        <a href="{{ $produit->instagram }}"><i class="fab fa-instagram"></i></a>
                        <div class="btn-about">
            <a href="{{asset('/Quotationrequest')}}" style="position:relative; left:150px;" >Quotation request <i class="fa fa-arrow-right"></i></a>
          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-product">
        <div class="container-fluid">
            <div class="grid-gallery-1">
                <div class="img-gallery-product">
                    <a class="image-popup-gallery" href="{{ asset("public/produitblock3/{$produit->image1}") }}">
                        <img src="{{ asset("public/produitblock3/{$produit->image1}") }}">
                    </a>
                </div>
                <div class="img-gallery-product">
                    <a class="image-popup-gallery" href="{{ asset("public/produitblock3/{$produit->image2}") }}">
                        <img src="{{ asset("public/produitblock3/{$produit->image2}") }}">
                    </a>
                </div>
            </div>
            <div class="grid-gallery-2">
                <div class="img-gallery-product">
                    <a class="image-popup-gallery" href="{{ asset("public/produitblock3/{$produit->image3}") }}">
                        <img src="{{ asset("public/produitblock3/{$produit->image3}") }}">
                    </a>
                </div>
            </div>
        </div>

    </section>
@endsection
