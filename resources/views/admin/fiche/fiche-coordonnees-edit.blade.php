@extends('admin.layouts.app')
@section('content')
<title>Edit  </title>
    <div class="page">

        <!-- start body header --> 
        <div id="page_top" class="section-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Edit </h1>
                    </div>
                    <div class="right">
                        <div class="notification d-flex">
                            <a href="{{route('logout')}}" type="button" class="btn btn-facebook"><i class="fa fa-power-off mr-2"></i>Sign Out</a>
                            <button class="btn btn-secondary" type="button" > {{Auth::user()->name}} </button>
                 
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
        <div class="section-body">
            <div class="container-fluid">                 
                <div class="row clearfix">
                    <div class="col-lg-12">
                            <div class="card-body">
                                                       
                            <form action="{{url('/fiche/fiche-coordonnees-update/' .$coordonnees->id)}}" method="post" enctype="multipart/form-data" > 
                            @method('PUT')
                            {{csrf_field()}}
                            
                             
                            
                             <a href="{{asset("/new/coordonnees")}}" class="btn btn-secondary mb-15"  type="submit" style="position:relative; left:925px; width: 80px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> Retour 
                             </a>
                             <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Title (en)</label>
                                    <input type="text" class="form-control" value="{{$coordonnees->title}}"  name="title" placeholder="Text..">
                                </div>

                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Titre (fr)</label>
                                    <input type="text" class="form-control" value="{{$coordonnees->getTranslation('title', 'fr')}}"  name="title_fr" placeholder="Text..">
                                </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Téléphone</label>
                                <input type="text" class="form-control" value="{{$coordonnees->phone}}"  name="phone" placeholder="Text..">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" value="{{$coordonnees->email}}"  name="email" placeholder="Text..">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Adresse</label>
                                <input type="text" class="form-control" value="{{$coordonnees->adresse}}"  name="adresse" placeholder="Text..">
                            </div>

                                <button href="{{asset("/new/coordonnees")}}"  class="btn btn-primary mb-15" type="submit" style="position:relative; left:900px; width: 100px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> Update 
                                </button>
                            </form> 
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>

       
        


@endsection