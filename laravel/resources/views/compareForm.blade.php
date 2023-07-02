<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(!empty($respanse))
    <h3> {{$respanse}}</h3>
    @endif
    <form action="/compare" method="post"> 
        @csrf
        select first <br>
       <select name="first">
        @foreach($books as $book)
            <option value="{{$book->id}}">{{$book->title}}</option>
        @endforeach
     
       </select>
       <br>select second <br>
       <select name="second">
        @foreach($books as $book)
            <option value="{{$book->id}}">{{$book->title}}</option>
        @endforeach
     
       </select>
       <input type="submit" name="submit" value="compare">
    </form>

</body>
</html>