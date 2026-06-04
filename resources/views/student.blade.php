<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>

@if(isset($error))
    <h2>{{ $error }}</h2>
@else
    <h2>Student Details</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <td>{{ $student['name'] }}</td>
        </tr>
        <tr>
            <th>Course</th>
            <td>{{ $student['course'] }}</td>
        </tr>
        <tr>
            <th>City</th>
            <td>{{ $student['city'] }}</td>
        </tr>
    </table>
@endif

</body>
</html>
