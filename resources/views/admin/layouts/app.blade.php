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
<link rel="stylesheet" href="{{ asset('/public/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" />
<link rel="stylesheet" href="{{ asset('/public/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" />
<link rel="stylesheet" href="{{ asset('/public/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('/public/assets/plugins/multi-select/css/multi-select.css') }}">
<link rel="stylesheet" href="{{ asset('/public/assets/plugins/dropify/css/dropify.min.css') }}">

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
<script>
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title: "Voulez-vous supprimer ce produit?",
            text: "Vous ne pourrez pas revenir en arrière !",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {


                 
                window.location.href = urlToRedirect;
               
            }  


        });

        
    }
</script>
<script>
      function confirmation1(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title: "Voulez-vous supprimer cet utilisateur?",
            text: "Vous ne pourrez pas revenir en arrière !",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {


                 
                window.location.href = urlToRedirect;
               
            }  


        });

        
    }
</script>
<script>
      function confirmation2(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title: "Voulez-vous supprimer cette catégorie?",
            text: "Vous ne pourrez pas revenir en arrière !",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {


                 
                window.location.href = urlToRedirect;
               
            }  


        });

        
    }
</script>
<script>
      function confirmation3(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title: "Voulez-vous vraiment supprimer cet élément ?",
            text: "Vous ne pourrez pas revenir en arrière !",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {


                 
                window.location.href = urlToRedirect;
               
            }  


        });

        
    }
</script>
</body>
</html>

