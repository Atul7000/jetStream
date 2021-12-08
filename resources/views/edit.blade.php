
<h1>Update Data</h1>
<form action="edit" method="post">
    @csrf
    <input type="hidden" name="Id" value="{{ $data->Id }}">
    <input type="text" name="Name" value="{{ $data->Name }}"><br><br>
    <input type="text" name="Email" value="{{ $data->Email }}"><br><br>
    <input type="text" name="Address" value="{{ $data->Address }}"><br><br>
    <button type="submit">Update</button>
</form>