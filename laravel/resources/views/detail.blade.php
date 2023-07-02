<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    title:{{$book->title}}
    <br>
    price:{{$book->price}}
    <br>
    author:{{$book->author}}
    <br>
    description:{{$book->description}}
    <br>
    image:
    <img src="/{{$book->path}}" alt="">
</body>
</html>