@extends('master.master')
@section('title')
    first title
@endsection
@section('nava')
    <ul class="nav navbar-nav navbar-right">
    <li class="hidden">
    <a href="#-top"></a>
    </li>
    <li class="page-scroll">
    <a href="{{route('login')}}">Sign In</a>
    </li>
    <li class="page-scroll">
    <a href="{{route('register')}}">Sign Up</a>
    </li>
    <li class="page-scroll">
    <a href="{{ route('add') }}">Admin</a>
    </li>
    </ul>
@endsection
@section('heada')
    <div class="container" id="maincontent" tabindex="-1">
    <div class="row">
    <div class="col-lg-12">
    <img class="img-responsive" src="img/profile.png" alt="">
    <div class="intro-text">
    <h1 class="name">Fake Medicine</h1>
    <hr class="star-light">
    <span class="skills">A complete list of fake medicines</span>
        <button class="btn btn-primary"><a href="{{ route('user.dashboard') }}"> View List</a></button>
    </div>
    </div>
    </div>
    </div>
@endsection
