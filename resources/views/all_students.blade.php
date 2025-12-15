<!DOCTYPE html>
<html>
<head>
    <title>All Students</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        tr:hover { background-color: #f5f5f5; }
        a { text-decoration: none; color: blue; }
    </style>
</head>
<body>

    <h1>List of All Students</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Student Number</th>
                <th>Course</th> <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->student_number }}</td>
                    <td>{{ $student->course }}</td> <td><a href="{{ url('/student/' . $student->id) }}">View Profile</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>