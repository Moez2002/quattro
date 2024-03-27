@extends('admin.layouts.app')
@section('content')
<title>Add Role To Permission</title>
    
    <div class="page">

        <!-- start body header --> 
        <div id="page_top" class="section-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Role :{{$role->name}}</h1>
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
                            <form action="{{url('roles/' .$role->id. '/give-permission')}}" method="POST"  > 
                            @method('PUT')
                            {{csrf_field()}}
                             <a href="{{asset('roles')}}" class="btn btn-secondary mb-15" type="submit" style="position:relative; left:925px; width: 70px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> retour 
                             </a>
                             
                                <div class="form-group">
                                    <label class="form-label" style="font-size: 25px;">Permissions:</label>
                                    <div class="row">
                                    @foreach($permissions as $permission)
                                        <div class="col-md-2">
                                            <label> 
                                                <input
                                                 type="checkbox"
                                                  class="form-control" 
                                                  name="permission[]"
                                                  value="{{$permission->name}}" 
                                                  {{ in_array($permission->id, $rolePermissions) ? 'checked':''}}
                                                  />
                                                {{$permission->name}} 
                                            </label>
                                            
                                        </div>
                                    @endforeach
                                    </div>              
                                </div>
                               
                               
                  
                                
                                <button href="{{asset('roles')}}" class="btn btn-primary mb-15" type="submit" style="position:relative; left:900px; width: 100px; height: 40px;">
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
  


