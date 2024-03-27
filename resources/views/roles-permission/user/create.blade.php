@extends('admin.layouts.app')
@section('content')
<title>Ajouter User</title>
    
    <div class="page">

        <!-- start body header --> 
        <div id="page_top" class="section-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Ajouter User</h1>
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
                            <form action="{{url('users')}}" method="POST"  > 
                            {{csrf_field()}}
                             <a href="{{asset('users')}}" class="btn btn-secondary mb-15" type="submit" style="position:relative; left:925px; width: 70px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> retour 
                             </a>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="your-email@domain.com">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password..">
                                </div>
                                <div class="form-group">
                                    <label for="">Select Role</label>
                                    <select name="roles[]" class="form-control" multiple>
                                        
                                        @foreach ($roles as $role)
                                        <option value="{{$role}}">{{$role}}</option>
                                        @endforeach
                                    </select>

                                </div>
                               
                  
                                
                                <button href="{{asset('users')}}" class="btn btn-primary mb-15" type="submit" style="position:relative; left:900px; width: 100px; height: 40px;">
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
 

