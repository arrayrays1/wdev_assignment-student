<!DOCTYPE html>
<html>
<body>
    <h1>Student Profile</h1>

    <ul>
        @foreach($student as $key => $value)
            <li>
                <strong>{{ $key }}:</strong> {{ $value }}
            </li>
        @endforeach
    </ul>
</body>
</html>