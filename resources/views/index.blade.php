<!DOCTYPE html>
<html>
<head>
    <title>Alle Aufgaben</title>
</head>
<body>
    <h1>Alle Aufgaben</h1>
    <ul>
        @foreach ($todos as $todo)
            <li>
                <strong>Name:</strong> {{ $todo->name }}<br>
                <strong>Beschreibung:</strong> {{ $todo->description ?? 'Keine Beschreibung' }}<br>
                <strong>Fälligkeitsdatum:</strong> {{ $todo->done_until ?? 'Kein Fälligkeitsdatum' }}
            </li>
        @endforeach
    </ul>
</body>
</html>