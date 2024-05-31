@extends('admin.layouts.app')
@section('content')

<title>Categories</title>


    <div class="page">

        <!-- start body header -->
        <div id="page_top" class="section-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Categories</h1>
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
                                <h3 class="card-title">Categories list</h3>
                            </div>
                            <div class="card-body">
                            <form action="{{route('list')}}" method="post"> 
                            @method('destroy')
                            @method('edit')
                            
                             
                             {{ method_field('get') }}
                                <a href="../fiche/fiche-categories" class="btn btn-primary mb-15" type="submit" style="position:relative; left:925px; width: 150px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> Ajouter categorie
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-hover table-vcenter table-striped" cellspacing="0" id="addrowExample">
                                        <thead>
                                            <tr>
                                                  
                                                <th>Categorie</th>
                                                
                                                
                                                

                                                <th>Description</th>
                                                <th>Description_fr</th>
                                                
                                                <th>Créé à</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                
                                                
                                                <th>Categorie</th>
                                                
                                                
                                                

                                                <th>Description</th>
                                                <th>Description_fr</th>
                                                
                                                <th>Créé à</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                           @foreach($getRecord as $value) 
                                            <tr class="gradeA">
                                            <td> {{ $value->name }} </td>
                                            
                                                
                                                
                                                
                                                
                                                <td>{{$value->mini_description}}</td>
                                                <td>{{ $value->getTranslation('mini_description', 'fr') }}</td>
                                                <td>{{$value->created_at}}</td>
                                                                                       
                                                <td class="actions">                                                                                                    
                                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer" aria-hidden="true"></i></button>
                                                    <button class="btn btn-sm btn-icon on-editing button-discard"
                                                    data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close" aria-hidden="true"></i></button>
                                                       
                                                    <a href="{{url('/fiche/fiche-categories-edit/' .$value->id )}}" class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                                    data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil" aria-hidden="true"></i></a>
                                                    @can('delete categories') 
                                                    <a href="{{url('/fiche/fiche-categories/' .$value->id)}}" class="btn btn-sm btn-icon on-default button-remove"
                                                    data-toggle="tooltip" data-original-title="Remove" onclick="confirmation2(event)"><i class="icon-trash" aria-hidden="true"></i></button>
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