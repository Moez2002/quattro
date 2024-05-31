@extends('layouts._app')

@section('content')
<div style="background-color: black; color: white; padding: 70px 20px; text-align: center;"></div>
<br><br>
<section class="form-contact">
    <form action="{{route('commentaire.send1')}}" method="POST">
    @csrf
    <h2 style="position:relative; left:30px;">Quotation request</h2><br>
    <p style="position:relative; left:40px;">Your email address will not be published.</p><br>
    <div class="col-lg-12">
    <div class="formulaire-contact row">
        <div class="col-lg-4 col-md-4">
            <div class="input-form" style="margin-right: 5px;">
                <input type="text" id="name" name="name" placeholder="First Name and Last Name"/>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="input-form" style="margin-right: 5px;">
                <input type="tel" id="phone" name="phone" placeholder="Phone">
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="input-form">
                <input type="email" id="email" name="email" placeholder="E-mail">
            </div>
        </div>
        
        <div class="col-lg-12 col-md-12">
            <div class="input-form">
                <textarea id="message" name="message" placeholder="Message"></textarea>
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="btn-form">
                <button type="submit">Send</button>
            </div>
        </div>
    </div>
</div>
    </form>



</section>
@endsection