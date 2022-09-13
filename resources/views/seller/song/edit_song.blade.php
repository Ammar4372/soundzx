<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('update.song')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="song_path" id="">   
        <input type="submit" value="enter"> 
    </form>
</body>
</html>