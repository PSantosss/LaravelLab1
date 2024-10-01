<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
</head>
<body>
    <h2>User List</h2>
    <a href="{{ route('users.create') }}">Add User</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
    <tr>
        <td><a href="{{ route('users.show', $user['id']) }}">{{ $user['name'] }}</a></td>
        <td>{{ $user['email'] }}</td>
    </tr>
@endforeach

        </tbody>
    </table>
</body>
</html>
