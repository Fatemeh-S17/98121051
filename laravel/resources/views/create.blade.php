<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- {{print_r(URL(''))}} -->
    <div>
        <!-- <img src="{{URL('images/Bikhaneman.jpg')}}" alt=""> -->
        <form action="/store" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" placeholder="title">
            <br>
            <input type="text" name="price" placeholder="price">
            <br>
            <input type="text" name="author" placeholder="author">
            <br>
           <textarea name="description" cols="30" rows="10">Description</textarea>
           <br>
           <input type="file" name="file">
           <br>
           <input type="submit" name="submit" value="save">
           
        
        </form>
    </div>
</body>
</html>




