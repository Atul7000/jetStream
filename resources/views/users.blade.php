<h1>Add New Member</h1>

@if(session('user'))
<h3>Data Save For {{session('user')}}</h3>
@endif

<form action="user" method="post">
    @csrf
    <input type="text" name="user" placeholder="enter user name"><br><br>
    <input type="password" name="password" placeholder="enter user password"><br><br>
    <input type="text" name="email" placeholder="enter user email"><br><br>
    <button type="submit">Add User</button>
</form>


