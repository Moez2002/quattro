@extends('admin.layouts.app')
@section('content')
<title>Edit produit </title>
    <div class="page">

        <!-- start body header --> 
        <div id="page_top" class="section-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Edit produit</h1>
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
                                                       
                            <form action="{{url('/fiche/fiche-produit-update/' .$produit->id)}}" method="post"  > 
                            @method('PUT')
                            {{csrf_field()}}
                            
                             
                            
                             <a href="{{asset("/tables/produit")}}" class="btn btn-secondary mb-15"  type="submit" style="position:relative; left:925px; width: 80px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> Retour 
                             </a>
                             <div class="row"> 
                                    <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">category (en)</label>
                                        <select class="form-control" name="category">
                                            <option value="">Select</option>
                                            @foreach($getcategory as $value)
                                                <option {{($value->title==$produit->category) ? 'selected':''}} value="{{$value->title}}">{{$value->title}}</option>
                                            @endforeach
                                        </select>    
                                        
                                    </div>
                                    </div>
                                    <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">sub_category (en)</label>
                                        <select class="form-control" name="sub_category">
                                            <option value="">Select</option>
                                            @foreach($getcategory as $value)
                                                <option {{($value->sub_category==$produit->sub_category) ? 'selected':''}} value="{{$value->sub_category}}">{{$value->sub_category}}</option>
                                            @endforeach
                                        </select>    
                                        
                                    </div>
                                    </div>

                                <div class="col-md-6">   
                                <div class="form-group">
                                    <label class="form-label">Title (en)</label>
                                    <input type="text" class="form-control" value="{{$produit->title}}"  name="title" placeholder="Text..">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Description (en) <span class="form-label-small">56/100</span></label>
                                    <textarea class="form-control"   name="description"   rows="6" placeholder="Content..">{{$produit->description}}</textarea>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Titre (fr)</label>
                                    <input type="text" class="form-control" value="{{$produit->getTranslation('title', 'fr')}}"  name="title_fr" placeholder="Text..">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Description (fr) <span class="form-label-small">56/100</span></label>
                                    <textarea class="form-control"   name="description_fr"   rows="6" placeholder="Content..">{{$produit->getTranslation('description', 'fr')}}</textarea>
                                </div>
                                </div>
                            </div>
                                
                            <div class="row">
    @if($produitImages)
        @foreach($produitImages as $key => $image)
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Image {{ $key + 1 }}</h3>
                </div>
                <div class="card-body">
                    <div class="dropify-wrapper">
                        <div class="dropify-preview">
                            <span class="dropify-render">
                                <img src="{{ asset('public/gallery'.($key+1).'/'.$image->image) }}" style="max-height: 200px;" alt="Image {{ $key + 1 }}">
                            </span>
                        </div>
                        <div class="dropify-infos">
                            <div class="dropify-infos-inner">
                                <p class="dropify-filename">
                                    <span class="file-icon"></span> <span class="dropify-filename-inner"></span>
                                </p>
                                <p class="dropify-infos-message">Drag and drop or click to replace</p>
                            </div>
                        </div>
                        <input type="file" name="images[]" class="form-control dropify" accept="image/*" data-default-file="{{ asset('public/gallery'.($key+1).'/'.$image->image) }}">
                        <button type="button" class="dropify-clear">Remove</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @endif
    @for ($i = count($produitImages ?? []); $i < 8; $i++)
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Image {{ $i + 1 }}</h3>
            </div>
            <div class="card-body">
                <div class="dropify-wrapper">
                    <div class="dropify-preview">
                        <span class="dropify-render"></span>
                    </div>
                    <div class="dropify-infos">
                        <div class="dropify-infos-inner">
                            <p class="dropify-filename">
                                <span class="file-icon"></span> <span class="dropify-filename-inner"></span>
                            </p>
                            <p class="dropify-infos-message">Drag and drop or click to replace</p>
                        </div>
                    </div>
                    <input type="file" name="images[]" class="form-control dropify" accept="image/*">
                    <button type="button" class="dropify-clear">Remove</button>
                </div>
            </div>
        </div>
    </div>
    @endfor
</div>
                                <button href="{{asset("/tables/produit")}}"  class="btn btn-primary mb-15" type="submit" style="position:relative; left:900px; width: 100px; height: 40px;">
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