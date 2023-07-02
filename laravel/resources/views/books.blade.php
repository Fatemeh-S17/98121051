<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/create"> Add Book</a>
    <h1>books</h1>
    <ul>
    
    @foreach($books as $book)
   
    <li>
        <a href="{{"/detail/".$book->id}}"> {{$book -> title}} {{$book -> author}}</a>
       
    </li>
    @endforeach
    </ul>
</body>
</html>