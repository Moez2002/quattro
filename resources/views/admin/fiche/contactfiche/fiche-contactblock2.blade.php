@extends('admin.layouts.app')
@section('content')
<title>Add block 2</title>
    
    <div class="page">

        <!-- start body header --> 
        <div id="page_top" class="section-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Ajouter block 2</h1>
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
                             <form action="{{route('insertcontactblock2')}}" method="post" enctype="multipart/form-data"> 
                            {{csrf_field()}}
                            <a href="{{asset("/new/aboutus1")}}" class="btn btn-secondary mb-15" type="submit">
                                <i class="icon wb-plus" aria-hidden="true"></i> retour 
                            </a>
                        
                                <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">facebook Link</label>
                                    <input type="text" class="form-control" name="facebook" placeholder="Enter facebook Link">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">tiktok Link</label>
                                    <input type="text" class="form-control" name="tiktok" placeholder="Enter tiktok Link">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">linkedin Link</label>
                                    <input type="text" class="form-control" name="linkedin" placeholder="Enter linkedin Link">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">instagram Link</label>
                                    <input type="text" class="form-control" name="instagram" placeholder="Enter instagram Link">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Map Link</label>
                                    <input type="text" class="form-control" name="maps" placeholder="Enter instagram Link">
                                </div>
                                </div>
                                </div>
                                
                                

                           
                                <button href="{{asset("/new/contact1")}}" class="btn btn-primary mb-15" type="submit" style="position:relative; left:900px; width: 100px; height: 40px;">
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