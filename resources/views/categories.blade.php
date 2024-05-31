@extends('layouts._app')
@section('content')
<section class="page-title-section" style="background-image: url('{{ asset('public/assets/images/banner-interne.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-area">
                        <h2 class="page-title">{{ $category->name }}</h2>
                        <ul class="breadcrumbs-link">
                            <li><a href="/Foire">Home</a></li>
                            <li class="active">{{ $category->name }}</li> <!-- Display product title -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="apropos">
        <div class="container">
            <div class="row flex-apropos">
                <div class="col-lg-6">
                    <div class="img-apropos">
                    
                        <img src="{{ asset("public/categories/{$category->image}") }}">
                        
                    </div>
                    
                    
                </div>
               
                <div class="col-lg-6">
                    <div class="description-apropos">
                        <h4>{{$category->name}}</h4>
                        <h2>{{$category->mini_description}}</h2>
                        <p>
                        {{$category->description}}
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    @php
            $categories = App\Models\categoriesmodel::getRecord();
          @endphp
    <div class="section-content-actualité mrb-80">
      <div class="container">
        <div class="row section-blog justify-content-center">
        
        @foreach($categories as $subcategory)
        @if($subcategory->category_id == $category->id)
          <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="news-wrapper mrb-30">
              <div class="news-thumb">
              <img  src="{{ asset("public/categories/".$subcategory->image) }}" class="img-full" alt="blog" style="width: 100%; height: 400px; object-fit: cover;" />
                <div class="news-top-meta">
                <a href="{{ asset("produit/".$subcategory->slug) }}"><strong><span class="entry-category" >{{$subcategory->name}}</span></strong></a>
                </div>
              </div>
            </div>
          </div>
          @endif 
          @endforeach
          
          
        </div>
      </div>
    </div>




@endsection   