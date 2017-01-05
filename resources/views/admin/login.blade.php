<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">W</h1>

        </div>
        <h3>欢迎来到微信后台</h3>

        @if($errors->any())

            <ul class="list-group">

                @foreach($errors->all() as $error)

                    <li class="list-group-item list-group-item-danger">{{$error}}</li>

                @endforeach

            </ul>

        @endif

        @if(Session::has('user_login_failed'))

            <ul class="list-group">

                <li class="list-group-item list-group-item-danger">{{Session::get('user_login_failed')}}</li>
            </ul>

                @endif



        <form class="m-t" role="form" action="{{url('admin/login')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Username" required="">
            </div>

            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
            </div>

            <button type="submit" class="btn btn-primary block full-width m-b">登录</button>

            {{--<a href="#"><small>Forgot password?</small></a>--}}
            {{--<p class="text-muted text-center"><small>Do not have an account?</small></p>--}}
            {{--<a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>--}}
        </form>

    </div>
</div>

<!-- Mainly scripts -->
<script src="{{asset('js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>

</html>
