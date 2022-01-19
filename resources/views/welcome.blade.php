<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>
</head>
<body>
    <div class="col text-center">
    <img src="https://gmedia.net.id/upload/foto_artikel/20200730He8jZyjKT9.png" class="img-fluid" style="width:300px;">
    </div>
    <div class="d-flex justify-content-around">
        <div class="wrapper" style="width:300px;">
            <form method="POST" action="{{route('login')}}">
              @csrf
                    <input class="form-control" type="text" name="username" placeholder="username">
                        <br>
                    <input class="form-control" type="password" name="password" placeholder="password">
                        <br>
                    <div class="col text-center">
                      <button type="submit" class="btn btn-primary">L O G I N</button>
                   </div>
            </form>
        </div>
    </div>
</body>
</html>