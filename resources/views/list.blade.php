<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&display=swap" rel="stylesheet">
</head>
<body>
    <main>
      <div class="wrapper">
       @foreach ($cars as $item => $value)
        <div>
            <img src="{{$value->image}}" alt="">
            <h2>{{$value->brand}}</h2>
            <h3>{{$value->model_name}}</h3>
            <h4>{{$value->category}}</h4>
            <h4>{{$value->engine}}</h4>
            <span>{{$value->price}}$</span>
        </div>   
       @endforeach
     </div>
    </main>
</body>
</html>