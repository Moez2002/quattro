@extends('admin.layouts.app')
@section('content')

<title>Users</title>


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
                        @if (session('status'))
                            <div class="alert alert-sucess">{{session('status')}}</div>
                        @endif    
                        <div class="card">
                        <div class="card-header">
                                <h3 class="card-title">Add Users</h3>
                            </div>
                            <div class="card-body">
                            <form action="{{url('users')}}" method="POST"  > 
                            {{csrf_field()}}
                                <a href="{{asset('users/create')}}" class="btn btn-primary mb-15" type="submit" style="position:relative; left:925px; width: 150px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> Add User
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-hover table-vcenter table-striped" cellspacing="0" id="addrowExample">
                                        <thead>
                                            <tr>
                                                  
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Roles</th>
                                                <th>Action</th>
                                                 
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                   
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Roles</th>
                                                <th>Action</th>
                                         
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            
                                            <tr class="gradeA">
                                            @foreach ($users as $user)
                                                
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>
                                                    @if (!empty($user->getRoleNames()))
                                                    @foreach ($user->getRoleNames() as $rolename)
                                                    <label class="badge bg-primary mx-1"> {{$rolename}} </label>
                                                    @endforeach

                                                    @endif
                                                </td>    
                                                
                                                                                       
                                                <td class="actions">                                                                                                    
                                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer" aria-hidden="true"></i></button>
                                                    <button class="btn btn-sm btn-icon on-editing button-discard"
                                                    data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close" aria-hidden="true"></i></button>
                                                     
                                                
                                                    </a>
                                                    <a href="{{ url('users/' .$user->id.'/edit')}}" class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                                    data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil" aria-hidden="true"></i></a>
                                                    @can('delete user') 
                                                    <a href="{{ url('users/' .$user->id.'/delete')}}" class="btn btn-sm btn-icon on-default button-remove"
                                                    data-toggle="tooltip" data-original-title="Remove"><i class="icon-trash" aria-hidden="true"></i></button>
                                                    @endcan
                                          
                                                </td>
                                                
                                             
                                            </tr>
                                            @endforeach    
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection