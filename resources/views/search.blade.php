<form action="{{ route('admin.deleted') }}">
    Search User you want to delete:<br>
    <input type="text" name="search" value="">
    <br>

    <input type="submit" value="Submit">
</form>

<button type="button"><a href="{{route('admin.dashboard')}}">Go Back</a></button>