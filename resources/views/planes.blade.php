<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planes List</title>
</head>
<body>
    <h1>List of Planes</h1>

    <ul>
        @foreach($planes as $plane)
            <li>{{ $plane->name }} - {{ $plane->manufacturer }} - {{ $plane->model }} - {{ $plane->year }}</li>
        @endforeach
    </ul>
</body>
</html>
