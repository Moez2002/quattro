@extends('layouts._app')
@section('content')   
   <!-- Page Title Start -->

   @php
    $gettitle = App\Models\contact1block1model::getRecord();
 @endphp
 @foreach($gettitle as $value_contact1_title)
    <section class="page-title-section" style="background-image: url('{{ asset("public/contact/contactblock1/{$value_contact1_title->image}") }}');">
        <div class="container">
            <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-area">
                <h2 class="page-title">{{$value_contact1_title->title}}</h2>
                <ul class="breadcrumbs-link">
                    <li><a href="/Foire">{{$value_contact1_title->_title}}</a></li>
                    <li class="active">{{$value_contact1_title->title}}</li>
                </ul>
                </div>
            </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- Page Title End -->
    @php
    $gettitle = App\Models\contact1block2model::getRecord();
 @endphp
 @foreach($gettitle as $value_contact1_link)
    <section class="rs-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <a href="{{ $value_contact1_link->facebook }}" target="_blank">
                        <div class="box-contact">
                            <div class="icon-contact">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <span>Facebook</span>
                            <p></p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="{{ $value_contact1_link->linkedin }}" target="_blank">
                        <div class="box-contact">
                            <div class="icon-contact">
                                <i class="fab fa-linkedin"></i>
                            </div>
                            <span>Linkedin</span>
                            <p></p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="{{ $value_contact1_link->tiktok }}" target="_blank">
                        <div class="box-contact">
                            <div class="icon-contact">
                                <i class="fab fa-tiktok"></i>
                            </div>
                            <span>Tiktok</span>
                            <p></p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="{{ $value_contact1_link->instagram }}" target="_blank">
                        <div class="box-contact">
                            <div class="icon-contact">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <span>Instagram</span>
                            <p></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endforeach

    <section class="form-contact">
        <div class="container-fluid">
        @if (session()->has('success'))
            <div class="alert alert-success mt-4 ml-4 mr-4 col-4" role="alert">
                {{session('success')}}
            </div>
        @endif
        <form action="{{route('contact.send')}}" method="POST">
        @csrf
            <div class="row">
                <div class="col-lg-6">
                @php
                    $gettitle = App\Models\contact1block2model::getRecord();
                @endphp
                @foreach($gettitle as $value_contact1_link)
                    <div class="map-contact">
                        <iframe src="{{ $value_contact1_link->maps }}" width="744" height="694" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                @endforeach    
                </div>
                
                <div class="col-lg-6">
                    <div class="formulaire-contact">
                        <div class="input-form">
                            <input type="text" id="name" name="name" placeholder="First Name and Last Name"/>
                         </div>
                        <div class="input-form">
                            <input type="tel" id="phone" name="phone" placeholder="Phone">
                        </div>
                        <div class="input-form">
                            <input type="email" id="email" name="email" placeholder="E-mail">
                        </div>
                        <div class="input-form">
                            <textarea id="message" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="btn-form">
                            <button type="submit">Send</button>
                        </div>
                    </div>
                </div>
                  
            </div>
        </form>
        </div>
    </section>
@endsection    