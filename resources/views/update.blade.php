<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <script src="{{asset("js/app.js")}}"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="{{route("picture.update",$picture->id)}}" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <input type="file" name="src">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </form>
    </div>
    
</body>
</html>