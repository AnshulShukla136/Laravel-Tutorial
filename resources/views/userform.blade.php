<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
</head>
<body>

<h2>Add User</h2>

<form action="/add-user" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Enter Name" required>
        @error('name')
        <span style="color:red">{{ $message }}</span>
    @enderror
    <br><br>

    <input type="email" name="email" placeholder="Enter Email" required>
    @error('email')
    <span style="color:red">{{ $message }}</span>
    @enderror
    <br><br>

    <input type="text" name="phone" placeholder="Enter Phone" required>
    @error('phone')
    <span style="color:red">{{ $message }}</span>
    @enderror
    <br><br>

    <button type="submit">Save</button>
</form>

<hr>

<h2>User List</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>

    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->phone }}</td>
        <td>
            <a href="/delete/{{ $user->id }}">
                <button>Delete</button>
            </a>
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>
