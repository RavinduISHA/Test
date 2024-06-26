<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- Styles -->

    </head>
    <body class="antialiased">
    <div class="container mt-4">
    <form method="POST" action="{{ route('weight') }}">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-md-4">
            <input type="text" class="form-control" id="email" placeholder="Name">
            </div>
        </div>
        <div class="form-group row mt-4">
            <label class="col-sm-2 col-form-label">Weight</label>
            <div class="col-md-4">
            <input type="decimal" class="form-control" id="weight" placeholder="weight">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
</div>

    </body>
</html>
