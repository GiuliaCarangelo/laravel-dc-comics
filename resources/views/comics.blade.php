<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style.css">
    <title>Comics Laravel Project</title>
</head>
<body>
    <header>
        <img class="main-logo" src="{{ asset('assets/img/laravel-dc-main-logo.svg') }}" alt="DC Main Logo">
    </header>

    <main>
        @foreach ($comics as $comic)
        <div class="main-container">
            <div class="section-bg">
                <section class="row-container max-vw-100 row d-flex align-content-center justify-content-center my-5 mx-3">
                    <div class="img-container col-3 d-flex align-items-center flex-nowrap">
                        <img class="img-thumbnail rounded float-start d-flex mt-4" src="{{ $comic->thumb }}" alt="{{ $comic->thumb }}">
                    </div>
                    <div class="info-container col-7 d-flex justify-content-start align-items-center flex-column">
                        <section class="text-start justify-content-between w-100">
                            <h2 class="fw-bold">{{ $comic->title }}</h2>
                            <h3 class="fs-2 fw-semibold rounded px-2 py-1 bg-secondary bg-gradient bg-opacity-10">Price: {{ $comic->price }}</h3>
                        </section>
                        <h3 class="fs-6 ">{{ $comic->description }} </h3>
                            <div>
                                <div class="subtext-container d-flex flex-row mx-1">
                                    <div class="col-6 pt-2">
                                        <div class="info-column" class="d-flex flex-column justify-between">
                                            <h3 class="fs-3">Genre</h3>
                                            <h4 class="text-capitalize">{{ $comic->type }}</h4>
                                        </div>
                                        
                                        <div class="info-column" class="d-flex flex-column mb-3 pr-4">
                                            <h3 class="fs-3">Series</h3>
                                            <h4>{{ $comic->series }}</h4>
                                        </div>

                                        <div class="info-column me-5" class="d-flex flex-column mb-3 pr-4">
                                            <h3 class="medium-col fs-3">Sale Date</h3>
                                            <h4>{{ $comic->sale_date }}</h4>
                                        </div>

                                        <div class="info-column artist-column" class="d-flex flex-column mb-3">
                                            <h3>Artist(s)</h3>
                                            <h4 id="artist-info">{{ $comic->artists }}</h4>
                                        </div>

                                        <div class="info-column" class="d-flex flex-column mb-3">
                                            <h3>Writer(s)</h3>
                                            <h4 id="artist-info">{{ $comic->writers }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </section>
            </div>
        </div>
        @endforeach
    </main>
</body>
</html>