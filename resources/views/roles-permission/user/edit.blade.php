@extends('admin.layouts.app')
@section('content')
<title>Editer User</title>
    
    <div class="page">

        <!-- start body header --> 
        <div id="page_top" class="section-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Editer User</h1>
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
                            <form action="{{url('users/'.$user->id)}}" method="POST"  > 
                            {{csrf_field()}}
                            @method('put')
                             <a href="{{asset('users')}}" class="btn btn-secondary mb-15" type="submit" style="position:relative; left:925px; width: 70px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> retour 
                             </a>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" value="{{ $user->name }}" name="name" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" readonly value="{{ $user->email }}" name="email" placeholder="your-email@domain.com">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control"  name="password" placeholder="Password..">
                                    @error('password') <span class="text-danger"> {{$message}} </span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Select Role</label>
                                    <select name="roles[]" class="form-control" multiple>
                                        
                                        @foreach ($roles as $role)
                                        <option
                                         value="{{$role}}"
                                         {{ in_array($role, $userRoles) ? 'selected': '' }}
                                         >
                                         {{$role}}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('roles') <span class="text-danger"> {{$message}} </span> @enderror

                                </div>
                               
                  
                                
                                <button href="{{asset('users')}}" class="btn btn-primary mb-15" type="submit" style="position:relative; left:900px; width: 100px; height: 40px;">
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