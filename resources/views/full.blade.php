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
        <th>Medicine Name</th>
        <th>Company Name</th>
        <th>Status</th>

    </tr>
    </thead>
    <tbody>
    @foreach ($records as $rec)
        <tr>
            <td>{{ $rec->med_name }}</td>
            <td> {{ $rec->company_name }}</td>
            <td> {{ $rec->status }}</td>
        </tr>
    @endforeach

    </tbody>
    </table>

    <button type="button"><a href="{{route('admin.dashboard')}}">Go Back</a></button>
</div>


<script type="text/javascript" src="{{ URL::asset('bootstrap/js/jquery.js') }}"></script>
</body>
</html>









{{--@foreach ($records as $rec)--}}
    {{--{{ $rec->med_name }}--}}
    {{--{{ $rec->company_name }}--}}
{{--@endforeach--}}