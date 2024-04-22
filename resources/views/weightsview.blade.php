<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-4">
    <h1>Weights</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Weight</th>
            </tr>
        </thead>
        <tbody>
            @foreach($weights as $weight)
            <tr>
                <td>{{ $weight->name }}</td>
                <td>{{ $weight->weight }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


</body>
</html>