<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="Crush it Able The most popular Admin Dashboard template and ui kit">
<meta name="author" content="PuffinTheme the theme designer">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>Login</title>

<!-- Bootstrap Core and vando -->
<link rel="stylesheet" href="../public/assets/plugins/bootstrap/css/bootstrap.min.css" />

<!-- Core css -->
<link rel="stylesheet" href="../public/assets/css/main.css"/>
<link rel="stylesheet" href="../public/assets/css/theme4.css" id="stylesheet"/>

</head>
<body class="font-opensans">
<div class="auth">
    <div class="card"> 
    <div class="text-center mb-5">
            <img src="{{asset('upload/actualités/quattro.png')}}" style="width:100px; height:100px;" alt=""/>
     </div>
        <div class="card-body">
            <div class="card-title">Login to your account</div>
            <form action="{{route('login')}}" method="post"> 
            {{csrf_field()}}
            

            @include('admin.layouts._comments')

                <div class="form-group style2">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" required placeholder="Enter your email">
                </div>
                <div class="form-group style2">
                    <label class="form-label">Password<a href="forgot-password.html" class="float-right small">I forgot password</a></label>
                    <input type="password" class="form-control" name="password" required placeholder="Enter password">
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="remember" />
                    <span class="custom-control-label">Remember me</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block" title="" >Sign in</button>
                </div>
            </form>
        </div>
        <div class="text-center text-muted">
            Don't have account yet? <a href="register.html">Sign up</a>
        </div>
        <div class="card-footer text-center mt-3">
            <a  href="https://www.facebook.com/quattro.tunisie" class="btn btn-icon btn-facebook"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/quattro_officiel/" type="button" class="btn btn-icon btn-instagram"><i class="fa fa-instagram"></i></a>
        </div>
    </div>

</div>

<!-- jQuery and bootstrtap js -->
<script src="../public/assets/bundles/lib.vendor.bundle.js"></script>

<!-- start plugin js file  -->
<!-- Start core js and page js -->
<script src="../public/assets/js/core.js"></script>
</body>
</html>
