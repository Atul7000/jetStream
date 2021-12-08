<h1>List</h1>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
    </tr>

@foreach($data as $record)
    <tr>
        <td>{{$record->Id}}</td>
        <td>{{$record->Name}}</td>
        <td>{{$record->Email}}</td>
        <td>{{$record->Address}}</td>
    </tr>
@endforeach
</table>

