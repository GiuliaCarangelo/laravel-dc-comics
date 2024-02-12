<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/show-style.css">
    <title>New Item Form</title>
</head>
<body>
    <header>
    <h1 class="text-white fw-bolder pb-3">Item Editing Page</h1>
    </header>
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Insert title: </label>
        <input type="text" name="title" value="{{ $comic->title }}" required>
        <br>
        <label for="description">Insert description: </label>
        <input type="text" name="description" value="{{ $comic->description }}" required>
        <br>
        <label for="thumb">Insert image URL: </label>
        <input type="text" name="thumb" value="{{ $comic->thumb }}" required>
        <br>
        <label for="price">Insert a price: </label>
        <input type="text" name="price" value="{{ $comic->price }}" required>
        <br>
        <label for="series">Insert a series type: </label>
        <input type="text" name="series" value="{{ $comic->series }}" required>
        <br>
        <label for="sale_date">Insert a sale date: </label>
        <input type="date" name="sale_date" value="{{ $comic->sale_date}}" required>
        <br>
        <label for="type">Choose a comic type: </label>
        <select name="type" id="type">
            <option @if($comic->type == "comic book") selected @endif value="comic book">Comic Book</option>
            <option @if($comic->type == "graphic novel") selected @endif value="graphic novel">Graphic Novel</option>
        </select>
        <br>
        <label for="artists">Insert artists's name: </label>
        <input type="text" name="artists" value="{{ $comic->artists}}" required>
        <br>
        <label for="writers">Insert writers' name: </label>
        <input type="text" name="writers" value="{{ $comic->writers}}" required>
        <br>
        <input id="submit-btn" type="submit" value="Update Comic Item">
    </form>
</body>
</html>