<h2>Add User</h2>

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <br>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <br>
    <div>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="1" required>
    </div>
    <br>
    <div>
        <label for="occupation">Occupation:</label>
        <input type="text" id="occupation" name="occupation" required>
    </div>
    <br>
    <input type="submit" value="Add User">
</form>
