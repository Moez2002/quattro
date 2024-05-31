@extends('layouts._app')
@section('content')
<section class="page-title-section" style="background-image: url('{{ asset("public/assets/images/banner-interne.jpg") }}');">
        <div class="container">
            <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-area">
                <h2 class="page-title">Catalogue</h2>
                <ul class="breadcrumbs-link">
                    <li><a href="/Foire">Home</a></li>:
                    <li class="active" >Catalogue</li>
                </ul>
                </div>
            </div>
            </div>
        </div>
    </section>
@php
    $catalogue = App\Models\catalogueModel::getRecord();
 @endphp
<section class="form-contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                  <div class="container">
                    <div class="row catalogue-section">
                        <h5 class="side-line-left subtitle text-primary-color">EXPLORE OUR CATALOGUE</h5>
                        <h2 class="titre-catalogue">Experience a New Life With Our Design</h2>
                        <p class="catalogue-text-block">Explorez l'univers raffiné de QUATTRO avec notre catalogue exclusif,<br>  offrant 
                          des solutions sur mesure pour des espaces luxueux et <br>  fonctionnels, reflétant votre style unique et votre quête de qualité.</p>
                        <div class="btn-about">
                          <a href="about-us.html">Catalogue 2024 <i class="fa fa-arrow-right"></i></a>
                        </div>
                      </div>
                  </div>
                </div>
                
                <div class="col-lg-6">
                  <div class="col-md-12 col-lg-8 col-xl-6">
                    <div class="about-image-box-style1 about-side-line">
                      <figure class="about-image2">
                        <img class="img-full image" src="public/assets1/images/catalogue/maquette catalogue.jpg" alt="" />
                      </figure>
                    </div>
                  </div>
                </div>
                
            </div>
        </div>
    </section>
@endsection    