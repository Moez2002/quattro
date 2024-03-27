<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="Crush it Able The most popular Admin Dashboard template and ui kit">
<meta name="author" content="PuffinTheme the theme designer">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>



<!-- Bootstrap Core and vandor -->
<link href="{{ asset('/public/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Plugins css -->

<link href="{{ asset('/public/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('/public/assets/plugins/datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('/public/assets/plugins/datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}" rel="stylesheet">

<style>
    td.details-control {
    background: url('../public/assets/images/details_open.png') no-repeat center center;
    cursor: pointer;
}
    tr.shown td.details-control {
        background: url('../public/assets/images/details_close.png') no-repeat center center;
    }
</style>
<!-- Core css -->
<link rel="stylesheet" href="{{asset('/public/assets/css/main.css')}}"/>
<link rel="stylesheet" href="{{asset('/public/assets/css/theme4.css')}}" id="stylesheet"/>
</head>

<body class="font-opensans">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

@include('admin.layouts.header')
@yield('content')
@include('admin.layouts.footer')

<script src="{{ asset("/public/assets/use.typekit.net/zjb5wvv.js") }}"></script>

<!-- jQuery and bootstrtap js -->
<script src="{{asset("/public/assets/bundles/lib.vendor.bundle.js")}}"></script>

<!-- start plugin js file  -->
<script src="{{asset("/public/assets/bundles/dataTables.bundle.js")}}"></script>

<!-- Start core js and page js -->
<script src="{{asset("/public/assets/js/core.js")}}"></script>
<script src="{{asset("/public/assets/js/table/datatable.js")}}"></script>
</body>
</html>

