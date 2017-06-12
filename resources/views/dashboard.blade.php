<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
<div class="container">
<div class="jumbotron">
<h1 class="display-1">Admin Dashboard</h1>
<a href="{{route('admin.full')}}" class="btn btn-primary">All Medicines</a>
<a href="{{route('admin.original')}}"  class="btn btn-primary">Original Medicines</a>
<a href="{{route('admin.fake')}}"  class="btn btn-primary">Fake Medicines</a>
<a href="{{route('admin.users')}}"  class="btn btn-primary">All Users</a>
<a href="{{route('admin.search')}}"  class="btn btn-primary">Delete a user</a>
<a href="{{route('admin.update')}}"  class="btn btn-primary">update a medicine</a>
</div>
</div>


<br>
<script type="text/javascript" src="{{ URL::asset('bootstrap/js/jquery.js') }}"></script>
</body>
</html>





















{{--@foreach ($records as $rec)--}}
    {{--{{ $rec->med_name }}--}}
    {{--{{ $rec->company_name }}--}}
{{--@endforeach--}}