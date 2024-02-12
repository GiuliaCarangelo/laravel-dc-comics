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
            <h3 class="fs-2">Price: </h3> 
            <h5 class="d-inline-block fw-lighter">{{ $comic->price }}</h5>
            <h2 class="d-inline-block">Series: </h2>
            <h5 class="d-inline-block fw-lighter">{{ $comic->series }}</h5> 
            <h2>Sale Date: </h2>
            <h5 class="d-inline-block fw-lighter">{{ $comic->sale_date }}</h5>
            <h2>Genre: </h2>
            <h5 class="d-inline-block fw-lighter">{{ $comic->type }}</h5>
            <h2>Artist(s): </h2>
            <h5 class="d-inline-block fw-lighter">{{ $comic->artists }}</h5>
            <h2>Writer(s): </h2>
            <h5 class="d-inline-block fw-lighter">{{ $comic->writers }}</h5>
            <div class="btn-container d-flex justify-content-end pe-5">
                <button class="btn btn-primary me-2"><a class="text-black text-decoration-none" href="{{ route('comics.show', $comic->id) }}">Show</a></button>
                <button class="btn btn-primary me-2"><a class="text-black text-decoration-none" href="{{ route('comics.edit', $comic->id) }}">Edit</a></button>
                <button class="btn btn-primary"><a class="text-black text-decoration-none" href="{{ route('comics.index') }}">Go Back</a></button>
            </div>
        </div>
    </section>

</body>
</html>