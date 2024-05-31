@extends('admin.layouts.app')
@section('content')
<title>Add categories</title>
    
    <div class="page">

        <!-- start body header --> 
        <div id="page_top" class="section-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Ajouter categories</h1>
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
                            <form action="{{route('insert1')}}" method="post" enctype="multipart/form-data" > 
                             {{csrf_field()}}
                             <a href="../tables/categories" class="btn btn-secondary mb-15" type="submit" style="position:relative; left:925px; width: 70px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> retour 
                             </a>
                             <div class="row">
                             <div class="col-lg-12">
                             
                                <div class="form-group">
                                    <label class="form-label">categorie parent</label>
                                    <select class="form-control" name="category_id">
                                         <option value="">No parent category</option>
                                         @foreach($categories as $categorie)
                                         @if($categorie->category_id == null)
                                             <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                         @endif    
                                         @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">categorie name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Text..">
                                </div>
                                </div>
                                    
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Mini_description (en)</label>
                                        <input type="text" class="form-control" name="mini_description" placeholder="Text..">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Description (en) <span class="form-label-small">56/100</span></label>
                                        <textarea class="form-control" name="description" rows="6" placeholder="Content.."></textarea>
                                    </div>


                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Mini Description (fr)</label>
                                        <input type="text" class="form-control" name="mini_description_fr" placeholder="Text..">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Description (fr) <span class="form-label-small">56/100</span></label>
                                        <textarea class="form-control" name="description_fr" rows="6" placeholder="Content.."></textarea>
                                    </div>
                                    </div>
                                </div>
                                
                  
                                <div class="dropify-wrapper"><div class="dropify-message"><span class="file-icon"></span> <p>Drag and drop a file here or click</p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input type="file" name="image" multiple accept="image/*" class="dropify"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                                <button href="{{asset("/tables/categories")}}" class="btn btn-primary mb-15" type="submit" style="position:relative; left:900px; width: 100px; height: 40px;">
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
  