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
                                                       
                            <form action="{{url('/fiche/contactfiche/fiche-contactblock2-update/' .$contactblock2->id)}}" method="post" enctype="multipart/form-data" > 
                            @method('PUT')
                            {{csrf_field()}}
                            
                             
                            
                             <a href="{{asset("/new/contact1")}}" class="btn btn-secondary mb-15"  type="submit" style="position:relative; left:925px; width: 80px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> Retour 
                             </a>
                             <div class="row">
                             <div class="col-md-6"> 
                             <div class="form-group">
                                <label class="form-label">facebook Link</label>
                                <input type="text" class="form-control" name="facebook" value="{{$contactblock2->facebook}}" placeholder="Enter YouTube Link">
                             </div>
                             <div class="form-group">
                                <label class="form-label">tiktok Link</label>
                                <input type="text" class="form-control" name="tiktok" value="{{$contactblock2->tiktok}}" placeholder="Enter YouTube Link">
                             </div>
                             <div class="form-group">
                                <label class="form-label">linkedin Link</label>
                                <input type="text" class="form-control" name="linkedin" value="{{$contactblock2->linkedin}}" placeholder="Enter YouTube Link">
                             </div>
                             <div class="form-group">
                                <label class="form-label">instagram Link</label>
                                <input type="text" class="form-control" name="instagram" value="{{$contactblock2->instagram}}" placeholder="Enter YouTube Link">
                             </div>
                             <div class="form-group">
                                <label class="form-label">Map Link</label>
                                <input type="text" class="form-control" name="maps" value="{{$contactblock2->maps}}" placeholder="Enter YouTube Link">
                             </div>
                            </div>
                            </div>
                                
                                <button href="{{asset("/new/contact1")}}"  class="btn btn-primary mb-15" type="submit" style="position:relative; left:900px; width: 100px; height: 40px;">
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