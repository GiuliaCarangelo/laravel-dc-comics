<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Comic</title>
</head>
<body>
    <section class="row my-5 mx-3">
        <div class="col-3 d-flex flex-nowrap align-items-center">
            <img class="img-thumbnail rounded-4" src="{{ $comic->thumb }}" alt="{{ $comic->thumb }}">
        </div>
        <div class="col-9 d-flex flex-column py-5">
            <h2 class="fw-bold">{{ $comic->title }}
            <h3 class="fs-5">{{ $comic->description }} </h3>
            <h3 class="fs-2">Price: </h3> {{ $comic->price }}
            <h2>Series: </h2>{{ $comic->series }} 
            <h2>Sale Date: </h2>{{ $comic->sale_date }}
            <h2>Genre: </h2>{{ $comic->type }}
            <h2>Artist(s): </h2>{{ $comic->artists }}
            <h2>Writer(s): </h2>{{ $comic->writers }}
        </div>
    </section>

</body>
</html>