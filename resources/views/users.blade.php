<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Complete List</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
<div class="container">
    <h1 class="display-1"> Complete List</h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($records as $rec)
            <tr>
                <td>{{ $rec->id }}</td>
                <td>{{ $rec->name }}</td>
                <td> {{ $rec->email }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>





{{--@foreach ($records as $rec)--}}
    {{--{{ $rec->name }}--}}
    {{--{{ $rec->email }}--}}
{{--@endforeach--}}

<button type="button"><a href="{{route('admin.dashboard')}}">Go Back</a></button>