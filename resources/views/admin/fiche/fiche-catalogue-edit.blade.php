@extends('admin.layouts.app')
@section('content')
<title>Edit catalogue </title>
    <div class="page">

        <!-- start body header --> 
        <div id="page_top" class="section-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Edit catalogue</h1>
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
                                                       
                            <form action="{{url('/fiche/fiche-catalogue-update/' .$catalogue->id)}}" method="post" enctype="multipart/form-data" > 
                            @method('PUT')
                            {{csrf_field()}}
                            
                             
                            
                             <a href="{{asset("/tables/catalogue")}}" class="btn btn-secondary mb-15"  type="submit" style="position:relative; left:925px; width: 80px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> Retour 
                             </a>
                             <div class="row">
                                
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Title (en)</label>
                                    <input type="text" class="form-control" value="{{$catalogue->title}}"  name="title" placeholder="Text..">
                                </div>

                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Titre (fr)</label>
                                    <input type="text" class="form-control" value="{{$catalogue->getTranslation('title', 'fr')}}"  name="title_fr" placeholder="Text..">
                                </div>

                                </div>
                            </div>
                                @if($catalogue->file_pdf)
                                    <embed src="{{asset('public/catalogue/'.$catalogue->file_pdf)}}" type="application/pdf" style="width:600px; height:200px;" alt=""/>
                                @endif 

                                <div class="dropify-wrapper">
    <div class="dropify-preview">
        <span class="dropify-render">
            <embed src="{{ asset('public/catalogue/'.$catalogue->file_pdf) }}" type="application/pdf" style="width:600px; height:200px;" alt=""/>
        </span>
    </div>
    <div class="dropify-infos">
        <div class="dropify-infos-inner">
            <p class="dropify-filename">
                <span class="file-icon"></span>
                <span class="dropify-filename-inner">{{ $catalogue->file_pdf }}</span>
            </p>
            <p class="dropify-infos-message">Click to replace the file</p>
        </div>
    </div>
    <input type="file" name="file_pdf" accept="application/pdf" class="dropify" data-default-file="{{ asset('public/catalogue/'.$catalogue->file_pdf) }}">
    <button type="button" class="dropify-clear">Remove</button>
</div>
                  
                                <button href="{{asset("/tables/catalogue")}}"  class="btn btn-primary mb-15" type="submit" style="position:relative; left:900px; width: 100px; height: 40px;">
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