{{-- <!DOCTYPE html>
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
    <div class="container d-flex justify-content-center">
        <form method="POST" action="{{route("picture.store")}}" enctype="multipart/form-data" class="text-center d-flex flex-column align-items-center w-50">
            @csrf
            <input type="file" name="src" class="w-50 border border-dark rounded mt-5 my-2">
            <button type="submit" class="btn btn-primary w-25 border-dark text-white my-2">STORE</button>
        </form>
    </div>
    <div class="container">
        @foreach ($pictures as $picture )
        <div class="card" style="width: 18rem;">
            <img src="{{asset("img/".$picture->src)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <a href="{{route("picture.edit",$picture->id)}}" class="btn btn-primary">EDIT</a>
            </div>
          </div>
        @endforeach
    </div>
</body>
</html> --}}
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
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item">
            <img src="..." class="d-block w-100 " height="200"  alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" height="200" alt="...">
          </div>
          <div class="carousel-item bg-danger active">
            <img src="..." class="d-block w-100 " height="200" alt="...">
          </div>
        </div>
      </div>
</body>
</html>