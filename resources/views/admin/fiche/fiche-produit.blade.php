@extends('admin.layouts.app')
@section('content')
<title>Add produit</title>
    
    <div class="page">

        <!-- start body header --> 
        <div id="page_top" class="section-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Ajouter produit</h1>
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
                            <form action="{{route('insert3')}}" method="post" enctype="multipart/form-data"  > 
                             {{csrf_field()}}
                             <a href="../tables/produit" class="btn btn-secondary mb-15" type="submit" style="position:relative; left:925px; width: 70px; height: 40px;">
                                    <i class="icon wb-plus" aria-hidden="true" ></i> retour 
                             </a>
                             <div class="row">
                             <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Categorie parent </label>
                                        <select class="form-control" name="category" required>
                                            <option value="">Select</option>
                                            @foreach($getcategory as $value)
                                            @if($value->category_id == null)
                                                <option value="{{$value->name}}">{{$value->name}}</option>
                                            @endif    
                                            @endforeach
                                        </select>    
                                        
                                    </div>
                                    </div>
                                    <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Categorie </label>
                                        <select class="form-control" name="subcategory" required>
                                            <option value="">Select</option>
                                            @foreach($getcategory as $value)
                                            @if($value->category_id !== null)
                                                <option value="{{$value->name}}">{{$value->name}}</option>
                                            @endif    
                                            @endforeach
                                        </select>    
                                        
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                           
                                    <div class="form-group">
                                        <label class="form-label">Title (en)</label>
                                        <input type="text" class="form-control" name="title" placeholder="Text..">
                                    </div>
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
                                        <label class="form-label">Titre (fr)</label>
                                        <input type="text" class="form-control" name="title_fr" placeholder="Text..">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Mini Description (fr)</label>
                                        <input type="text" class="form-control" name="mini_description_fr" placeholder="Text..">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Description (fr) <span class="form-label-small">56/100</span></label>
                                        <textarea class="form-control" name="description_fr" rows="6" placeholder="Content.."></textarea>
                                    </div>
                                    </div>
                                    <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Facebook</label>
                                        <input type="text" class="form-control" name="facebook" placeholder="Text..">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Instagram</label>
                                        <input type="text" class="form-control" name="instagram" placeholder="Text..">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Tiktok</label>
                                        <input type="text" class="form-control" name="tiktok" placeholder="Text..">
                                    </div>
                                    </div>


                                    <div class="row">
                                    @for ($i = 1; $i <= 8; $i++)
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Image </h3>
            </div>
            <div class="card-body">
                <div class="dropify-wrapper">
                    <input type="file" name="images[]" class="form-control dropify" accept="image/*">
                    <div class="dropify-preview">
                        <span class="dropify-render"><img id="image-preview-{{ $i }}" src="" style="max-height: 200px;" alt="Image {{ $i }}"></span>
                    </div>
                    <div class="dropify-infos">
                        <div class="dropify-infos-inner">
                            <p class="dropify-filename">
                                <span class="file-icon"></span> <span class="dropify-filename-inner"></span>
                            </p>
                            <p class="dropify-infos-message">Drag and drop or click to replace</p>
                        </div>
                    </div>
                    <button type="button" class="dropify-clear">Remove</button>
                </div>
            </div>
        </div>
    </div>
    @endfor
</div>
                        
                            
                            <div class="col-md-4">
                            <h3 class="card-title">Image 1 </h3>  
                            <div class="dropify-wrapper"><div class="dropify-message"><span class="file-icon"></span> <p>Drag and drop a file here or click</p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input type="file" name="image1" multiple accept="image/*" class="dropify"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                            </div>
                            <div class="col-md-4">
                            <h3 class="card-title">Image 2 </h3>  
                            <div class="dropify-wrapper"><div class="dropify-message"><span class="file-icon"></span> <p>Drag and drop a file here or click</p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input type="file" name="image2" multiple accept="image/*" class="dropify"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                            </div>
                            <div class="col-md-4">
                            <h3 class="card-title">Image 3 </h3>  
                            <div class="dropify-wrapper"><div class="dropify-message"><span class="file-icon"></span> <p>Drag and drop a file here or click</p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input type="file" name="image3" multiple accept="image/*" class="dropify"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                            </div>
                        
                        


                                <button href="../tables/produit" class="btn btn-primary mb-15" type="submit" style="position:relative; left:900px; width: 100px; height: 40px;">
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
