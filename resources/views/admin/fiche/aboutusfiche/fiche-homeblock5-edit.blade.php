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
                                                       
                            <form action="{{url('/fiche/aboutusfiche/fiche-homeblock5-update/' .$homeblock5->id)}}" method="post" enctype="multipart/form-data" > 
                            @method('PUT')
                            {{csrf_field()}}
                            
                             
                            
                             <a href="{{asset("/new/aboutus1")}}" class="btn btn-secondary mb-15"  type="submit" style="position:relative; left:925px; width: 80px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> Retour 
                             </a>
                             <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Title (en)</label>
                                    <input type="text" class="form-control" value="{{$homeblock5->title}}"  name="title" placeholder="Text..">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Description (en) <span class="form-label-small">56/100</span></label>
                                    <textarea class="form-control"   name="description"   rows="6" placeholder="Content..">{{$homeblock5->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Commentaire (en) <span class="form-label-small">56/100</span></label>
                                    <textarea class="form-control"   name="commentaire"   rows="6" placeholder="Content..">{{$homeblock5->commentaire}}</textarea>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Titre (fr)</label>
                                    <input type="text" class="form-control" value="{{$homeblock5->getTranslation('title', 'fr')}}"  name="title_fr" placeholder="Text..">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Description (fr) <span class="form-label-small">56/100</span></label>
                                    <textarea class="form-control"   name="description_fr"   rows="6" placeholder="Content..">{{$homeblock5->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Commentaire (fr) <span class="form-label-small">56/100</span></label>
                                    <textarea class="form-control"   name="commentaire_fr"   rows="6" placeholder="Content..">{{$homeblock5->commentaire}}</textarea>
                                </div>
                                </div>
                            </div>
                                
                                <button href="{{asset("/new/aboutus1")}}"  class="btn btn-primary mb-15" type="submit" style="position:relative; left:900px; width: 100px; height: 40px;">
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