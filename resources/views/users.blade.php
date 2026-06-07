<h1>Users List</h1>
<div>
    {{
        print_r($xyz);
    }}
</div>
<table border = "1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>phone</td>
    </tr>
    @foreach($xyz as $user)
    <tr>
        <td>{{$user -> id}}</td>
        <td>{{$user -> name}}</td>
        <td>{{$user -> email}}</td>
        <td>{{$user -> phone}}</td>
    </tr>
    @endforeach
</table>
