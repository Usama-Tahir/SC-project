<form action="{{ route('admin.updated') }}">
    Search User you want to delete:<br>
    <input type="text" name="search" value="">
    <br>
    New Status
    <input type="text" name="medd" value="">
    <br>

    <input type="submit" value="Submit">
</form>

<button type="button"><a href="{{route('admin.dashboard')}}">Go Back</a></button>