<form method="POST" action="{{ route('users.store') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">

    <label for="email">Email:</label>
    <input type="email" name="email" id="email">

    <button type="submit">Add User</button>
</form>
