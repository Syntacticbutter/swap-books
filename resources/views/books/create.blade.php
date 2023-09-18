<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add book</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('book.store')}}">
        @csrf
        @method('post')
        <div>
            <!-- title -->
            <label>Title: </label>
            <input type="text" name="title" id="title" placeholder="Fire Punch">
        </div>
        <div>
            <!-- author -->
            <label>Author: </label>
            <input type="text" name="author" id="author" placeholder="Thomas Manga">
        </div>
        <div>
            <!-- publisher -->
            <label>Publisher: </label>
            <input type="text" name="publisher" id="publisher" placeholder="Viz">
        </div>
        <div>
            <!-- edition -->
            <label>Edition: </label>
            <input type="number" name="edition" id="edition" min="1" placeholder="Edition">
        </div>
        <div>
            <!-- year -->
            <label>Year: </label>
            <input type="number" name="year" id="year" min="1900" max="2100" maxlength="4" placeholder="20XX">
        </div>
        <div>
            <!-- price -->
            <label>Price (in USD): </label>
            <input type="number" step="0.01" name="price" id="price" min="0.00" placeholder="$3.50">
        </div>
        <div>
            <!-- quantity -->
            <label>Quantity: </label>
            <input type="number" name="quantity" id="quantity" min="0" placeholder="200,000,000">
        </div>
        <div>
            <!-- status -->
            <label>Status: </label>
            <input type="text" name="status" id="status" placeholder="Missing in action">
        </div>
        <div>
            <input type="submit" value="Go">
        </div>
    </form>
</body>
</html>