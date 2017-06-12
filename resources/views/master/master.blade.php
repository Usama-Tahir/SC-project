<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mybootstrap/css/theme.min.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('mybootstrap/css/font-awesome.min.css')}}">--}}
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

</head>
<body id="page-top" class="index">
    @include('includes.header')
    <div class = "container">
        @yield('content1')
    </div>
    @include('includes.footer')






    <script type="text/javascript" src="{{ URL::asset('bootstrap/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('mybootstrap/js/jqBootstrapValidation.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('mybootstrap/js/contact_me.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('mybootstrap/js/freelancer.min.js') }}"></script>


</body>
</html>