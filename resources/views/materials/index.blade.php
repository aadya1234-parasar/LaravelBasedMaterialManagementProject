<!DOCTYPE html>
<html>
<head>
    <title>Materials</title>
</head>
<body>
    <h1>Materials List</h1>
    <ul>
        @foreach ($materials as $material)
            <li>{{ $material->name }} - Opening Balance: {{ $material->opening_balance }}</li>
        @endforeach
    </ul>
</body>
</html>

// code Author: AADYA PARASAR
