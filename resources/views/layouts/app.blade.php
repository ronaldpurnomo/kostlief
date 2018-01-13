<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')

    {{--CSS--}}

    <link rel="stylesheet" href="{{URL::TO('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::TO('/css/font-awesome.css')}}">

</head>
<body class="bgrepet" style="background-image: URL({{asset('kamarkost.jpg')}}); ">
    @include('layouts.nav')
    

    <br>

    @yield('content')

    {{--Script--}}

    <script src="{{URL::TO('/js/jquery.js')}}"></script>
    <script src="{{URL::TO('/js/bootstrap.js')}}"></script>
    @yield('script')

</body>
</html>
