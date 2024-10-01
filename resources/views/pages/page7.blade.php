<h2>User: {{ $user->name }}</h2>

<ul>
    <li><strong>Email:</strong> {{ $user->email }}</li>
    <li><strong>Age:</strong> {{ $user->age }}</li>
    <li><strong>Occupation:</strong> {{ $user->occupation }}</li>
</ul>

<a href="{{ route('users.edit', $user->id) }}">Edit User</a> |
<a href="{{ route('users.index') }}">Back to Users List</a>
