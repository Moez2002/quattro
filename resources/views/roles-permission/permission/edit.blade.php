@extends('admin.layouts.app')
@section('content')
<title>Editer permission</title>
    
    <div class="page">

        <!-- start body header --> 
        <div id="page_top" class="section-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Editer Permission</h1>
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
                            <form action="{{url('permissions/' .$permission->id)}}" method="POST"  > 
                            @method('PUT')
                            {{csrf_field()}}
                             <a href="{{asset('permissions')}}" class="btn btn-secondary mb-15" type="submit" style="position:relative; left:925px; width: 70px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> retour 
                             </a>
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$permission->name}}" placeholder="Name">
                                </div>
                               
                  
                                
                                <button href="{{asset('permissions')}}" class="btn btn-primary mb-15" type="submit" style="position:relative; left:900px; width: 100px; height: 40px;">
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