@extends('admin.layouts.app')
@section('content')

<title>Contact</title>


    <div class="page">  

        <!-- start body header -->
        <div id="page_top" class="section-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Contact</h1>
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
                        <div class="card">
                        <div class="card-header">
                                <h3 class="card-title">block 1 list</h3>
                            </div>
                            <div class="card-body">
                            <form action="{{route('listcontactblock1')}}" method="post"> 
                            @method('destroy')
                            @method('edit')
                            
                             
                             {{ method_field('get') }}
                                <a href="../fiche/contactfiche/fiche-contactblock1" class="btn btn-primary mb-15" type="submit" style="position:relative; left:925px; width: 150px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> Ajouter 
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-hover table-vcenter table-striped" cellspacing="0" id="addrowExample">
                                        <thead>
                                            <tr>
                                                  
                                                <th>Title_en</th>
                                                
                                                

                                                <th>_Title_en</th>
                                                
                                                
                                                <th>Créé à</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                
                                                
                                                <th>Title_en</th>
                                                
                                                

                                                <th>_Title_en</th>
                                                
                                                
                                                <th>Créé à</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($getRecordcontact1 as $value) 
                                            <tr class="gradeA">
                                            
                                                
                                                <td>{{$value->title}}</td>                                           
                                                
                                                <td>{{$value->_title}}</td>
                                                

                                                
                                                <td>{{$value->created_at}}</td>
                                                                                       
                                                <td class="actions">                                                                                                    
                                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer" aria-hidden="true"></i></button>
                                                    <button class="btn btn-sm btn-icon on-editing button-discard"
                                                    data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close" aria-hidden="true"></i></button>
                                                       
                                                    <a href="{{url('/fiche/contactfiche/fiche-contactblock1-edit/' .$value->id )}}" class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                                    data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil" aria-hidden="true"></i></a>
                                                    @can('delete contactblocks') 
                                                    <a href="{{url('/fiche/contactfiche/fiche-contactblock1/' .$value->id)}}" class="btn btn-sm btn-icon on-default button-remove"
                                                    data-toggle="tooltip" data-original-title="Remove" onclick="confirmation3(event)"><i class="icon-trash" aria-hidden="true"></i></button>
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
        <div class="section-body">
            <div class="container-fluid">                 
                
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                        <div class="card-header">
                                <h3 class="card-title">block 2 list</h3>
                            </div>
                            <div class="card-body">
                            <form action="{{route('listcontactblock2')}}" method="post"> 
                            @method('destroy')
                            @method('edit')
                            
                             
                             {{ method_field('get') }}
                                <a href="../fiche/contactfiche/fiche-contactblock2" class="btn btn-primary mb-15" type="submit" style="position:relative; left:925px; width: 150px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> Ajouter 
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-hover table-vcenter table-striped" cellspacing="0" id="addrowExample">
                                        <thead>
                                            <tr>
                                                  
                                                
                                                
                                                <th>Créé à</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                
                                                
                                                
                                                
                                                <th>Créé à</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($getRecordcontact2 as $value) 
                                            <tr class="gradeA">
                                            
                                                
                                                

                                                
                                                <td>{{$value->created_at}}</td>
                                                                                       
                                                <td class="actions">                                                                                                    
                                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer" aria-hidden="true"></i></button>
                                                    <button class="btn btn-sm btn-icon on-editing button-discard"
                                                    data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close" aria-hidden="true"></i></button>
                                                       
                                                    <a href="{{url('/fiche/contactfiche/fiche-contactblock2-edit/' .$value->id )}}" class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                                    data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil" aria-hidden="true"></i></a>
                                                    @can('delete contactblocks') 
                                                    <a href="{{url('/fiche/contactfiche/fiche-contactblock2/' .$value->id)}}" class="btn btn-sm btn-icon on-default button-remove"
                                                    data-toggle="tooltip" data-original-title="Remove" onclick="confirmation3(event)"><i class="icon-trash" aria-hidden="true"></i></button>
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