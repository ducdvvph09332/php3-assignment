<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo4/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Sep 2020 05:28:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Login Cover | CORK - Multipurpose Bootstrap Dashboard Template </title>
    @include('auth.layout.styles.style')
</head>
<body class="form">
    

    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    @yield('main')                   
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image">
                <img src="{{asset('admin/assets/img/img1.jpg')}}" alt="">
            </div>
        </div>
    </div>

    
@include('auth.layout.scripts.script')

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo4/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Sep 2020 05:28:58 GMT -->
</html>