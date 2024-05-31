@extends('admin.layouts.app')
@section('content')

<title>Home</title>


    <div class="page">  

        <!-- start body header -->
        <div id="page_top" class="section-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Home</h1>
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
                            <form action="{{route('homelistblock1')}}" method="post"> 
                            @method('destroy')
                            @method('edit')
                            
                             
                             {{ method_field('get') }}
                                <a href="../fiche/homefiche/fiche-home1block1" class="btn btn-primary mb-15" type="submit" style="position:relative; left:925px; width: 150px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> Ajouter 
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-hover table-vcenter table-striped" cellspacing="0" id="addrowExample">
                                        <thead>
                                            <tr>
                                                  
                                                <th>Title_en</th>
                                                
                                                

                                                <th>description_en</th>
                                                

                                                <th>namelink_en</th>
                                                
                                                
                                                <th>Créé à</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                
                                                
                                                <th>Title_en</th>
                                                
                                                

                                                <th>description_en</th>
                                                

                                                <th>namelink_en</th>
                                                
                                                
                                                <th>Créé à</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($getRecordHome11 as $value) 
                                            <tr class="gradeA">
                                            
                                                
                                                <td>{{$value->title}}</td>                                           
                                                
                                                <td>{{$value->description}}</td>
                                                
                                                <td>{{$value->namelink}}</td>
                                                

                                                
                                                <td>{{$value->created_at}}</td>
                                                                                       
                                                <td class="actions">                                                                                                    
                                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer" aria-hidden="true"></i></button>
                                                    <button class="btn btn-sm btn-icon on-editing button-discard"
                                                    data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close" aria-hidden="true"></i></button>
                                                       
                                                    <a href="{{url('/fiche/homefiche/fiche-home1block1-edit/' .$value->id )}}" class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                                    data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil" aria-hidden="true"></i></a>
                                                    @can('delete homeblocks') 
                                                    <a href="{{url('/fiche/homefiche/fiche-home1block1/' .$value->id)}}" class="btn btn-sm btn-icon on-default button-remove"
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
                            <form action="{{route('homelistblock2')}}" method="post"> 
                            @method('destroy')
                            @method('edit')
                            
                             
                             {{ method_field('get') }}
                                <a href="../fiche/homefiche/fiche-home1block2" class="btn btn-primary mb-15" type="submit" style="position:relative; left:925px; width: 150px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> Ajouter 
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-hover table-vcenter table-striped" cellspacing="0" id="addrowExample">
                                        <thead>
                                            <tr>
                                                  
                                                <th>Title_en</th>
                                                
                                                

                                                <th>description_en</th>
                                                

                                               
                                                
                                                <th>Créé à</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                
                                                
                                                <th>Title_en</th>
                                                
                                                

                                                <th>description_en</th>
                                                

                                                
                                                
                                                <th>Créé à</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($getRecordHome12 as $value) 
                                            <tr class="gradeA">
                                            
                                                
                                                <td>{{$value->title}}</td>                                           
                                                
                                                <td>{{$value->description}}</td>
                                                

                                                
                                                <td>{{$value->created_at}}</td>
                                                                                       
                                                <td class="actions">                                                                                                    
                                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer" aria-hidden="true"></i></button>
                                                    <button class="btn btn-sm btn-icon on-editing button-discard"
                                                    data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close" aria-hidden="true"></i></button>
                                                       
                                                    <a href="{{url('/fiche/homefiche/fiche-home1block2-edit/' .$value->id )}}" class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                                    data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil" aria-hidden="true"></i></a>
                                                    @can('delete homeblocks') 
                                                    <a href="{{url('/fiche/homefiche/fiche-home1block2/' .$value->id)}}" class="btn btn-sm btn-icon on-default button-remove"
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
                                <h3 class="card-title">block 3 list</h3>
                            </div>
                            <div class="card-body">
                            <form action="{{route('homelistblock3')}}" method="post"> 
                            @method('destroy')
                            @method('edit')
                            
                             
                             {{ method_field('get') }}
                                <a href="../fiche/homefiche/fiche-home1block3" class="btn btn-primary mb-15" type="submit" style="position:relative; left:925px; width: 150px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> Ajouter 
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-hover table-vcenter table-striped" cellspacing="0" id="addrowExample">
                                        <thead>
                                            <tr>
                                                  
                                                <th>Title_en</th>
                                                
                                                <th>Titre_fr</th>



                                               
                                                
                                                <th>Créé à</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                
                                                
                                                <th>Title_en</th>
                                                
                                                <th>Titre_fr</th>


                                                
                                                
                                                <th>Créé à</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($getRecordHome13 as $value) 
                                            <tr class="gradeA">
                                            
                                                
                                                <td>{{$value->title}}</td>                                           
                                                <td>{{ $value->getTranslation('title', 'fr') }}</td>

                                                
                                                <td>{{$value->created_at}}</td>
                                                                                       
                                                <td class="actions">                                                                                                    
                                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer" aria-hidden="true"></i></button>
                                                    <button class="btn btn-sm btn-icon on-editing button-discard"
                                                    data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close" aria-hidden="true"></i></button>
                                                       
                                                    <a href="{{url('/fiche/homefiche/fiche-home1block3-edit/' .$value->id )}}" class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                                    data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil" aria-hidden="true"></i></a>
                                                    @can('delete homeblocks') 
                                                    <a href="{{url('/fiche/homefiche/fiche-home1block3/' .$value->id)}}" class="btn btn-sm btn-icon on-default button-remove"
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
                                <h3 class="card-title">block 4 list</h3>
                            </div>
                            <div class="card-body">
                            <form action="{{route('homelistblock4')}}" method="post"> 
                            @method('destroy')
                            @method('edit')
                            
                             
                             {{ method_field('get') }}
                                <a href="../fiche/homefiche/fiche-home1block4" class="btn btn-primary mb-15" type="submit" style="position:relative; left:925px; width: 150px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> Ajouter 
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-hover table-vcenter table-striped" cellspacing="0" id="addrowExample">
                                        <thead>
                                            <tr>
                                                  
                                                <th>Title_en</th>
                                                
                                                <th>Titre_fr</th>

                                                <th>description_en</th>
                                                <th>description_fr</th>

                                               
                                                
                                                <th>Créé à</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                
                                                
                                                <th>Title_en</th>
                                                
                                                <th>Titre_fr</th>

                                                <th>description_en</th>
                                                <th>description_fr</th>

                                                
                                                
                                                <th>Créé à</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($getRecordHome14 as $value) 
                                            <tr class="gradeA">
                                            
                                                
                                                <td>{{$value->title}}</td>                                           
                                                <td>{{ $value->getTranslation('title', 'fr') }}</td>
                                                <td>{{$value->description}}</td>
                                                <td>{{ $value->getTranslation('description', 'fr') }}</td>

                                                
                                                <td>{{$value->created_at}}</td>
                                                                                       
                                                <td class="actions">                                                                                                    
                                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer" aria-hidden="true"></i></button>
                                                    <button class="btn btn-sm btn-icon on-editing button-discard"
                                                    data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close" aria-hidden="true"></i></button>
                                                       
                                                    <a href="{{url('/fiche/homefiche/fiche-home1block4-edit/' .$value->id )}}" class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                                    data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil" aria-hidden="true"></i></a>
                                                    @can('delete homeblocks') 
                                                    <a href="{{url('/fiche/homefiche/fiche-home1block4/' .$value->id)}}" class="btn btn-sm btn-icon on-default button-remove"
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
                                <h3 class="card-title">block 5 list</h3>
                            </div>
                            <div class="card-body">
                            <form action="{{route('homelistblock5')}}" method="post"> 
                            @method('destroy')
                            @method('edit')
                            
                             
                             {{ method_field('get') }}
                                <a href="../fiche/homefiche/fiche-home1block5" class="btn btn-primary mb-15" type="submit" style="position:relative; left:925px; width: 150px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> Ajouter 
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-hover table-vcenter table-striped" cellspacing="0" id="addrowExample">
                                        <thead>
                                            <tr>
                                                  
                                                <th>Title_en</th>
                                                
                                                <th>Titre_fr</th>

                                                <th>Name</th>
                                                

                                               
                                                
                                                <th>Créé à</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                
                                                
                                                <th>Title_en</th>
                                                
                                                <th>Titre_fr</th>

                                                <th>Name</th>
                                                

                                                
                                                
                                                <th>Créé à</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($getRecordHome15 as $value) 
                                            <tr class="gradeA">
                                            
                                                
                                                <td>{{$value->title}}</td>                                           
                                                <td>{{ $value->getTranslation('title', 'fr') }}</td>
                                                <td>{{$value->nameproff}}</td>
                                                

                                                
                                                <td>{{$value->created_at}}</td>
                                                                                       
                                                <td class="actions">                                                                                                    
                                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer" aria-hidden="true"></i></button>
                                                    <button class="btn btn-sm btn-icon on-editing button-discard"
                                                    data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close" aria-hidden="true"></i></button>
                                                       
                                                    <a href="{{url('/fiche/homefiche/fiche-home1block5-edit/' .$value->id )}}" class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                                    data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil" aria-hidden="true"></i></a>
                                                    @can('delete homeblocks') 
                                                    <a href="{{url('/fiche/homefiche/fiche-home1block5/' .$value->id)}}" class="btn btn-sm btn-icon on-default button-remove"
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
                                <h3 class="card-title">block 6 list</h3>
                            </div>
                            <div class="card-body">
                            <form action="{{route('homelistblock6')}}" method="post"> 
                            @method('destroy')
                            @method('edit')
                            
                             
                             {{ method_field('get') }}
                                <a href="../fiche/homefiche/fiche-home1block6" class="btn btn-primary mb-15" type="submit" style="position:relative; left:925px; width: 150px; height: 40px;">
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
                                        @foreach($getRecordHome16 as $value) 
                                            <tr class="gradeA">
                                            
                                                

                                                

                                                
                                                <td>{{$value->created_at}}</td>
                                                                                       
                                                <td class="actions">                                                                                                    
                                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer" aria-hidden="true"></i></button>
                                                    <button class="btn btn-sm btn-icon on-editing button-discard"
                                                    data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close" aria-hidden="true"></i></button>
                                                       
                                                    <a href="{{url('/fiche/homefiche/fiche-home1block6-edit/' .$value->id )}}" class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                                    data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil" aria-hidden="true"></i></a>
                                                    @can('delete homeblocks') 
                                                    <a href="{{url('/fiche/homefiche/fiche-home1block6/' .$value->id)}}" class="btn btn-sm btn-icon on-default button-remove"
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
                                <h3 class="card-title">block 7 list</h3>
                            </div>
                            <div class="card-body">
                            <form action="{{route('homelistblock7')}}" method="post"> 
                            @method('destroy')
                            @method('edit')
                            
                             
                             {{ method_field('get') }}
                                <a href="../fiche/homefiche/fiche-home1block7" class="btn btn-primary mb-15" type="submit" style="position:relative; left:925px; width: 150px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> Ajouter 
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-hover table-vcenter table-striped" cellspacing="0" id="addrowExample">
                                        <thead>
                                            <tr>
                                                  
                                                <th>Title_en</th>
                                                
                                                <th>Titre_fr</th>

                                                
                                                

                                               
                                                
                                                <th>Créé à</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                
                                                
                                                <th>Title_en</th>
                                                
                                                <th>Titre_fr</th>

                                            
                                                

                                                
                                                
                                                <th>Créé à</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($getRecordHome17 as $value) 
                                            <tr class="gradeA">
                                            
                                                
                                                <td>{{$value->title}}</td>                                           
                                                <td>{{ $value->getTranslation('title', 'fr') }}</td>

                                                

                                                
                                                <td>{{$value->created_at}}</td>
                                                                                       
                                                <td class="actions">                                                                                                    
                                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer" aria-hidden="true"></i></button>
                                                    <button class="btn btn-sm btn-icon on-editing button-discard"
                                                    data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close" aria-hidden="true"></i></button>
                                                       
                                                    <a href="{{url('/fiche/homefiche/fiche-home1block7-edit/' .$value->id )}}" class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                                    data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil" aria-hidden="true"></i></a>
                                                    @can('delete homeblocks') 
                                                    <a href="{{url('/fiche/homefiche/fiche-home1block7/' .$value->id)}}" class="btn btn-sm btn-icon on-default button-remove"
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