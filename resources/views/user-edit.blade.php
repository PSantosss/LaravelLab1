<h2>Edit User</h2>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- Use PUT method for updating the user -->

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $user->name }}" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $user->email }}" required><br><br>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" value="{{ $user->age }}" required><br><br>

    <label for="occupation">Occupation:</label>
    <input type="text" id="occupation" name="occupation" value="{{ $user->occupation }}" required><br><br>

    <input type="submit" value="Update User">
</form>
