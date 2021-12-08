<h1>Add Member</h1>

<form action="add" method="post">
    @csrf
    <input type="text" name="Name" placeholder="enter name"><br><br>
    <input type="text" name="Email" placeholder="enter email"><br><br>
    <input type="text" name="Address" placeholder="enter address"><br><br>
    <button type="submit">Add Member</button>

</form>
