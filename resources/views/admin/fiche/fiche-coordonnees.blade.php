@extends('admin.layouts.app')
@section('content')
<title>Add coordonnées</title>
    
    <div class="page">

        <!-- start body header --> 
        <div id="page_top" class="section-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Ajouter coordonnées</h1>
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
                <div class="row clearfix ">
                    <div class="col-lg-12">
                        <div class="card-body">
                             <form action="{{route('insertcoordonnees')}}" method="post" enctype="multipart/form-data"> 
                            {{csrf_field()}}
                            <a href="{{asset("/new/coordonnees")}}" class="btn btn-secondary mb-15" type="submit">
                                <i class="icon wb-plus" aria-hidden="true"></i> retour 
                            </a>
                        
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Title (en)</label>
                                        <input type="text" class="form-control" name="title" placeholder="Text..">
                                    </div>

                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Titre (fr)</label>
                                        <input type="text" class="form-control" name="title_fr" placeholder="Text..">
                                    </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Téléphone</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Text..">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Text..">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Adresse</label>
                                    <input type="text" class="form-control" name="adresse" placeholder="Text..">
                                </div>



                           
                                <button href="{{asset("/new/coordonnees")}}" class="btn btn-primary mb-15" type="submit" style="position:relative; left:900px; width: 100px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> Ajouter 
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